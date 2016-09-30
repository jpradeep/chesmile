<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserProfile Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UserProfile get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserProfile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserProfile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserProfile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserProfile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserProfile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserProfile findOrCreate($search, callable $callback = null)
 */
class UserProfileTable extends Table
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

        $this->table('user_profile');
        $this->displayField('fullname');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->allowEmpty('Mobile');

        $validator
            ->allowEmpty('Address_1');

        $validator
            ->allowEmpty('Address_2');

        $validator
            ->allowEmpty('City');

        $validator
            ->allowEmpty('State');

        $validator
            ->allowEmpty('Country');

        $validator
            ->integer('Zipcode')
            ->allowEmpty('Zipcode');

        $validator
            ->allowEmpty('Photo');

        $validator
            ->dateTime('Created')
            ->allowEmpty('Created');

        $validator
            ->dateTime('Modified')
            ->allowEmpty('Modified');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
