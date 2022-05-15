<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        // Add the behaviour and configure any options you want
        /* $this->addBehavior('Proffer.Proffer', [
            'imagen' => [	// The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'imagen_dir',	// The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'portrait' => [	// Define the prefix of your thumbnail
                        'w' => 100,	// Width
                        'h' => 300,	// Height
                        'crop' => true,
                        'jpeg_quality'	=> 100
                    ],
                    // 'portrait' => [		// Define a second thumbnail
                    //     'w' => 100,
                    //     'h' => 300
                    // ],
                ],
                'thumbnailMethod' => 'gd'	// Options are Imagick or Gd
            ]
        ]); */
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
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 255)
            ->requirePresence('apellidos', 'create')
            ->notEmptyString('apellidos');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->integer('num_ss')
            ->maxLength('num_ss', 12)
            ->minLength('num_ss', 12)
            ->requirePresence('num_ss', 'create')
            ->notEmptyString('num_ss');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 255)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('role')
            ->maxLength('role', 255)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->scalar('medico_asignado')
            ->maxLength('medico_asignado', 255)
            ->requirePresence('medico_asignado', 'create')
            ->notEmptyString('medico_asignado');

        $validator
            ->scalar('imagen')
            ->maxLength('imagen', 255)
            ->requirePresence('imagen', 'create')
            ->notEmptyFile('imagen');

        return $validator;
    }
}
