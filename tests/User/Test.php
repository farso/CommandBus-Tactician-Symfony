<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/12/19
 * Time: 11:47 PM
 */

namespace App\Tests\User;

use App\Tests\User\Mocks\UserRepositoryMock;
use App\Users\Application\Commands\CreateUserCommand;
use App\Users\Application\CreateUserHandler;
use App\Users\Application\Exceptions\InvalidEMailException;
use mysql_xdevapi\Exception;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    /**
     * @test
     * @throws \App\Users\Application\Exceptions\InvalidEMailException
     */
    public function tryToCreateCorrectNewUser()
    {
        $createUserCommand = new CreateUserCommand(
            1,
            'mail@mail.com',
            'password',
            'Farsete'
        );
        $userRepository = new UserRepositoryMock();
        $createUserHandler = new CreateUserHandler($userRepository);
        $user = $createUserHandler->handle($createUserCommand);

        $this->assertSame($user->getId(), $createUserCommand->getId());
        $this->assertSame($user->getEmail(), $createUserCommand->getEmail());
        $this->assertSame($user->getPassword(), $createUserCommand->getPassword());
        $this->assertSame($user->getName(), $createUserCommand->getName());

    }

    /**
     * @test
     * @throws \App\Users\Application\Exceptions\InvalidEMailException
     */
    public function tryToCreateNewUserWithInvalidEMail()
    {
        $createUserCommand = new CreateUserCommand(
            1,
            'mailmail.com',
            'password',
            'Farsete'
        );
        $userRepository = new UserRepositoryMock();
        $createUserHandler = new CreateUserHandler($userRepository);
        $this->expectExceptionMessage('Invalid Mail Format');
        $createUserHandler->handle($createUserCommand);

    }


}
