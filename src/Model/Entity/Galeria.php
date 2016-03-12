<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Galeria Entity.
 *
 * @property int $id
 * @property string $descricao
 * @property \App\Model\Entity\GaleriasImg[] $galerias_img
 * @property \App\Model\Entity\Noticia[] $noticias
 * @property \App\Model\Entity\Produto[] $produtos
 */
class Galeria extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
