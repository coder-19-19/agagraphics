<?php

    if(!route(1)){
        header('Location:'.site_url());
    }
    else{
        $category = route(1);

        $query = $db->prepare('SELECT * FROM categories WHERE category_sef = ?');
        $query->execute([$category]);
        $category = $query->fetch(PDO::FETCH_ASSOC);

        if(!$category){
            header('Location:'.site_url());
        }
        else{
            $query = $db->prepare('SELECT * FROM projects LEFT JOIN categories ON category_id = project_category WHERE project_category = ? ORDER BY project_id DESC ');
            $query->execute([$category['category_id']]);
            $projects = $query->fetchAll(PDO::FETCH_ASSOC);

            if(!$projects){
                header('Location:'.site_url());
            }
            else{
                $query = $db->prepare('SELECT * FROM categories ORDER BY category_id DESC');
                $query->execute([]);
                $categories = $query->fetchAll(PDO::FETCH_ASSOC);
                require view('category');
            }
        }

    }



