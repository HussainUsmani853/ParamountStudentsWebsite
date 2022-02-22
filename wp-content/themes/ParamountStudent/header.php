<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <nav id="navbar" class="h-nav-resp">
        <div id="logo"><?php echo the_custom_logo() ?></div>
        <ul class="navigation v-class-resp">
            <li><a href="#about">Who We Are</a></li>
            <li><a href="#paramount-students-help">Our Services</a></li>
            <li><a href="#our-products">Our Products</a></li>
            <li><a href="#our-community">Our Communities</a></li>
            <li><a href="#meet-our-team">Meet Our Team</a></li>
            <button class="btn_1" id="contact-btn"><i class="fa-solid fa-paper-plane"></i>Contact US</button>
            <li><i class="fa-solid fa-globe"></i> EN <img src="<?php echo get_bloginfo('template_url') ?>/assets/Landing-Page/Vector.png" alt="">
                <ul>
                    <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/Landing-Page/footer/flags/PK.png" alt="">Urdu</li>
                    <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/Landing-Page/footer/flags/TR.png" alt="">Turkish</li>
                    <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/Landing-Page/footer/flags/MW.png" alt="">Malawi</li>
                    <li><img src="<?php echo get_bloginfo('template_url') ?>/assets/Landing-Page/footer/flags/MA.png" alt="">Morocco</li>
                </ul>
            </li>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <div id="contact-modal">
        <div class="contact-modal">
            <h1 class="heading-secondary text-center">Contact us</h1>
            <i class="fa-solid fa-xmark" id="cut"></i>
            <p class="small-content" style="font-weight: bold; margin: 0 30px; color: black;">Leave Us a message</p>
            <div class="main-contact" style="display: flex; flex-direction: row; width: 100%;">
                <form class="contact-form">
                    <input class="inputs" type="text" name="name" id="name" placeholder="Full Name">
                    <input class="inputs" type="email" name="email" id="email" placeholder="Email Address">
                    <textarea class="inputs" name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn_2 contact-form-send">Send</button>
                </form>
                <div class="contact-us-info">
                    <div>
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/Contact Us Pop Up/Group 27130.png" alt="">
                        <p class="small-content black-color" style="margin: -40px 60px !important;">
                            Fulya, Fulya, Fulya Mahallesi YeşilçimenSokak Polat Tower Bağımsız Bölüm 12/430, 34394 Şişli/İstanbul
                        </p>
                    </div>
                    <div style="margin: 60px 0;">
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/Contact Us Pop Up/Group 27129.png" alt="">
                        <p class="small-content black-color" style="margin: -40px 60px !important;">
                            +90 531 432 0987
                        </p>
                    </div>
                    <div style="margin: 70px 0;">
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/Contact Us Pop Up/Group 27128.png" alt="">
                        <p class="small-content black-color" style="margin: -40px 60px !important;">
                            hi@Paramountstudent.com
                        </p>
                    </div>
                    <div>
                        <img class="map" style="margin: 40px 0;" src="<?php echo get_bloginfo('template_url') ?>/assets/Contact Us Pop Up/Rectangle 19.png" alt="">
                    </div>
                </div>
            </div>
        </div>
</div>