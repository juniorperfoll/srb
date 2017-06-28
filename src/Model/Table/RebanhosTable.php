<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rebanhos Model
 *
 * @method \App\Model\Entity\Rebanho get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rebanho newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rebanho[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rebanho|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rebanho patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rebanho[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rebanho findOrCreate($search, callable $callback = null, $options = [])
 */
class RebanhosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('rebanhos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_bovino')
            ->requirePresence('id_bovino', 'create')
            ->notEmpty('id_bovino');

        return $validator;
    }
}
