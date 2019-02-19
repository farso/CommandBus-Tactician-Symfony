<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/13/19
 * Time: 1:10 PM
 */

namespace App\Users\Domain\Events;


use App\Users\Domain\Ports\EventDomainInterface;

class UserWasCreated implements EventDomainInterface
{
    private $id;
    private $eMail;
    private $name;
    private $occurredOn;

    /**
     * UserWasCreated constructor.
     * @param $id
     * @param $eMail
     * @param $name
     * @throws \Exception
     */
    public function __construct($id, $eMail, $name)
    {
        $this->id = $id;
        $this->eMail = $eMail;
        $this->name = $name;
        $this->occurredOn = (new \DateTimeImmutable('now'))->getTimestamp();
    }


    public function occurredOn(): int
    {
        return $this->occurredOn;
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
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



}