<?php require admin_view('static/header') ?>

<div class="box-">
    <h1><?= count($categories) ?> Kateqoriya</h1>
</div>
<div class="table">
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Ad</th>
            <th>Tarix</th>
            <th>Sil</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?=$category['category_id']?></td>
                <td><?=$category['category_name']?></td>
                <td><?=timeConvert($category['category_time'])?></td>
                <td><a href="delete/categories/category_id/<?=$category['category_id']?>" class="btn">Sil</a></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <form action="" method="POST">
                <td>#</td>
                <td>
                    <input type="text" name="name" value="<?=post('name')?>" placeholder="Ad">
                </td>
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