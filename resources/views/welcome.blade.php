<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Starkid - Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}" />
    <meta name="theme-color" content="#3a9fff">
    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body>
    <header class="header">
        <div class="container header__container">
            <div class="header__logo"><img class="header__img" src="img/logo-full.png" style="width: 180px;"></div> 
            <div class="header__menu">
                <nav id="navbar" class="header__nav collapse">
                    <ul class="header__elenco">
                        <li class="header__el"><a href="#home" class="header__link"> <strong>Главная</strong> </a></li>
                        <li class="header__el"><a href="#about" class="header__link"> <strong>О нас</strong></a></li>
                        <li class="header__el"><a href="#features" class="header__link"> <strong>Преимущества</strong></a></li>
                        <li class="header__el"><a href="#why" class="header__link"> <strong>Почему STARK?</strong></a></li>
                        <li class="header__el"><a href="#contact" class="header__link"> <strong>Связаться с нами</strong></a></li>
                        <li class="header__el header__el--blue"><a href="{{url('/login')}}" class="btn btn--white"> <strong>Войти →</strong></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="container digits"   data-aos="zoom-out">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <div data-relative-input="true" id="scene" >
                        <div data-depth="0.2" ><img src="img/big.png" class="img-responsive img_cover" ></div>
                        <div data-depth="0.6" ><img src="img/small.png" alt="" class="img-responsive img_cover"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HOME SECTION -->
    <section id="home" data-aos="zoom-out">
        <div class="sect sect--padding-top" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="  padding-top: 10%;">
                        <div class="site">
                            <h1 class="site__title"><strong>Пошаговая система обучения робототехнике STARK</strong></h1>
                            <h2 class="site__subtitle">
                                <div id="typed-strings">
                                    <p> – раскрой свой талант!</p>
                                    <p>робототехника это просто - мы научим</p>
                                </div>
                                <span id="typed"></span>
                            </h2>
                            <div class="site__box-link">
                                <button class="btn btn--width"  data-toggle="modal" data-target="#myModal">Пройти пробный урок</button>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME SECTION -->

    <!-- HOME BUTTON MODAL -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Получение пробного аккаунта</h4>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Введите Ваш электронный адрес</h4>
                    <p class=" text-center row__sub--light">На ваш электронный адрес придут данные для входа</p><br>
                    <img src="img/light_password_resent.svg" class="img-responsive" style="margin: 0 auto;">
                    <p id="validate" class="text-center"></p>
                    <div id="servAnswer" class="alert alert-success" style="display: none; width: 80%; margin-left: 10%;"></div>
                    <div id="servError" class="alert alert-danger" style="display: none; width: 80%; margin-left: 10%;"></div>
                    <form name="tAccount">
                        <input type="text" id="email" style="width: 80%; margin-left: 10%;" class="text-center form__field form__text" placeholder="Ваш Email*  ">
                    <br>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary" name="getAccount">Отправить</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END HOME BUTTON MODAL -->

    <!-- ABOUT SECTION -->
    <section id="about" data-aos="fade-right">
        <div class="sect sect--white">
            <div class="container">
                <div class="row" data-aos="fade-right">
                    <h1 class="row__title">
                        <strong> О нас</strong>
                    </h1>
                    <h2 class="row__sub">Для чего нужен курс?</h2>
                </div>
                <div class="row row--margin row--text-center" data-aos="fade-up">
                    <div class="col-md-8 col-sm-10 col-xs-12 row__carousel">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="item__content">
                                        <img class="item__img" src="img/logo.png" alt="Slack"><span class="item__name">STARKID</span>
                                        <p class="item__description">
                                            Этот онлайн курс разработан для тех, кто хочет создавать роботов, и научить их приносить
                                            вам пользу сейчас. Программирование робота – это легко, не надо для этого долго учится.
                                            Уже после 3го урока вы уже сможете объяснить роботу что вы от него хотите.
                                        </p>
                                    </div>
                                    <div class="item__avatar" data-aos="fade-right"></div>
                                    <p class="item__people" >Курс робототехника №1</p>
                                    <p class="item__occupation"></p>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT SECTION -->

    <!-- FEATURES SECTION -->
    <section id="features" data-aos="zoom-out">
        <div class="sect sect--padding-bottom">
            <div class="container">
                <div class="row row--center">
                    <h1 class="row__title" data-aos="fade-right">
                        <strong> Преимущества</strong>
                    </h1>
                    <h2 class="row__sub">Наши основные преимущества</h2>
                </div>
                <div id="logocontainer" data-aos="fade-right">
                    <a   id="css3" data-toggle="popover" data-placement="left" data-content="Короткие уроки по 7 минут насыщенные информацией без лишнего повторения, только
                    самое нужное и интересное">
                        <img class="topics img-responsive" src="img/feat2.png">
                    </a>
                    <a  id="html5" data-toggle="popover" data-placement="left" data-content="Занимайтесь дома или в перерывах, не нужно тратить время на дорогу – узнавайте новое
                    каждый день">
                    <img class="topics img-responsive" src="img/feat1.png">
                    </a> 
                    <a  id="sass" data-toggle="popover" data-placement="left" data-content="Проходите уроки в удобном для вас темпе, и в комфортном для вам месте.">
                    <img class="topics img-responsive"  src="img/feat3.png">
                    </a>
                    <a  id="js" data-toggle="popover" data-placement="right" data-content="Преимущество">
                    <img class="topics img-responsive"  src="img/feat4.png">
                    </a>
                    <a  id="php" data-toggle="popover" data-placement="right" data-content="Отслеживайте свой прогресс, повышайте свой рейтинг">
                    <img class="topics img-responsive"  src="img/feat5.png">
                    </a>
                    <svg id="retina" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                    <path id="Retina2" class="st9" d="M222,186.3l-5.1,4.9l2.1-6.7c-0.7-0.2-1.3-0.3-2.1-0.3c-3.9,0-7.1,3.2-7.1,7.1
                    c0,3.9,3.2,7.1,7.1,7.1c3.9,0,7.1-3.2,7.1-7.1C224,189.2,223.3,187.5,222,186.3z"/>
                    <path id="Retina1" class="st9" d="M281.6,186.3l-5.1,4.9l2.1-6.7c-0.7-0.2-1.3-0.3-2.1-0.3c-3.9,0-7.1,3.2-7.1,7.1
                    c0,3.9,3.2,7.1,7.1,7.1c3.9,0,7.1-3.2,7.1-7.1C283.5,189.2,282.8,187.5,281.6,186.3z"/>
                    </svg>
                    <img id="sanky"  src="https://inf3cti0n95.github.io/img/sanky.svg">
                </div> 
            </div>
        </div>
    </section>
    <!-- END FEATURES SECTION -->


 <!-- WHY STARKID> SECTION -->
