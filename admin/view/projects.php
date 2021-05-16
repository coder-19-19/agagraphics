<?php require admin_view('static/header') ?>

<div class="box-">
    <h1><?= count($projects) ?> Proyekt</h1>
</div>
<div class="table">
    <table>
        <thead>
        <tr>
            <th>Ad</th>
            <th>Kateqoriya</th>
            <th>Link</th>
            <th>Baxış</th>
            <th>Tarix</th>
            <th>Sil</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td><?=$project['project_name']?></td>
                <td><?=$project['category_name']?></td>
                <td><?=$project['project_link']?></td>
                <td><?=$project['project_view']?></td>
                <td><?=timeConvert($project['project_time'])?></td>
                <td><a href="delete/projects/project_id/<?=$project['project_id']?>" class="btn">Sil</a></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <form action="" method="POST">
                <td>
                    <input type="text" name="name" value="<?=post('name')?>" placeholder="Ad">
                </td>
                <td>
                    <select name="category">
                        <?php foreach($categories as $category): ?>
                            <option <?=post('category') == $category['category_id'] ? 'selected' : false?> value="<?=$category['category_id']?>">
                                <?=$category['category_name']?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <input type="text" name="link" value="<?=post('link')?>" placeholder="Link">
                </td>
                <td>0</td>
                <td>Yeni</td>
                <td>
                    <input type="hidden" name="submit" value="1">
                    <button class="btn"><i class="fa fa-plus"></i></button>
                </td>
            </form>
        </tr>
        </tbody>
    </table>
</div>


<?php require admin_view('static/footer') ?>
