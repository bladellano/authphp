<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * Class User
 * @package Source\Models
 */
class User extends DataLayer
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("users", ["first_name","last_name","email","passwd"]);
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        if(!$this->validateEmail() || !$this->validadePassword() || !parent::save() ){
            return false;
        } else {
            return true;
        }

    }

    /**
     * @return bool
     */
    protected function validateEmail():bool
    {
        if(empty($this->email) || !filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $this->fail = new \Exception("Informe um e-mail válido");
            return false;
        }

        $userByMail = null;

        if(!$this->id){
            $userByMail = $this->find("email = :email","email={$this->email}")->count();
        } else {
            $userByMail = $this->find("email = :email AND id != :id","email={$this->email}&id={$this->id}")->count();
        }

        if($userByMail){
            $this->fail = new \Exception("O e-mail informado já está em uso");
            return false;
        }

        return true;
    }

    /**
     * @return bool
     */
    protected function validadePassword():bool
    {
        if(empty($this->passwd) || strlen($this->passwd) < 5){
            $this->fail = new \Exception("Informe uma senha com pelo menos 5 caracteres");
            return false;
        }
        if(password_get_info($this->passwd)["algo"]){
            return true;
        }

        $this->passwd = password_hash($this->passwd,PASSWORD_DEFAULT);

        return true;
    }



}