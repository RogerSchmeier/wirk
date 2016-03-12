<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Noticia Entity.
 *
 * @property int $id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $texto
 * @property int $galeria_id
 * @property \App\Model\Entity\Galeria $galeria
 */
class Noticia extends Entity
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
