<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/12/19
 * Time: 11:51 PM
 */

namespace App\Tests\User\Mocks;


use App\Users\Domain\Entities\User;
use App\Users\Domain\Ports\UserRepositoryInterface;

class UserRepositoryMock implements UserRepositoryInterface
{
    private $users;

    public function add(User $user)
    {
        $this->users[] = $user;
        return $user;
    }

}