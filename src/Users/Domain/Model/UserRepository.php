<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/12/19
 * Time: 1:28 PM
 */

namespace App\Users\Domain\Model;


use App\Users\Domain\Entities\User;
use App\Users\Domain\Ports\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    private $users;

    /**
     * @param User $user
     * @return User
     */
    public function add(User $user) :User
    {
        $this->users[] =  $user;
        return $user;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

}