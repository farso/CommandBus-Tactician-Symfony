<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/12/19
 * Time: 1:27 PM
 */

namespace App\Users\Domain\Ports;


use App\Users\Domain\Entities\User;

interface UserRepositoryInterface
{
    public function add(User $user);

}