<section id="why" data-aos="fade-right">
    <div class="sect sect--white">
        <div class="container">
            <div class="row">
                <h1 class="row__title" data-aos="fade-left">
                    <strong>Почему STARK?</strong>
                </h1>
                <h2 class="row__sub" >Подзаголовок</h2>
            </div>
            <div class="row row--margin" data-aos="fade-right">
                <div class="col-md-6">
                    <img src="img/image3015.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h3 class="display-4" data-aos="flip-right">
                        Система STARK 
                    </h3>
                    <p class="text-left why-text" data-aos="flip-right">
                        предназначена для учеников, которые хотят и могут усваивать школьную
                        программу быстрее. Не надо повторять пройденное, если что-то забылось, легко
                        пересмотреть соответствующий урок. Функцию контроля над знаниями выполняют короткие
                        тестирования в конце каждого видео. Ваш прогресс не пройдет незамеченным, после каждого
                        успешного теста ваш рейтинг повышается, и вы получаете новые возможности в системе.
                    </p>
                    <br>
                    <button class="btn btn--width"  data-toggle="modal" data-target="#myModal">Пройти пробный урок</button>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- END WHY STARKID? SECTION -->

  <!-- CONTACTS SECTION -->
<section id="contact" data-aos="slide-up">
    <div class="sect sect--padding-bottom">
        <div class="container">
            <div class="row">
                <h1 class="row__title" data-aos="slide-up"> <strong>Связаться с нами</strong></h1>
                <h2 class="row__sub"  data-aos="fade-left">Спроси любой вопрос, это бесплатно</h2>
            </div>
            <div class="row row--margin">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <div class="contacts" data-aos="fade-right">
                        <a href="#" class="contacts__link" ><img src="img/logo-full.png" style="width: 150px;"><h1 class="contacts_title-ag"></h1></a>
                        <p class="contacts__address">
                            г.Алматы<br>
                            Улица - <br>
                        </p>
                        <p class="contacts__info">
                            Тел. <a href="#" class="contacts__info-link">+7 707 777 77 77</a>
                        </p>
                        <p class="contacts__info">
                            email: <a href="#"class="contacts__info-link">info@starkid-edu.kz</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="flip-right">
                    <form id="contact" name="feedbackForm" class="form">
                        <div class="form-group">
                            <input type="text" placeholder="Заголовок*" class="form__field form__text"/>
                        </div>
                        <div class="form-group">
                            <div class="form__field--half">
                                <input type="text" placeholder="Имя*" class="form__field form__text"/>
                            </div>
                            <div class="form__field--half">
                                <input type="text" placeholder="Фамилия" class="form__field form__text"/>
                            </div>
                        </div>
                
                        <div class="form-group">
                            <div class="form__field--half">
                                <input type="text" placeholder="Email*" class="form__field form__text"/>
                            </div>
                            <div class="form__field--half">
                                <input type="text" placeholder="Номер телефона" class="form__field form__text"/>
                            </div>
                        </div>
            
                        <div class="form-group">
                            <textarea type="text" placeholder="Ваше сообщение*" class="form__field form__textarea"></textarea>
                            <button class="btn btn--up btn--width" type="submit">Отправить</button>
                        </div>
                    </form>
                </div>   
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</section>
  <!-- END CONTACTS SECTION -->

