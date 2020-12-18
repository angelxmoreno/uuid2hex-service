<?php
declare(strict_types=1);

namespace App\Model;

use Cake\ORM\Behavior\TimestampBehavior;
use Cake\ORM\Table;

/**
 * Class TableBase
 * @package App\Model
 */
abstract class TableBase extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->addBehavior(TimestampBehavior::class);
    }
}