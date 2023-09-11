@extends('layouts.web')

@section('content')
    <!--Слайдер-->
    <section class="hero-area">
        <div class="slider-one">
            <div class="single-slider" style="background-image:url({{asset('/assets/images/slider/slider-bg1.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="slide-text">
                                <div class="sltitle"><span class="short">Лучшее решение лля</span>Создания бизнеса</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="slide-btn">
                                    <a href="https://www.youtube.com/watch?v=O-aa1YeQUmk" class="btn primary video-play video-popup mfp-fade">
                                        Смотреть видео<i class="fa fa-play"></i>
                                        <div class="waves-block">
                                            <div class="waves wave-1"></div>
                                            <div class="waves wave-2"></div>
                                            <div class="waves wave-3"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider" style="background-image:url('/assets/images/slider/slider-bg2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                            <div class="slide-text right">
                                <div class="sltitle"><span class="short">Лучшее решение лля</span>Создания бизнеса</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="slide-btn"><a href="index.php?do=feedback" class="btn primary">Наши контакты</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider" style="background-image:url('/assets/images/slider/slider-bg3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="slide-text">
                                <div class="sltitle"><span class="short">Лучшее решение лля</span>Создания бизнеса</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="slide-btn">	<a href="#projects" class="btn primary">Наши проекты<i class="fa fa-long-arrow-down"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--3 блока под слайдером-->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 features-single">
                    <i class="fa fa-meetup"></i>
                    <h2>01/ Стратегия</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 features-single active ">
                    <i class="fa fa-code"></i>
                    <h2>02/ Планирование</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 features-single">
                    <i class="fa fa-sellsy"></i>
                    <h2>03/ Разработка</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
        </div>
    </section>

    <!--Наши услуги-->
    <section id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <div class="sec-t">Наши услуги </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <div class="icon"><i class="fa fa-edit"></i></div>
                        <div class="icon two"><i class="fa fa-edit"></i></div>
                        <h2><a href="#">Название услуги 1</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                        <div class="icon two"><i class="fa fa-lightbulb-o"></i></div>
                        <h2><a href="#">Название услуги 2</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <div class="icon"><i class="fa fa-money"></i></div>
                        <div class="icon two"><i class="fa fa-money"></i></div>
                        <h2><a href="#">Название услуги 3</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                        <div class="icon two"><i class="fa fa-clock-o"></i></div>
                        <h2><a href="#">Название услуги 4</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <div class="icon"><i class="fa fa-globe"></i></div>
                        <div class="icon two"><i class="fa fa-globe"></i></div>
                        <h2><a href="#">Название услуги 5</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <div class="icon"><i class="fa fa-magic"></i></div>
                        <div class="icon two"><i class="fa fa-magic"></i></div>
                        <h2><a href="#">Название услуги 6</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Наши проекты-->
    <section id="projects" class="projects section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <div class="sec-t">Наши проекты</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="project-item" class="cbp">
                        <div class="cbp-item">
                            <div class="project-single">
                                <div class="project-inner">
                                    <div class="project-head"><img src="assets/images/project/1.jpg" alt="#"></div>
                                    <div class="project-bottom">
                                        <h4><a href="#">Название проекта</a><span class="category">Описание проекта</span></h4>
                                    </div>
                                    <div class="button">
                                        <a data-fancybox="portfolio" href="assets/images/project/1.jpg" class="btn"><i class="fa fa-photo"></i></a>
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="project-single">
                                <div class="project-inner">
                                    <div class="project-head"><img src="assets/images/project/2.jpg" alt="#"></div>
                                    <div class="project-bottom">
                                        <h4><a href="#">Название проекта</a><span class="category">Описание проекта</span></h4>
                                    </div>
                                    <div class="button">
                                        <a data-fancybox="portfolio" href="assets/images/project/2.jpg" class="btn"><i class="fa fa-photo"></i></a>
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="project-single">
                                <div class="project-inner">
                                    <div class="project-head"><img src="assets/images/project/3.jpg" alt="#"></div>
                                    <div class="project-bottom">
                                        <h4><a href="#">Название проекта</a><span class="category">Описание проекта</span></h4>
                                    </div>
                                    <div class="button">
                                        <a data-fancybox="portfolio" href="assets/images/project/3.jpg" class="btn"><i class="fa fa-photo"></i></a>
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="project-single">
                                <div class="project-inner">
                                    <div class="project-head"><img src="assets/images/project/4.jpg" alt="#"></div>
                                    <div class="project-bottom">
                                        <h4><a href="#">Название проекта</a><span class="category">Описание проекта</span></h4>
                                    </div>
                                    <div class="button">
                                        <a data-fancybox="portfolio" href="assets/images/project/4.jpg" class="btn"><i class="fa fa-photo"></i></a>
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="project-single">
                                <div class="project-inner">
                                    <div class="project-head"><img src="assets/images/project/5.jpg" alt="#"></div>
                                    <div class="project-bottom">
                                        <h4><a href="#">Название проекта</a><span class="category">Описание проекта</span></h4>
                                    </div>
                                    <div class="button">
                                        <a data-fancybox="portfolio" href="assets/images/project/5.jpg" class="btn"><i class="fa fa-photo"></i></a>
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="project-single">
                                <div class="project-inner">
                                    <div class="project-head"><img src="assets/images/project/6.jpg" alt="#"></div>
                                    <div class="project-bottom">
                                        <h4><a href="#">Название проекта</a><span class="category">Описание проекта</span></h4>
                                    </div>
                                    <div class="button">
                                        <a data-fancybox="portfolio" href="assets/images/project/6.jpg" class="btn"><i class="fa fa-photo"></i></a>
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Счетчики особенностей-->
    <div id="counter" class="counter section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-single">
                        <div class="icon"><i class="fa fa-tasks"></i></div>
                        <div class="s-info">
                            <span class="number">4021 </span>
                            <p>довольных клиентов</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-single">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-info">
                            <span class="number">98</span>
                            <p>готовых проектов</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-single">
                        <div class="icon"><i class="fa fa-coffee"></i></div>
                        <div class="s-info">
                            <span class="number">2999</span>
                            <p>налитых чашек кофе</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter-single">
                        <div class="icon"><i class="fa fa-trophy"></i></div>
                        <div class="s-info">
                            <span class="number">57</span>
                            <p>выйгранных наград</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Наша команда-->
    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <div class="sec-t">Наша команда</div>
                        <p>Краткое описание к данному блоку или любой текст.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team one default">
                        <div class="t-head">
                            <img src="assets/images/team/team1.jpg" alt="#">
                            <div class="t-hover">
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2 class="t-name">Имя Фамилия</h2>
                            <p class="what">Должность</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team one default">
                        <div class="t-head">
                            <img src="assets/images/team/team2.jpg" alt="#">
                            <div class="t-hover">
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2 class="t-name">Имя Фамилия</h2>
                            <p class="what">Должность</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team one default">
                        <div class="t-head">
                            <img src="assets/images/team/team3.jpg" alt="#">
                            <div class="t-hover">
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2 class="t-name">Имя Фамилия</h2>
                            <p class="what">Должность</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team one default">
                        <div class="t-head">
                            <img src="assets/images/team/team4.jpg" alt="#">
                            <div class="t-hover">
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <h2 class="t-name">Имя Фамилия</h2>
                            <p class="what">Должность</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Наши новости-->
    <section id="blog-main" class="blog-main section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <div class="sec-t">новости компании</div>
                        <p>Краткое описание к данному блоку или любой текст.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-main">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-slider">
                            <div class="single-blog single-slider">
                                <div class="blog-post">
                                    <div class="blog-head">
                                        <img src="assets/dleimages/no_image.jpg" alt="Rahbariyat">
                                        <a class="link" href="http://xorazm-ttk.uz/about/22-rahbariyat.html"><i class="fa fa-paper-plane"></i></a>
                                    </div>
                                    <div class="blog-info">
                                        <h2><a href="http://xorazm-ttk.uz/about/22-rahbariyat.html">Rahbariyat</a></h2>
                                        <div class="meta">
                                            <span><i class="fa fa-folder"></i>Markaz haqida</span>
                                            <span><i class="fa fa-calendar-o"></i>08-апр-2020</span>
                                            <span><i class="fa fa-eye"></i>5</span>
                                        </div>
                                        <p>Viloyat teri-tanosil kasalliklari dispanseri rahbariyati...</p>
                                    </div>
                                </div>
                            </div><div class="single-blog single-slider">
                                <div class="blog-post">
                                    <div class="blog-head">
                                        <img src="assets/dleimages/no_image.jpg" alt="Tuzilma">
                                        <a class="link" href="http://xorazm-ttk.uz/about/7-tuzilma.html"><i class="fa fa-paper-plane"></i></a>
                                    </div>
                                    <div class="blog-info">
                                        <h2><a href="http://xorazm-ttk.uz/about/7-tuzilma.html">Tuzilma</a></h2>
                                        <div class="meta">
                                            <span><i class="fa fa-folder"></i>Markaz haqida</span>
                                            <span><i class="fa fa-calendar-o"></i>07-апр-2020</span>
                                            <span><i class="fa fa-eye"></i>8</span>
                                        </div>
                                        <p>Tuzilma...</p>
                                    </div>
                                </div>
                            </div><div class="single-blog single-slider">
                                <div class="blog-post">
                                    <div class="blog-head">
                                        <img src="assets/dleimages/no_image.jpg" alt="Dispanser haqida">
                                        <a class="link" href="http://xorazm-ttk.uz/about/4-markaz-haqida.html"><i class="fa fa-paper-plane"></i></a>
                                    </div>
                                    <div class="blog-info">
                                        <h2><a href="http://xorazm-ttk.uz/about/4-markaz-haqida.html">Dispanser haqida</a></h2>
                                        <div class="meta">
                                            <span><i class="fa fa-folder"></i>Markaz haqida</span>
                                            <span><i class="fa fa-calendar-o"></i>07-апр-2020</span>
                                            <span><i class="fa fa-eye"></i>22</span>
                                        </div>
                                        <p>Viloyat aholisiga teri-tanosil kasalliklari xizmati Xiva tumani Juryon qishlog‘ida joylashgan 65 o‘rinli statsionar va 137...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
