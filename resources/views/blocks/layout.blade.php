<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/fonts.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/style/home.css">
    <link rel="stylesheet" href="/style/article.css">
    <link rel="stylesheet" href="/style/model.css">
    <link rel="stylesheet" href="/style/mediaquery.css">
    <link rel="stylesheet" href="/style/fontawesome/all.min.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="line"></div>
            <nav class="menu">

                <a href="/" class="menu-item">Головна</a>
                <a href="/model" class="menu-item">Модель розвитку</a>
                {{-- @if ($article_number)
                    <a href="/" class="goto-home">
                    <i class="fas fa-arrow-left"></i>
                    Повернутись на головну
                </a>
                @endif --}}
               
            </nav>
            <section class="slider">
                <div class="hide-wrapper"></div>
                <img id="sliderImage1" class="slider-image" src="/images/slider-img1.png" alt="kid">
                <img id="sliderImage2" class="slider-image" src="/images/slider-img2.png" alt="kid">
                <img id="sliderImage3" class="slider-image" src="/images/slider-img3.png" alt="kid">
                <img id="sliderImage4" class="slider-image" src="/images/slider-img4.png" alt="kid">
                <img src="/images/logo.png" alt="logo" class="logo">
            </section>
        </header>
        <main class="content">
           @yield('content')
        </main>
        <footer>
            <section class="social-links">
                <span class="follow">Follow us:</span>
                <a href="https://facebook.com" class="social">
                    <i class="fab fa-facebook-f"></i>
                   Знайдіть нас в фейсбук
                </a>

                <a href="https://www.facebook.com/Googliki/" class="social">
                    <i class="fab fa-facebook-f"></i>
                    Наша група
                </a>
             
            </section>
            <div class="line"></div>
        </footer>
    </div> 
    
</body>
</html>