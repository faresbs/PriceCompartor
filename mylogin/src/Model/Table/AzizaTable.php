<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aziza Model
 *
 * @method \App\Model\Entity\Aziza get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aziza newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aziza[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aziza|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aziza patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aziza[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aziza findOrCreate($search, callable $callback = null)
 */
class AzizaTable extends Table
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

        $this->table('aziza');
        $this->displayField('id');
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
            ->requirePresence('categorie', 'create')
            ->notEmpty('categorie');

        $validator
            ->requirePresence('nom', 'create')
            ->notEmpty('nom');

        $validator
            ->requirePresence('marque', 'create')
            ->notEmpty('marque');

        $validator
            ->integer('prix')
            ->requirePresence('prix', 'create')
            ->notEmpty('prix');

        $validator
            ->integer('promotion')
            ->allowEmpty('promotion');

        $validator
            ->date('debut_promotion')
            ->allowEmpty('debut_promotion');

        $validator
            ->date('fin_promotion')
            ->allowEmpty('fin_promotion');

        return $validator;
    }
}
