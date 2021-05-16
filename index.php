<?php

    require __DIR__ . '/app/init.php';
    
    $route = array_filter(explode('/',$_SERVER['REQUEST_URI']));
    if(SUBFOLDER === true){
        array_shift($route);
    }

    if(!route(0)){
        $route[0] = 'index';
    }
    if(!file_exists(controller(route(0)))){
        $route[0] = '404';
    }


    if(!session('lang')){
        $_SESSION['lang'] = 'az';
    }
    require __DIR__ . '/app/lang/' . session('lang') . '.php';
    
    require controller(route(0));

