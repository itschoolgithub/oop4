<?php
    // require "Default/User.php";
    // require "Second/User.php";

    spl_autoload_register(function ($className) {
        require $className . '.php';
    });
    
    use \Default\User;
    use \Second\User as User2;


    $user = new User;
    $user->name = 'John';
    $user->sayHello();

    $user2 = new User2;
    $user2->live();