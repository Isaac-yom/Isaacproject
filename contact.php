<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <link rel="stylesheet" href="assets/css/style.CSS">

    <title>Site de Recettes - Contact reçu</title>
    
</head>

<body>
    <header class="header header-pages" id="header">
        <nav class="nav container">

            <a href="index.php" class="nav__logo">Liz</a>

            <div class="nav__menu" id="nav-menu">

                <ul class="nav__list">

                    <li class="nav__item">
                        <a href="index.php" class="nav__link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="about.php" class="nav__link">About Me</a>
                    </li>

                    <li class="nav__item">
                        <a href="work.php" class="nav__link">Portfolio</a>
                    </li>

                    <li class="nav__item">
                        <a href="contact.php" class="button">Contact Me</a>
                    </li>

                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__actions">

                <i class="ri-moon-line change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-apps-2-line"></i>
                </div>
            </div>

        </nav> 
    </header>

    <main class="main">
        <section class="contact section">
            <h2 class="section__title">
                Let's Talk <br>
                About Your Project                
            </h2>

            <div class="contact__page contact grid">
                <form  method="POST" class="contact__form grid">
                    <div class="contact__group grid">
                        <div class="contact__box">
                            <input type="text" name="user_name" required placeholder="write your name" class="contact__input">
                            <label for="name" class="contact__label"> Name</label>
                        </div>

                        <div class="contact__box">
                            <input type="email" name="user_email" required placeholder="write your email" class="contact__input">
                            <label for="email" class="contact__label"> Email</label>
                        </div>
                    </div>

                    <div class="contact__box contact__area">
                        <textarea  name="user_message"  required placeholder="write your message" class="contact__input"></textarea>
                        <label for="message" class="contact__label">Message</label>
                    </div>

                    <p class="contact__message" id="contact__message"></p>

                    <button type="submit" class="contact__send button">Envoyer</button>
                </form>

                <?php

                    if($_POST){

                        $user_name=$_POST['user_name'];
                        $user_email=$_POST['user_email'];
                        $user_message=$_POST['user_message'];
                    }    

                    if(!empty($user_name) AND !empty($user_email) AND !empty($user_message)){
                        
                        echo"Bonjour ".$user_name.", votre email est <br> ".$_POST['user_email'].",nous avons lu votre message: <br>".$_POST['user_message']." ";

                    }
                    
                
                ?>
            </div>

        </section>
    </main>

    <footer class="footer">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <a href="index.php" class="footer__logo">Liz</a>

                <ul class="footer__links">
                    <li>
                        <a href="index.php" class="footer__link">About Me</a>

                    </li>

                    <li>
                        <a href="about.php" class="footer__link">Portfolio</a>

                    </li>

                    <li>
                        <a href="contact.php" class="footer__link">Contact Me</a>

                    </li>
                </ul>

                <div class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>

                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-x-line"></i>
                    </a>

                    <a href="https://www.linkedin.com/" target="_blank" class="footer__social-link">
                        <i class="ri-linkedin-box-fill"></i>
                    </a>    
                </div>
            </div>

            <span class="footer__copy">
                &#169; All Rights Reserved By Bedimcode
            </span>

                
        </div>
    </footer>

    <script src="assets2/js/main.js"></script>




</body>
</html>