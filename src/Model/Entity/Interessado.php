<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Interessado Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $celular
 * @property string $endereco
 * @property string $tipo_instalacao
 * @property string $metragem
 * @property string $conta_atual
 */
class Interessado extends Entity
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
        'nome' => true,
        'email' => true,
        'celular' => true,
        'endereco' => true,
        'tipo_instalacao' => true,
        'metragem' => true,
        'conta_atual' => true,
    ];
}