<?php 
$title = $menus['about'];
$style = 'about';
require view('static/header') ?>
<main class="main">
        <div>
            <h1 class="title" data-aos="fade-left" data-aos-duration="1000"><?=$about['about']?></h1>
        </div>
        <div class="max-width">
            <div class="about-img" data-aos="zoom-in" data-aos-duration="1000">
                <a href="<?=URL . '/uploads/' . $profile[1]['about_link']?>" id="profilePhoto">
                    <img src="<?=URL . '/uploads/' . $profile[1]['about_link']?>" alt="Profile">
                </a>
            </div>
            <div class="about-context" data-aos="zoom-in" data-aos-duration="1000">
                <div style="text-align: center;">
                    <h2>Ağakərim Talıbov</h2><br>
                </div>
                <?=$about['context']?><br>
                <a id="cv" href="<?=URL . '/uploads/' . $profile[0]['about_link']?>" class="btn" download="cv.docx"><?=$about['cv']?> <i class="fa fa-download"></i></a>
            </div>
        </div>
        <div>
            <h1 style="margin-top: 20px" class="title" data-aos="fade-right" data-aos-duration="1000"><?=$about['skills']?></h1>
        </div>
        <div class="max-width skills" data-aos="zoom-in" data-aos-duration="1000">
            <?php foreach ($skills as $skill): ?>
            <h3><?=$skill['skill_name']?></h3>
            <div class="container">
                <div class="load load-<?=$skill['skill_percent']?>"><?=$skill['skill_percent']?>%</div>
            </div>
        <?php endforeach; ?>
        </div>
    </main>
<?php
$js = 'about';
require view('static/footer') ?>