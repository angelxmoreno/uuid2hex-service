<?php
declare(strict_types=1);

namespace App\Model\Table;

use App\Model\Entity\Uuid2hex;
use App\Model\TableBase;
use Cake\Event\Event;

/**
 * Class Uuid2Hexs Table
 * @package App\Model\Table
 */
class Uuid2HexsTable extends TableBase
{
    /**
     * @param Event $event
     * @param Uuid2hex $entity
     * @param \ArrayObject $options
     */
    public function beforeSave(Event $event, Uuid2hex $entity, \ArrayObject $options)
    {
        if (!$entity->hasValue('hex')) {
            $entity->hex = substr(uniqid() . uniqid(), 0, 16);
        }
    }
}