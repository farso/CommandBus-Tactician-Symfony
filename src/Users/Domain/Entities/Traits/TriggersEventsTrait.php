<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/13/19
 * Time: 12:09 PM
 */

namespace App\Users\Domain\Entities\Traits;


trait TriggersEventsTrait
{
    private $events = [];


    public function triggerEvent($event)
    {
        $this->events[] =  $event;
    }

    /**
     * @return array
     */
    public function getEvents(): array
    {
        return $this->events;
    }

}
