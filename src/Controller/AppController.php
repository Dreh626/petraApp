<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

// use \Cake\Controller\Component\AuthComponent;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');


        
        // /**
        //  *   Preciso carregar o component Auth aqui na AppController
        //  * pois ela é o controller que executa antes de tudo e,
        //  * assim posso trabalhar com autenticação
        //  * 
        //  *   Parametro 'authenticate' define quais campos do meu Form 
        //  * serão usados para autenticação(no caso: campos 'login' e 'senha')
        //  * 
        //  *   Parametro 'loginAction' define qual será o metodo usado para Login.
        //  * No caso, será o método 'login' da controller 'usuarios'.
        //  * 
        //  *   Parametro 'logoutRedirect' define qual será o método usado para Logout.
        //  * No caso, será o método 'logout' da controller 'usuarios'.
        //  * 
        //  *   Parametro 'loginRedirect' define pra onde serei redirecionado após a 
        //  * autenticação. Poderá ser uma dashboard própria.
        //  * 
        // */
        // $this->loadComponent('Auth',[
        //     'authenticate' =>[
        //         'Form' => [
        //             'fields' => ['username' => 'login','password' => 'senha']
        //         ]
        //     ],
        //     'loginAction' => ['controller' => 'Usuarios', 'action' => 'login'],
        //     'logoutRedirect' => ['controller' => 'Usuarios', 'action' => 'logout'],
        //     'loginRedirect' => ['controller' => 'Usuarios', 'action' => 'index'],
        //     'authError' => 'Acesso negado! Realize o login para acessar o conteúdo da página!'
        // ]);
        // $this->Auth->setConfig('authenticate',[
        //     AuthComponent::ALL => ['userModel' => 'usuarios']
        // ]);


        
    }
}
