<?php
    
    function controllers_autoload($className){
        include 'App/Controllers/' . $className . '.php';
    }

    spl_autoload_register('controllers_autoload');