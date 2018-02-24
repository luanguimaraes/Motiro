<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
class EventsTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);
    $this->table('events');
    $this->displayField('label');
    $this->primaryKey('id');
    $this->addBehavior('Timestamp');
    $this->hasMany('Schedules', ['foreignKey' => 'event_id']);
  }
}
