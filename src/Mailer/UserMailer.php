<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * User mailer.
 */
class UserMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'User';

    public function default($user){

    	$this->to($user->email)
    	->profile('default')
    	->emailFormat('html')
    	->template('welcome')
    	->layout('default')
    	->ViewVars(['nome' => $user->name])
    	->subject(sprintf('Bem Vindo, %s', $user->name));
    }
}
