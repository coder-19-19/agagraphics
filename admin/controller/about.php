<?php

    $query = $db->prepare('SELECT * FROM skills ORDER BY skill_percent DESC');
    $query->execute([]);
    $skills = $query->fetchAll(PDO::FETCH_ASSOC);

    $query = $db->prepare('SELECT * FROM about');
    $query->execute([]);
    $abouts = $query->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_POST['submit'])){
        $name = post('name');
        $percent = post('percent');

        if($name && $percent){
            $query = $db->prepare('INSERT INTO skills SET skill_name = ?,skill_percent = ?');
            $check = $query->execute([$name,$percent]);
            if($check){
                header('Location:'.admin_url('about'));
            }
        }
    }

    require admin_view('about');