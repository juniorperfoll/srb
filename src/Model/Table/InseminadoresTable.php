<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inseminadores Model
 *
 * @method \App\Model\Entity\Inseminadore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inseminadore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inseminadore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inseminadore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inseminadore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inseminadore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inseminadore findOrCreate($search, callable $callback = null, $options = [])
 */
class InseminadoresTable extends Table
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

        $this->setTable('inseminadors');
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

        return $validator;
    }
}
