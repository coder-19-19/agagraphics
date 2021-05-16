<?php


    $query = $db->prepare('SELECT * FROM messages ORDER BY message_id DESC');
    $query->execute([]);
    $messages = $query->fetchAll(PDO::FETCH_ASSOC);

    require admin_view('messages');