<?php
$title = 'Agagraphics';
$style = 'home';
require view('static/header') ?>
    <main class="main">
        <div>
            <h1 class="title" data-aos="fade-left" data-aos-duration="1000"><?=$category['category_name']?></h1>
        </div>
        <div class="max-width">
            <div class="categories" data-aos="flip-up" data-aos-duration="1000">
                <?php foreach ($categories as $category) : ?>
                    <a id="<?=$category['category_id']?>" href="<?= URL . '/category/' . $category['category_sef'] ?>"
                       class="btn <?=route(1) == $category['category_sef'] ? 'active' : false ?>">
                        <?= $category['category_name'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="projects" style="margin-bottom: 20px">
                <?php foreach ($projects as $project) : ?>
                    <div class="card" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-header">
                            <img class="project-img" src="<?= $project['project_link'] ?>" alt="<?= $project['project_name'] ?>">
                        </div>
                        <div class="card-footer">
                            <h2 class="header">
                                Baku Eye
                            </h2>
                            <span style="color: var(--main-color);"><?=$home['category']?></span> : <?= $project['category_name'] ?>
                            <div class="footer">
                            <span class="info">
                                <span><i class="fa fa-calendar"></i> <?= date('d-m-Y',strtotime($project['project_time'])) ?></span>
                                <span><i class="fa fa-eye"></i> <?= $project['project_view'] ?></span>
                            </span>
                                <a class="view-project" id="<?=$project['project_id']?>" href="<?=$project['project_link']?>">
                                    <?=$home['see']?> <i id="<?=$project['project_id']?>"  class="fa fa-search-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

<?php
$js = 'home';
require view('static/footer') ?>