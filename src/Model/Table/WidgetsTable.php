<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Widgets Model
 *
 * @method \App\Model\Entity\Widget get($primaryKey, $options = [])
 * @method \App\Model\Entity\Widget newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Widget[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Widget|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Widget patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Widget[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Widget findOrCreate($search, callable $callback = null)
 */
class WidgetsTable extends Table
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

        $this->table('widgets');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('part_no');

        $validator
            ->integer('quantity')
            ->allowEmpty('quantity');

        return $validator;
    }
}
