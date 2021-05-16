<?php require admin_view('static/header')?>
<div class="box-1">
    <h1><?=count($messages)?> Mesaj</h1>
</div>

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Ad</th>
                <th>Nömrə</th>
                <th>Mesaj</th>
                <th>Tarix</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message):?>
                <tr>
                    <td><?=$message['message_name']?></td>
                    <td><?=$message['message_phone']?></td>
                    <td><?=nl2br($message['message_context'])?></td>
                    <td><?=timeConvert($message['message_time'])?></td>
                    <td>
                        <a href="delete/messages/message_id/<?=$message['message_id']?>" class="btn">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php require admin_view('static/footer')?>
