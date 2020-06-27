@extends('blocks.layout')

@section("content")
    <section class="model content-block">
        <h1 class="title"><b>Модель діяльності <span>«GoogLiKi»</spa></b></h1>
        <section class="scheme">
            <div class="cycle-block">
                <span class="note">ХОЧУ</span>
                <span class="note">МОЖУ</span>
                <span class="note">БУДУ</span>
                <img class="cycle" src="/images/model/cycle2.png" alt="cycle">
            </div>

            <div class="arrow-wrapper">
                <div class="arrow-block">
                    <img class="arrow" src="/images/model/arrow1.png" alt="arrow">
                    <span class="caption">РОЗВИТОК</span>
                </div>
                <div class="arrow-block">
                    <img class="arrow" src="/images/model/arrow2.png" alt="arrow">
                    <span class="caption">ВИХОВАННЯ</span>
                </div>
                <div class="arrow-block">
                    <img class="arrow" src="/images/model/arrow3.png" alt="arrow">
                    <span class="caption">НАВЧАННЯ</span>
                </div>
            </div>
             
            <span class="description">
                Перехід від розуміння дитиною поняття <br><span>ТРЕБА</span> до змісту  <span>НАВІЩО ЦЕ МЕНІ ПОТРІБНО</spa>.
            </span>
        </section>
    </section>
    <section class="line-delimiter content-block"></section>
    <section class="conception content-block">
        <h2 class="title-2">
            КОНЦЕПЦІЯ ДІЯЛЬНОСТІ ЗАКЛАДУ В КОНТЕКСТІ ПІДГОТОВКИ СУЧАСНОЇ ДИТИНИ ДО НАВЧАННЯ В ШКОЛІ
        </h2>

        <section class="conception-blocks">
            <div class="nav-block">
                <a href="/model/article/1" class="block-wrapper">
                    <i class="fas fa-globe-americas circle"></i>
                    <span class="link-text">ФОРМУВАННЯ ЦІЛІСНОЇ КАРТИНИ СВІТУ <br>(предметне, природне , соціальне довкілля)</span>
                </a>
                <a href="/model/article/2" class="block-wrapper">
                    <i class="fab fa-searchengin circle"></i>
                    <span class="link-text">
                        ДІЯЛЬНІСНИЙ ПІДХІД ТА РЕЗУЛЬТАТООРІЄНТОВАНІСТЬ В РІЗНИХ ВИДАХ ДІЯЛЬНОСТІ
                    </span>      
                </a>
                <a href="/model/article/3" class="block-wrapper">
                    <i class="fas fa-thumbs-up circle"></i>
                    <span class="link-text">
                        ФОРМУВАННЯ ЖИТТЄВИХ КОМПЕТЕНТНОСТЕЙ
                    </span> 
                </a>
                <a href="/model/article/4" class="block-wrapper">
                    <i class="far fa-smile-beam circle"></i>
                    <span class="link-text">КОМФОРТНЕ ПРОЖИВАННЯ ДИТИНОЮ СПЕЦИФІЧНО ДИТЯЧОЇ ДІЯЛЬНОСТІ</span>
                </a>
                <a href="/model/article/5" class="block-wrapper">
                    <i class="far fa-handshake circle"></i>
                    <span class="link-text">ПАРТНЕРСЬКА ВЗАЄМОДІЯ</span>   
                </a>
                <i class="fas fa-arrow-down"></i>
            </div>
            <div class="conception-result">
                Особистністне зростання дитини та досягнення дошкільної зрілості
            </div>
        </section>
        
       
    </section>
@endsection