<!--
<div class="sect sect--violet ">
  <img src="https://image.ibb.co/fWyVtb/path3762.png" class="career-img">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="career_title">O! Your have digged our website in search for the new job?</h1>
        <h1 class="career_sub">We will pleased to have you onboard! Check open positions.</h1>
        <a href="#" class="btn btn--white btn--width">Careers</a>
      </div>
    </div>
  </div>
  
</div>
-->
<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="row">
        <div class="col-md-3 col-xs-6">
            <img class="footer__img" src="img/logo.png" style="width:50px"> <h1 class="footer__title">Starkid<span class="footer__light">-edu.kz</span></h1>
        </div>
        <div class="col-md-9 col-xs-6">
            <div class="footer__social">
                <a href="#" class="footer__social-l">
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjEyLDExNi4yNThjLTIyLjUyNSw5Ljk4MS00Ni42OTQsMTYuNzUtNzIuMDg4LDE5Ljc3MmMyNS45MjktMTUuNTI3LDQ1Ljc3Ny00MC4xNTUsNTUuMTg0LTY5LjQxMSAgICBjLTI0LjMyMiwxNC4zNzktNTEuMTY5LDI0LjgyLTc5Ljc3NSwzMC40OGMtMjIuOTA3LTI0LjQzNy01NS40OS0zOS42NTgtOTEuNjMtMzkuNjU4Yy02OS4zMzQsMC0xMjUuNTUxLDU2LjIxNy0xMjUuNTUxLDEyNS41MTMgICAgYzAsOS44MjgsMS4xMDksMTkuNDI3LDMuMjUxLDI4LjYwNkMxOTcuMDY1LDIwNi4zMiwxMDQuNTU2LDE1Ni4zMzcsNDIuNjQxLDgwLjM4NmMtMTAuODIzLDE4LjUxLTE2Ljk4LDQwLjA3OC0xNi45OCw2My4xMDEgICAgYzAsNDMuNTU5LDIyLjE4MSw4MS45OTMsNTUuODM1LDEwNC40NzljLTIwLjU3NS0wLjY4OC0zOS45MjYtNi4zNDgtNTYuODY3LTE1Ljc1NnYxLjU2OGMwLDYwLjgwNiw0My4yOTEsMTExLjU1NCwxMDAuNjkzLDEyMy4xMDQgICAgYy0xMC41MTcsMi44My0yMS42MDcsNC4zOTgtMzMuMDgsNC4zOThjLTguMTA3LDAtMTUuOTQ3LTAuODAzLTIzLjYzNC0yLjMzM2MxNS45ODUsNDkuOTA3LDYyLjMzNiw4Ni4xOTksMTE3LjI1Myw4Ny4xOTQgICAgYy00Mi45NDcsMzMuNjU0LTk3LjA5OSw1My42NTUtMTU1LjkxNiw1My42NTVjLTEwLjEzNCwwLTIwLjExNi0wLjYxMi0yOS45NDQtMS43MjFjNTUuNTY3LDM1LjY4MSwxMjEuNTM2LDU2LjQ4NSwxOTIuNDM4LDU2LjQ4NSAgICBjMjMwLjk0OCwwLDM1Ny4xODgtMTkxLjI5MSwzNTcuMTg4LTM1Ny4xODhsLTAuNDIxLTE2LjI1M0M1NzMuODcyLDE2My41MjYsNTk1LjIxMSwxNDEuNDIyLDYxMiwxMTYuMjU4eiIgZmlsbD0iIzcyOTNiMyIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                </a>
                <a href="#" class="footer__social-l">
                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjNzI5M2IzIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                </a>
            </div>
      </div>
    </div>
  </div>
</footer>
<!-- END FOOTER -->
</body>


<!-- SCRIPTS --->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

  
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js'></script>
<script  src="{{asset('js/welcome.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>

<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>

<script>
  $('document').ready(function(){
    $('[data-toggle="popover"]').popover();  
    
    var typed = new Typed("#typed", {
    // Waits 1000ms after typing "First"
    stringsElement:'#typed-strings',
    backSpeed: 50,
    typeSpeed: 50,
    loop: true
  });

  });
  
  AOS.init({
  duration: 1200,
});

$('#pricing').waypoint(function() {

});
  var scene = document.getElementById('scene');
  var parallaxInstance = new Parallax(scene);

  $('[data-toggle="popover"]').popover({
    trigger : 'hover'
}).on('show.bs.popover', function() {
    $('.popover').hide();     
}).on('shown.bs.popover', function() {    
    var $popover = $('.popover')[0];
    switch ($(this).attr('id')) {
        case 'html5' : $popover.find('.arrow').css('right', '10px');break;
        case 'js' : $popover.find('.arrow').css('left', '10px');break;            
        case 'c' : $popover.find('.arrow').css('left', '180px');break;            
        default : break;            
    }            
});
</script>
<!-- END SCRIPTS --->

</html>
