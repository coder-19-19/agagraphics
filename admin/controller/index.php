<?php

    $query = $db->prepare('SELECT COUNT(message_id) as messageCount FROM messages');
    $query->execute([]);
    $message = $query->fetch(PDO::FETCH_ASSOC);

    $query = $db->prepare('SELECT * FROM site WHERE site_id = ?');
    $query->execute([1]);
    $site = $query->fetch(PDO::FETCH_ASSOC);


    require admin_view('index');