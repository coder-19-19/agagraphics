<?php
    require '../init.php';

    if(isset($_GET['profile'])){
        $id = get('profile');

        $query = $db->prepare('SELECT * FROM about WHERE about_id = ?');
        $query->execute([$id]);
        $profile = $query->fetch(PDO::FETCH_ASSOC);

        $view = $profile['about_view'] + 1;

        $query = $db->prepare('UPDATE about SET about_view = ? WHERE about_id = ?');
        $query->execute([$view,$id]);
    }