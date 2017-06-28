<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ordenhas Model
 *
 * @method \App\Model\Entity\Ordenha get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ordenha newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ordenha[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ordenha|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ordenha patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ordenha[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ordenha findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdenhasTable extends Table
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

        $this->setTable('ordenhas');
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
            ->date('data')
            ->requirePresence('data', 'create')
            ->notEmpty('data');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        return $validator;
    }
}
