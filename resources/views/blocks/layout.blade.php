<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/fonts.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/style/fontawesome/all.min.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="line"></div>
            <nav class="menu">

                @if ($article_number)
                     <a href="/" class="goto-home">
                    <i class="fas fa-arrow-left"></i>
                    Повернутись на головну
                </a>
                @endif
               
            </nav>
            <section class="slider">
                <div class="hide-wrapper"></div>
                <img id="sliderImage1" class="slider-image" src="/images/slider-img1.png" alt="kid">
                <img id="sliderImage2" class="slider-image" src="/images/slider-img2.png" alt="kid">
                <img id="sliderImage3" class="slider-image" src="/images/slider-img3.png" alt="kid">
                <img id="sliderImage4" class="slider-image" src="/images/slider-img4.png" alt="kid">
                <h3 class="slogan">Slogan</h3>
                <img src="/images/logo.png" alt="logo" class="logo">
            </section>
        </header>
        <div class="content">
           @yield('content')
        </div>
        <footer>
            <section class="social-links">
                <span class="follow">Follow us:</span>
                <a href="https://facebook.com" class="social">
                    <i class="fab fa-facebook-f"></i>
                    Сторінка в facebook
                </a>

                <a href="https://instagram.com" class="social">
                    <i class="fab fa-instagram"></i>
                    Сторінка в instagram
                </a>
             
            </section>
            <div class="line"></div>
        </footer>
    </div> 
    
</body>
</html>