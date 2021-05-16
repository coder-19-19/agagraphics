<?php

    $query = $db->prepare('SELECT * FROM categories ORDER BY category_id DESC ');
    $query->execute([]);
    $categories = $query->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_POST['submit'])){
        $name = post('name');
        $sef = SEFlink($name);
        if($name){
            $query = $db->prepare('INSERT INTO categories SET category_name = ?,category_sef = ?');
            $check = $query->execute([$name,$sef]);
            if($check){
                header('Location:'.admin_url('categories'));
            }
        }
    }
    require admin_view('categories');