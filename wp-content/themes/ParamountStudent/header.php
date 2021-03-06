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
                    <h6 class="heading-language">Choose A Language</h6>
                    <li>Urdu</li>
                    <li>Turkish</li>
                    <li>French</li>
                    <li>Arabic</li>
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
            <p class="small-content" style="font-family: 'Rota'; margin: 31px 30px; color: black; font-size: 17px;">Leave us a message</p>
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
                            <a class="text-decoration-none black-color" href="https://www.google.com/maps/dir/41.0049819,28.7740467/Bilgiyi+Ticarile%C5%9Ftirme+Me[???]b9ec0e422ee9:0xe48bbf2454159e09!2m2!1d28.9983252!2d41.0567889" target="_blank">Fulya, Fulya, Fulya Mahallesi Ye??il??imenSokak Polat Tower Ba????ms??z B??l??m 12/430, 34394 ??i??li/??stanbul</a>
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
                            hi@Paramountstudents.com
                        </p>
                    </div>
                    <div id="map">
                        
                    </div>
                </div>
            </div>
        </div>
</div>