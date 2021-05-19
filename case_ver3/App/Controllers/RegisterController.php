<?php


namespace App\Controller;


use App\Model\Register;

class RegisterController
{
    protected Register $registerModel;

    public function __construct()
    {
        $register = new Register();
        $this->registerModel = $register;
    }

    function register($user)
    {

        $email = $user['email'];
        $password = $user['password'];
        $firstName = $user['firstName'];
        $lastName = $user['lastName'];

        $result = $this->registerModel->checkCreate($email);
        if (!$result) {
            $this->registerModel->createUser($email, $password, $firstName, $lastName);
            header('Location: login.php');
        }else{
            echo "email da duoc su dung";
            die();
        }
    }
}