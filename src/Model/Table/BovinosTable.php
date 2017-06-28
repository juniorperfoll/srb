<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bovinos Model
 *
 * @method \App\Model\Entity\Bovino get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bovino newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bovino[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bovino|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bovino patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bovino[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bovino findOrCreate($search, callable $callback = null, $options = [])
 */
class BovinosTable extends Table
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

        $this->setTable('bovinos');
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('raca', 'create')
            ->notEmpty('raca');

        return $validator;
    }
}
