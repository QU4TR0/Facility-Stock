<?php
    $print = function($class){
        if(file_exists('classes/'.$class.'.php')){
            include_once('classes/'.$class.'.php');
        }
    };

    spl_autoload_register($print);

    define('HOST','179.188.16.2');
    define('PORT','3306');
    define('DATABASE','usuariosfs');
    define('USER','usuariosfs');
    define('PASSWORD','usuarios');
