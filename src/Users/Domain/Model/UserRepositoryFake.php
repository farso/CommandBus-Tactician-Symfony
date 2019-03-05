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

class UserRepositoryFake implements UserRepositoryInterface
{
    private $users;

    /**
     * @param User $user
     * @return User
     * @throws \Exception
     */
    public function add(User $user) :User
    {
        return new User(
            33,
            'kkkkk@mail.com',
            'KKKKKKKKKKK',
            'NAMMAMAMAMA'
        );
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

}