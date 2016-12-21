<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carefour Model
 *
 * @method \App\Model\Entity\Carefour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carefour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Carefour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carefour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carefour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carefour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carefour findOrCreate($search, callable $callback = null)
 */
class CarefourTable extends Table
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

        $this->table('carefour');
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
            ->requirePresence('promotion', 'create')
            ->notEmpty('promotion');

        $validator
            ->date('debut_promotion')
            ->requirePresence('debut_promotion', 'create')
            ->notEmpty('debut_promotion');

        $validator
            ->date('fin_promotion')
            ->requirePresence('fin_promotion', 'create')
            ->notEmpty('fin_promotion');

        return $validator;
    }
}
