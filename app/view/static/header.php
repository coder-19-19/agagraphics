<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?=settings('description')?>" />
    <meta name="keywords" content="<?=settings('keywords')?>" />
    <meta name="author" content="Fərman Allahverdiyev" />
    <meta name="robots" content="index,follow">
    <meta name="og:title" property="og:title" content="<?=$title?>" />
    <meta name="og:description" property="og:description" content="<?=settings('description')?>" />
    <meta name="og:url" property="og:url" content="<?=URL?>" />
    <meta name="og:image" property="og:image" content="<?=public_url('img/favicon.png')?>" />
    <meta name="og:site_name" property="og:site_name" content="Agagraphics" />
    <title><?=$title?></title>
    <link rel="shortcut icon" href="<?=public_url('img/favicon.png')?>" type="image/png" />
    <link rel="icon" href="<?=public_url('img/favicon.png')?>" type="image/png" />
    <link rel="canonical" href="<?=URL . $_SERVER['REQUEST_URI']?>" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?=public_url('css/style.css')?>" />
    <link rel="stylesheet" href="<?=public_url('css/' . $style . '.css')?>">
    <link rel="stylesheet" href="<?=public_url('css/responsive.css')?>" />
    <script>
        const url = '<?=URL?>'
    </script>
</head>

<body>
    <div class="spinner-wrapper">
        <div class="spinner">
            <img src="<?=public_url('img/loader.gif')?>" alt="Loader" />
        </div>
    </div>
    <div class="scroll-up-btn">
        <i class="fa fa-arrow-up"></i>
    </div>
    <nav class="navbar" data-aos="fade-right" data-aos-duration="1000">
        <div class="max-width">
            <a href="<?=URL?>">
                <img src="<?=public_url('img/logo.png')?>" alt="Logo" />
            </a>
            <ul class="menu">
                <?php foreach ($menus as $url => $menu): ?>
                <li class="nav-item">
                    <a href="<?=site_url($url)?>" class="nav-link <?=route(0) == $url ? 'active' : false ?>"><?=$menu?></a>
                </li>
               <?php endforeach;?>
            </ul>
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </nav>