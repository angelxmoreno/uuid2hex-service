<?php
declare(strict_types=1);

namespace App\Application\Actions\LookUp;

use App\Model\Entity\RequestLog;
use App\Model\Entity\Uuid2Hexs;
use App\Model\Enum\RequestLogStatus;
use App\Utils\UUIDValidator;
use Cake\Utility\Hash;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class LookUpAction
 * @package App\Application\Actions\LookUp
 */
class LookUpAction extends ActionBase
{

    /**
     * @inheritDoc
     */
    protected function action(): Response
    {
        $requestLog = new RequestLog();
        $requestLog->method = $this->request->getMethod();
        $requestLog->ip = $this->request->getAttribute('ip_address');
        $requestLog->headers = $this->request->getHeaders();

        try {
            $requestLog->body = (array)$this->getFormData();
        } catch (\Exception $e) {
            $requestLog->body = (array)$this->request->getParsedBody();
        }

        $uuid = Hash::get((array)$requestLog->body, 'uuid', false);

        if (!$uuid || !UUIDValidator::isValid($uuid)) {
            $requestLog->status = RequestLogStatus::FAILED();
            $requestLog->reason = 'Invalid or missing UUID';
            $this->RequestLogs->saveOrFail($requestLog);
            return $this->respondWithData([
                'error' => $requestLog->reason,
            ], 400);
        }

        $requestLog->status = RequestLogStatus::PENDING();
        $this->RequestLogs->saveOrFail($requestLog);

        $uuid2hex_conditions = compact('uuid');
        $exists = $this->Uuid2Hexs->exists($uuid2hex_conditions);
        if ($exists) {
            /** @var Uuid2Hexs $uuid2hex */
            $uuid2hex = $this->Uuid2Hexs->find()->where($uuid2hex_conditions)->first();
            $requestLog->status = RequestLogStatus::FETCHED();
        } else {
            /** @var Uuid2Hexs $uuid2hex */
            $uuid2hex = $this->Uuid2Hexs->newEntity($uuid2hex_conditions);
            $this->Uuid2Hexs->saveOrFail($uuid2hex);
            $requestLog->status = RequestLogStatus::CREATED();
        }

        $requestLog->uuid2hex_id = $uuid2hex->id;
        $this->RequestLogs->saveOrFail($requestLog);

        $hex = $uuid2hex->hex;
        return $this->respondWithData(compact('uuid', 'hex'));
    }
}