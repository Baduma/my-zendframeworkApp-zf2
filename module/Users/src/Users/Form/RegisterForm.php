<?php
// filename : module/Users/src/Users/Form/RegisterForm.php
namespace Users\Form;

use Zend\Form\Form;

class RegisterForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('Register');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype','multipart/form-data');
        
        $this->add(array(
            'name' => 'name',
            'attributes' => array(
                'type'  => 'text',
                'required' => 'required',
				'placeholder' => 'Benutzername'	
            ),
            'options' => array(
                'label' => 'Full Name',
            ),
        ));

        
        $this->add(array(
            'name' => 'email',
            'attributes' => array(
                'type'  => 'email',
                'required' => 'required',
				'placeholder' => 'Email'
            ),
            'options' => array(
                'label' => 'Email',
            ),
        )); 
        
		$this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type'  => 'password',
                'required' => 'required',
				'placeholder' => 'Passwort'
            ),
            'options' => array(
                'label' => 'Password',
            ),
        )); 

        $this->add(array(
            'name' => 'confirm_password',
            'attributes' => array(
                'type'  => 'password',
                'required' => 'required',
				'placeholder' => 'Passwort bestätigen'
            ),
            'options' => array(
                'label' => 'Confirm Password',
            ),
        )); 

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Registrieren'
            ),
        )); 
    }
}
