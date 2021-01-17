<?php


namespace App\Events;


class UserCreated extends Event
{
    private $user;

    public function __construct($user){
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}
