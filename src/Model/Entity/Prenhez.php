<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prenhez Entity
 *
 * @property int $id
 * @property int $bovino_id
 * @property \Cake\I18n\FrozenTime $data_inicial
 * @property \Cake\I18n\FrozenTime $data_provavel
 * @property bool $ocorreu
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Bovino $bovino
 */
class Prenhez extends Entity
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
        'id' => false
    ];
}
