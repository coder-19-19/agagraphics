<?php

    require '../init.php';
    require  '../lang/' . session('lang') . '.php';
    if(isset($_GET)){
        $name = get('name');
        $phone = get('phone');
        $message = get('message');

        if(!$name || !$phone || !$message){
            $error = $contact['error'];
            ?>
            <div class="alert alert-error"><?=$error?></div>

            <?php
        }
        else{
            $query = $db->prepare('INSERT INTO messages SET
            message_name = ?,
            message_phone = ?,
            message_context = ?,
            message_ip = ?
            ');
            $check = $query->execute([$name,$phone,$message,$ip]);
            if($check){
                $success = $contact['success'];
                ?>
                <div class="alert alert-success"><?=$success?></div>
                <?php
            }
        }
    }