<?php

    $query = $db->prepare('SELECT * FROM categories ORDER BY category_id DESC');
    $query->execute([]);
    $categories = $query->fetchAll(PDO::FETCH_ASSOC);

    $query = $db->prepare('SELECT * FROM projects LEFT JOIN categories ON category_id = project_category ORDER BY project_id DESC');
    $query->execute([]);
    $projects = $query->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_POST['submit'])){
        $name = post('name');
        $category = post('category');
        $link = post('link');
        
        if($name && $category && $link){
            $query = $db->prepare('INSERT INTO projects SET project_name = ?,project_category = ?,project_link = ?');
            $check = $query->execute([$name,$category,$link]);
            if($check){
                header('Location:'.admin_url('projects'));
            }
        }
    }

    require admin_view('projects');