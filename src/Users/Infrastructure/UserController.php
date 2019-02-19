<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/13/19
 * Time: 3:08 PM
 */

namespace App\Users\Infrastructure;


use App\Users\Application\Commands\CreateUserCommand;
use League\Tactician\CommandBus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private $commandBus;

    /**
     * UserController constructor.
     * @param CommandBus $commandBus
     */
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @Route("/id/{id}/eMail/{eMail}/password/{password}/name/{name}", methods={"GET"})
     *
     * @param $id
     * @param $eMail
     * @param $password
     * @param $name
     * @return JsonResponse
     * @throws \Exception
     */
    public function indexAction($id, $eMail, $password, $name)
    {

        $createUserCommand = new CreateUserCommand(
            $id,
            $eMail,
            $password,
            $name
        );
        $user = $this->commandBus->handle($createUserCommand);

        return new JsonResponse($user->toArray());

    }

}
