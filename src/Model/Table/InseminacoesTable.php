<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inseminacoes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Bovinos
 * @property \Cake\ORM\Association\BelongsTo $Inserminadors
 *
 * @method \App\Model\Entity\Inseminaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inseminaco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inseminaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inseminaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inseminaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inseminaco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inseminaco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InseminacoesTable extends Table
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

        $this->setTable('inseminacoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Bovinos', [
            'foreignKey' => 'bovino_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Inseminadors', [
            'foreignKey' => 'inseminador_id',
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
            ->date('data')
            ->requirePresence('data', 'create')
            ->notEmpty('data');

        $validator
            ->requirePresence('m_t', 'create')
            ->notEmpty('m_t');

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
        $rules->add($rules->existsIn(['inseminador_id'], 'Inseminadores'));

        return $rules;
    }
}
