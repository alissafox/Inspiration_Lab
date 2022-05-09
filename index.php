<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home_page/assets/css/style.css" type="text/css">
    <title>Home Page</title>
</head>
<body>
    <?php 
       include "db.php" 
       ?>


    <nav class="navbar">
        <div class="navbar__container">
            <a href="" id="navbar__logo">ASTROGAMA</a>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="" class="navbar__links">Tech</a>
                </li>
                <li class="navbar__item">
                    <a href="" class="navbar__links">Products</a>
                </li>
                <li class="navbar__btn">
                    <a href="./log_in.php" class="button">Log In</a>
                </li>
                <li class="navbar__btn">
                    <a href="./sign_up.php" class="button">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
      <div class="all_signs">
        <a class = "logo_sign_libra" href="" alt="libra" >
            <img src="./home_page/assets/img/libra.png" width="50%" height="auto">
            <div class = "sign_name">Libra</div>
        </a>
        <a class = "logo_sign_aquarius" href="" alt="aquarius">
            <img src="./home_page/assets/img/aquarius.png" width="50%" height="auto">
            <div class = "sign_name">Aquarius</div>
        </a>
        <a class = "logo_sign_aries" href="" alt="aries">
            <img src="./home_page/assets/img/aries.png" width="50%" height="auto">
            <div class = "sign_name">Aries</div>
        </a>
        <a class = "logo_sign_cancer" href="" alt="cancer">
            <img src="./home_page/assets/img/cancer.png" width="50%" height="auto">
            <div class = "sign_name">Cancer</div>
        </a>
        <a class = "logo_sign_capricorn" href="" alt="capricorn">
            <img src="./home_page/assets/img/capricorn.png" width="50%" height="auto">
            <div class = "sign_name">Capricorn</div>
        </a>
        <a class = "logo_sign_gemini" href="" alt="gemini">
            <img src="./home_page/assets/img/gemini.png" width="50%" height="auto">
            <div class = "sign_name">Gemini</div>
        </a>
        <a class = "logo_sign_leo" href="" alt="leo">
            <img src="./home_page/assets/img/leo.png"- width="50%" height="auto">
            <div class = "sign_name">Leo</div>
        </a>
        <a class = "logo_sign_prisces" href="" alt="prisces">
            <img src="./home_page/assets/img/pisces.png" width="50%" height="auto">
            <div class = "sign_name">Prisces</div>
        </a>
        <a class = "logo_sign_sagittarius" href="" alt="sagittarius">
            <img src="./home_page/assets/img/sagittarius.png" width="50%" height="auto">
            <div class = "sign_name">Sagittarius</div>
        </a>
        <a class = "logo_sign_scorpio" href="" alt="scorpio">
            <img src="./home_page/assets/img/scorpio.png" width="50%" height="auto">
            <div class = "sign_name">Scorpio</div>
        </a>
        <a class = "logo_sign_taurus" href="" alt="taurus">
            <img src="./home_page/assets/img/taurus.png" width="50%" height="auto">
            <div class = "sign_name">Taurus</div>
        </a>
        <a class = "logo_sign_virgo" href="" alt="virgo">
            <img src="./home_page/assets/img/virgo.png" width="50%" height="auto">
            <div class = "sign_name">Virgo</div>
        </a>
    </div>

 <script src="assets\js\home.js"></script>
</body>
</html>