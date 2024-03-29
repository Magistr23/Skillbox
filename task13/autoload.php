<?php

include_once 'vendor/autoload.php';

spl_autoload_register(function ($class){
   include_once 'entities/' . $class . '.php';
});

