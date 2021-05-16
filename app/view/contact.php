<?php 
$title = $contact['contact'];
$style = 'contact';
require view('static/header') ?>
<main class="main">
        <div>
            <h1 class="title" data-aos="fade-left" data-aos-duration="1000"><?=$contact['contact']?></h1>
        </div>
        <div class="max-width">
            <h2>
                <i class="fa fa-map-marker-alt"></i></br>
                <?=$contact['address']?>
            </h2>
            <div class="social-links" data-aos="flip-up" data-aos-duration="1000">
                <a href="tel:<?=settings('whatsapp')?>" class="social">
                    <i class="fa fa-phone"></i><br>
                </a>
                <a href="https://wa.me/<?=settings('whatsapp')?>" class="social">
                    <i class="fa fa-whatsapp"></i><br>
                </a>
                <a href="<?=settings('behance')?>" class="social">
                    <i class="fa fa-behance"></i><br>
                </a>
                <a href="<?=settings('linkedin')?>" class="social">
                    <i class="fa fa-linkedin"></i><br>
                </a>
                <a href="<?=settings('facebook')?>" class="social">
                    <i class="fa fa-facebook"></i><br>
                </a>
                <a href="<?=settings('instagram')?>" class="social">
                    <i class="fa fa-instagram"></i><br>
                </a>
            </div>
            <div class="contact">
                <div class="developer" data-aos="zoom-in" data-aos-duration="1000">
                    <h2>Developer</h2>
                    <a href="<?=settings('developer')?>" class="social">
                        <i class="fa fa-laptop-code"></i> 
                        fermanallahverdiev.com
                    </a>
                    <a href="teL:<?=settings('developer_number')?>" class="social">
                        <i class="fa fa-phone"></i> <?=settings('developer_number')?>
                    </a>
                    <a href="https://wa.me/<?=settings('developer_number')?>" class="social">
                        <i class="fa fa-whatsapp"></i> <?=settings('developer_number')?>
                    </a>
                </div>
                <div class="own" data-aos="zoom-in" data-aos-duration="1000">
                    <h2><?=$contact['send_message']?></h2>
                    <div class="note"></div>
                    <form action="" method="POST" id="contactForm">
                        <div class="row">
                            <input id="name" type="text" name="name" placeholder="<?=$contact['name']?>">
                            <input id="phone" type="number" name="phone" placeholder="<?=$contact['phone']?>">
                        </div>
                        <div class="row">
                            <textarea id="message" name="message" cols="30" rows="10" placeholder="<?=$contact['message']?>"></textarea>
                        </div>
                        <input type="hidden" name="submit" value="1">
                        <button style="width: 100%;" class="btn"><?=$contact['send']?></button>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php
$js = 'contact';
require view('static/footer') ?>