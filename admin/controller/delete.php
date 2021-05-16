<?php

    $data = explode('/',$_SERVER['REQUEST_URI']);
    $id = $data[6];
    $column = $data[5];
    $table = $data[4];

    if($id && $column && $table){
        $query = $db->prepare('DELETE FROM ' . $table . ' WHERE ' . $column . ' = ?');
        $check = $query->execute([$id]);
        if($check){
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }
    }

?>