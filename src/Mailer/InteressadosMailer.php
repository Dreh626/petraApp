<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;

//use Cake\Filesystem\Files;

/**
 * Interessados mailer.
 */
class InteressadosMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'Interessados';


    public function novoInteressado( $interessado ){
        $this
        ->setTo('contato@petrasolar.com.br')
        ->setProfile('emailPetra')
        ->setEmailFormat('html')
        ->setViewVars([
            'nome' => $interessado->nome, 
            'email' => $interessado->email,
            'celular' => $interessado->celular
        ])
        ->setSubject( sprintf('%s fez uma Nova Simulação', $interessado->nome) )
        ->viewBuilder()
            ->setTemplate('email_petra_template')
            ->setLayout('interessado');

    }

}
