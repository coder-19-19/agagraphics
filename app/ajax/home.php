<?php

require '../init.php';
require '../lang/'.session('lang') . '.php';
if (isset($_GET['data'])) {
    $length = get('data') + 6;

    $query = $db->prepare('SELECT * FROM projects LEFT JOIN categories ON category_id = project_category ORDER BY project_id DESC LIMIT ' . $length);
    $query->execute([]);
    $projects = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($projects) {
        foreach ($projects as $project) {
?>
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
                            <?=$home['see']?> <i id="<?=$project['project_id']?>" class="fa fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        if ($length != count($projects)) {
        ?>
            <div style="width: 100%;margin:20px 0">
                <div class="alert alert-error">
                    <?=$home['see_project']?>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div style="width: 100%;margin-bottom: 20px;">
                <div class="btn load-more"><?=$home['load_more']?> <i class="fa fa-arrow-down"></i></div>
            </div>
<?php
        }
    }
}
if(isset($_GET['view'])){
    $id = get('view');

    $query = $db->prepare('SELECT * FROM projects WHERE project_id = ?');
    $query->execute([$id]);
    $project = $query->fetch(PDO::FETCH_ASSOC);
    if($project){
        $view = $project['project_view'] + 1;
        $query = $db->prepare('UPDATE projects SET project_view = ? WHERE project_id = ?');
        $query->execute([$view,$id]);
    }
}
