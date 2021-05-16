<?php
    session_start();
    ob_start();
    date_default_timezone_set('Asia/Baku');

    //config
    $config = require __DIR__ . '/config.php';

    //db settings
    try{
        $db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'] .';charset=utf8',$config['db']['username'],$config['db']['password']);
    }
    catch(PDOException $e){
        die($e -> getMessage());
    }

    require __DIR__ . '/settings.php';

    //load helper
    foreach(glob(__DIR__ . '/helper/*.php') as $helper){
        require $helper;
    }
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
