<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/13/19
 * Time: 1:10 PM
 */

namespace App\Users\Domain\Ports;


interface EventDomainInterface
{
    public function occurredOn();
}