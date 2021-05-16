<?php require admin_view('static/header')?>
    <style>
        strong{
            display: inline-block;
            margin-top: 10px;
            background: yellow;
            padding: 10px 20px;
            color: #fff;
        }
    </style>
<div class="box-1">

    <h1>Statistika</h1>

    <strong>Mesaj sayı : <?=$message['messageCount']?></strong><br>
    <strong>Ümumi: <?=$site['site_home'] + $site['site_about'] + $site['site_contact'] ?></strong> <br>
    <strong>Ana səhifə : <?=$site['site_home']?></strong> <br>
    <strong>Haqqında : <?=$site['site_about']?></strong> <br>
    <strong>Əlaqə: <?=$site['site_contact']?></strong> <br>
</div>

<?php require admin_view('static/footer')?>