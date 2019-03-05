<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 3/1/19
 * Time: 11:23 AM
 */

namespace App\Users\Application\MiddleWare;


use League\Tactician\Middleware;

class FooMiddleWare implements Middleware
{

    /**
     * @param object $command
     * @param callable $next
     * @return mixed
     */
    public function execute($command, callable $next)
    {
        $returnValue = $next($command);
        foreach ($returnValue->getEvents() as $event) {
            $class = get_class($event);
            $occurredOn = $event->getOccurredOn();
            dump("$class $occurredOn");
        }

        return $returnValue;
    }

}