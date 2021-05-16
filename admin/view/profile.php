<?php require admin_view('static/header')?>

<box class="box-">
    <?php if(error()): ?>
        <div><?=$error?></div>
    <?php endif; ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">
            <img src="<?=URL . '/uploads/' . $profile['about_link']?>" alt="Cv">
        </label><br>
        <input type="file" accept=".png,.jpg,.jpeg,.jfif,.docx" style="display: none" name="file" id="file">
        <input type="hidden" name="submit" value="1">
        <button>Saxla</button>
    </form>
</box>
<?php require admin_view('static/footer')?>
