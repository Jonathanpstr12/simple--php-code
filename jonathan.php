<?php

class User {

private $user;
protected $amount;


public function __construct($user, $amount){
    $this ->user  = $user; 
    $this ->amount = $amount;
}

public function getUserInfo(){
    return "Name:". $this->user. "Amount:". $this->amount;
}

public function displayAmount(){
    return $this-> amount;
}
}

$user = new User ("Jonathan Quinacman", "jonathanquinacman@gmail.com" );
echo $user->getUserInfo();


















?>