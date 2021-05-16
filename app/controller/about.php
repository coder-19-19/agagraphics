<?php

    siteView('about');

    $query = $db->prepare('SELECT * FROM skills ORDER BY skill_percent DESC');
    $query->execute([]);
    $skills = $query->fetchAll(PDO::FETCH_ASSOC);

    $query = $db->prepare('SELECT * FROM about WHERE about_id = ? || about_id = ?');
    $query->execute([1,2]);
    $profile = $query->fetchAll(PDO::FETCH_ASSOC);

    require view('about');