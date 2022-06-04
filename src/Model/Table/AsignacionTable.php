<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asignacion Model
 *
 * @method \App\Model\Entity\Asignacion newEmptyEntity()
 * @method \App\Model\Entity\Asignacion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Asignacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asignacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asignacion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Asignacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asignacion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asignacion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asignacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asignacion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignacion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignacion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Asignacion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AsignacionTable extends Table
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

        $this->setTable('asignacion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->allowEmptyString('id_user');

        $validator
            ->integer('id_farmacos')
            ->requirePresence('id_farmacos', 'create')
            ->notEmptyString('id_farmacos');

        $validator
            ->integer('tomas')
            ->allowEmptyString('tomas');

        $validator
            ->scalar('dias')
            ->maxLength('dias', 255)
            ->requirePresence('dias', 'create')
            ->notEmptyString('dias');

        return $validator;
    }
}
