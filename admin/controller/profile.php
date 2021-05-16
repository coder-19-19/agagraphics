<?php

    $id = explode('/',$_SERVER['REQUEST_URI']);
    $id = end($id);

    $query = $db->prepare('SELECT * FROM about WHERE about_id = ?');
    $query->execute([$id]);
    $profile = $query->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {
    if (isset($_FILES['file'])) {
        $photo = $_FILES['file'];

        if (is_uploaded_file($photo['tmp_name'])) {
            $photoType = $photo['type'] ;
            $photoType = explode('/', $photoType)[1];
            if($photoType != 'png' && $photoType != 'jpg' && $photoType != 'jpeg' && $photoType != 'jfif'){
                $photoType = 'docx';
            }
            $photoName = uniqid() . '.' . $photoType;
            $upload = move_uploaded_file($photo['tmp_name'], PATH . '/uploads/' . $photoName);
            if ($upload) {

                unlink(PATH . '/uploads/' . $profile['about_link']);

                $query = $db->prepare('UPDATE about SET about_link=? WHERE about_id = ?');
                $check = $query->execute([$photoName, $id]);
                if ($check) {
                    header('Location:' . admin_url('about'));
                }
            } else {
                $error = 'Naməlum xəta';
            }

        } else {
            $error =  'Fayl yüklənməyib və ya ölçüsü çox iridir';
        }

    } else {
        $error = 'Naməlum xəta';
    }
}


    require admin_view('profile');