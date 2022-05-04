<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pastillas Model
 *
 * @method \App\Model\Entity\Pastilla newEmptyEntity()
 * @method \App\Model\Entity\Pastilla newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pastilla[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pastilla get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pastilla findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pastilla patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pastilla[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pastilla|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pastilla saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pastilla[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pastilla[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pastilla[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pastilla[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PastillasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('pastillas');
        $this->setDisplayField('id_pastillas');
        $this->setPrimaryKey('id_pastillas');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            // ->integer('id_pastillas')
            ->allowEmptyString('id_pastillas', null, 'create')
            ->scalar('id_pastillas')
            ->maxLength('id_pastillas', 255)
            ->requirePresence('id_pastillas', 'create');
            // ->notEmptyString('id_pastillas');

        $validator
            ->scalar('marca')
            ->maxLength('marca', 255)
            ->requirePresence('marca', 'create')
            ->notEmptyString('marca');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 255)
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        $validator
            ->scalar('color')
            ->maxLength('color', 255)
            ->requirePresence('color', 'create')
            ->notEmptyString('color');

        $validator
            ->scalar('peso')
            ->maxLength('peso', 255)
            ->requirePresence('peso', 'create')
            ->notEmptyString('peso');

        $validator
            ->scalar('observaciones')
            ->maxLength('observaciones', 255)
            ->requirePresence('observaciones', 'create')
            ->allowEmptyString('observaciones', null, 'create');
            // ->notEmptyString('observaciones');

        $validator
            ->scalar('imagen')
            ->maxLength('imagen', 255)
            ->requirePresence('imagen', 'create')
            ->allowEmptyString('imagen', null, 'create');
            // ->notEmptyString('imagen');

        return $validator;
    }
}
