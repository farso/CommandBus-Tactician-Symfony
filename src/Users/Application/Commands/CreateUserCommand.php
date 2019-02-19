<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/12/19
 * Time: 1:25 PM
 */

namespace App\Users\Application\Commands;


class CreateUserCommand
{
    private $id;
    private $email;
    private $password;
    private $name;

    /**
     * User constructor.
     * @param $id
     * @param $email
     * @param $password
     * @param $name
     */
    public function __construct($id, $email, $password, $name)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}