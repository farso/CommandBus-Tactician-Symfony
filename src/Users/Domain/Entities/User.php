<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/12/19
 * Time: 1:22 PM
 */

namespace App\Users\Domain\Entities;


use App\Users\Domain\Entities\Traits\ToArray;
use App\Users\Domain\Entities\Traits\TriggersEventsTrait;
use App\Users\Domain\Events\UserWasCreated;

class User
{
    use TriggersEventsTrait;
    use ToArray;

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
     * @throws \Exception
     */
    public function __construct($id, $email, $password, $name)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->triggerEvent(
            new UserWasCreated(
                $this->id,
                $this->email,
                $this->name
            )
        );
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