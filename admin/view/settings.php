<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Tənzimləmələr
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action="" method="post" class="form label">
            <ul>
                <li>
                    <label>Sayt Təsviri</label>
                    <div class="form-content">
                        <input type="text" id="description" name="settings[description]"
                               value="<?= settings('description') ?>">
                    </div>
                </li>
                <li>
                    <label>Sayt Açar Sözləri</label>
                    <div class="form-content">
                        <input type="text" id="keywords" name="settings[keywords]" value="<?= settings('keywords') ?>">
                    </div>
                </li>

            </ul>
            <ul>
                <h1>Sayt Ayarları</h1>
                <li>
                    <label>Developer Linki</label>
                    <input type="text" name="settings[developer]" value="<?= settings('developer') ?>">
                </li>
                <li>
                    <label>Developer Nömrəsi</label>
                    <input type="text" name="settings[developer_number]" value="<?= settings('developer_number') ?>">
                </li>
                <li>
                    <label>Facebook Linki</label>
                    <input type="text" name="settings[facebook]" value="<?= settings('facebook') ?>">
                </li>
                <li>
                    <label> İnstagram Linki</label>
                    <input type="text" name="settings[instagram]" value="<?= settings('instagram') ?>">
                </li>
                <li>
                    <label>YouTube Linki</label>
                    <input type="text" name="settings[behance]" value="<?= settings('behance') ?>">
                </li>
                <li>
                    <label> Whatsapp Nömrəsi</label>
                    <input type="text" name="settings[whatsapp]" value="<?= settings('whatsapp') ?>">
                </li>
                <li>
                    <label>Linkedİn</label>
                    <input type="text" name="settings[linkedin]" value="<?= settings('linkedin') ?>">
                </li>
                <li class="submit">
                    <input type="hidden" name="submit" value="1">
                    <button type="submit">Saxla</button>
                </li>
            </ul>
        </form>
    </div>


<?php require admin_view('static/footer') ?>