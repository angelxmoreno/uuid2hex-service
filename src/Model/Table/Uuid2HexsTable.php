<?php
declare(strict_types=1);

namespace App\Model\Table;

use App\Model\TableBase;
use Cake\Event\Event;
use Cake\ORM\Entity;

/**
 * Class Uuid2Hexs Table
 * @package App\Model\Table
 */
class Uuid2HexsTable extends TableBase
{
    /**
     * @param Event $event
     * @param Entity $entity
     * @param \ArrayObject $options
     */
    public function beforeSave(Event $event, Entity $entity, \ArrayObject $options)
    {
        if (!$entity->hasValue('hex')) {
            $entity->set('hex', $this->generateUniqueHex());
        }
    }

    protected function generateUniqueHex(): string
    {
        $hex = $this->createRandom16CharHex();
        if ($this->exists(compact('hex'))) {
            return $this->createRandom16CharHex();
        }

        return $hex;
    }

    protected function createRandom16CharHex(): string
    {
        return substr(uniqid() . uniqid(), 0, 16);
    }
}