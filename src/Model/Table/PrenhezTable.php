<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prenhez Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Bovinos
 *
 * @method \App\Model\Entity\Prenhez get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prenhez newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prenhez[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prenhez|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prenhez patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prenhez[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prenhez findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PrenhezTable extends Table
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

        $this->setTable('prenhez');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Bovinos', [
            'foreignKey' => 'bovino_id',
            'joinType' => 'INNER'
        ]);
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
            ->dateTime('data_inicial')
            ->requirePresence('data_inicial', 'create')
            ->notEmpty('data_inicial');

        $validator
            ->dateTime('data_provavel')
            ->requirePresence('data_provavel', 'create')
            ->notEmpty('data_provavel');

        $validator
            ->boolean('ocorreu')
            ->requirePresence('ocorreu', 'create')
            ->notEmpty('ocorreu');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['bovino_id'], 'Bovinos'));

        return $rules;
    }
}
