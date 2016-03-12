<?php
namespace App\Model\Table;

use App\Model\Entity\Galeria;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Galerias Model
 *
 * @property \Cake\ORM\Association\HasMany $GaleriasImg
 * @property \Cake\ORM\Association\HasMany $Noticias
 * @property \Cake\ORM\Association\HasMany $Produtos
 */
class GaleriasTable extends Table
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

        $this->table('galerias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('GaleriasImg', [
            'foreignKey' => 'galeria_id'
        ]);
        $this->hasMany('Noticias', [
            'foreignKey' => 'galeria_id'
        ]);
        $this->hasMany('Produtos', [
            'foreignKey' => 'galeria_id'
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
            ->allowEmpty('descricao');

        return $validator;
    }
}
