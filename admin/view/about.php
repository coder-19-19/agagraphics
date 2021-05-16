<?php require admin_view('static/header') ?>
    <div class="box-">
       <h1>Bacarıqlar</h1>
    </div>
    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Ad</th>
                <th>Faiz</th>
                <th>Tarix</th>
                <th>Sil</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($skills as $skill): ?>
                <tr>
                    <td><?=$skill['skill_id']?></td>
                    <td><?=$skill['skill_name']?></td>
                    <td><?=$skill['skill_percent']?></td>
                    <td><?=timeConvert($skill['skill_time'])?></td>
                    <td><a href="delete/skills/skill_id/<?=$skill['skill_id']?>" class="btn">Sil</a></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <form action="" method="POST">
                    <td>#</td>
                    <td>
                        <input type="text" name="name" value="<?=post('name')?>" placeholder="Ad">
                    </td>
                    <td>
                        <input type="text" name="percent" value="<?=post('percent')?>" placeholder="Faiz">
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

    <div class="box-" style="margin-top: 20px">
        <h1>Profil şəkli və cv</h1>
    </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fayl</th>
                        <th>Görüntüləmə</th>
                        <th>Tarix</th>
                        <th>Bax</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($abouts as $about): ?>
                            <tr>
                                <td><?=$about['about_id']?></td>
                                <td><img width="150" height="auto" src="<?=URL . '/uploads/' . $about['about_link']?>" alt="cv"></td>
                                <td><?=$about['about_view']?></td>
                                <td><?=timeConvert($about['about_time'])?></td>
                                <td>
                                    <a href="<?=admin_url('profile/') . $about['about_id']?>" class="btn">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

<?php require admin_view('static/footer') ?>