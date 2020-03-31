<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FotosProjeto Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $foto
 * @property int $projeto_id
 *
 * @property \App\Model\Entity\ProjetosRealizado $projetos_realizado
 */
class FotosProjeto extends Entity
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
        'descricao' => true,
        'foto' => true,
        'projeto_id' => true,
        'projetos_realizado' => true,
    ];
}
