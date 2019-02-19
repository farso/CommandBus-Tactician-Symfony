<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/12/19
 * Time: 1:25 PM
 */

namespace App\Users\Application;


use App\Users\Application\Commands\CreateUserCommand;
use App\Users\Application\Exceptions\InvalidEMailException;
use App\Users\Domain\Entities\User;
use App\Users\Domain\Ports\UserRepositoryInterface;

class CreateUserHandler
{
private $userRepository;

    /**
     * CreateUserHandler constructor.
     * @param $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
        return $this;
    }

    public function handle(CreateUserCommand $command)
    {
        if (!$this->assetEmail($command->getEmail())){
            throw new InvalidEMailException('Invalid Mail Format');
        }

        return $this->userRepository->add(new User(
            $command->getId(),
            $command->getEmail(),
            $command->getPassword(),
            $command->getName()
        ));
    }

    private function assetEmail($eMail)
    {
        if (!filter_var($eMail, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }
}