<?php

    siteView('home');

    if(route(0) == 'category'){
            require controller('category');
    }
    else {
        $query = $db->prepare('SELECT * FROM categories ORDER BY category_id DESC');
        $query->execute([]);
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);

        $query = $db->prepare('SELECT * FROM projects LEFT JOIN categories ON category_id = project_category ORDER BY project_id DESC LIMIT 6');
        $query->execute([]);
        $projects = $query->fetchAll(PDO::FETCH_ASSOC);

        require view('index');
    }