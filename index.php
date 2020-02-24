<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php include "admin/data.php"; ?>
<html lang="ru">
<head>
<title><?php echo_data_static("title"); ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="keywords" content="<?php echo_data_static("keywords"); ?>">
<meta name="description" content="<?php echo_data_static("description"); ?>">
<link href="/fav.png" rel="shortcut icon" type="image/x-icon">
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/callback/css/template.css" type="text/css" />
<link href="/css/owl.carousel.min.css" rel="stylesheet" media="screen">
<link href="/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
<link href="/css/timer.css" rel="stylesheet" media="screen">
<link href="/style.css" rel="stylesheet" type="text/css" />
<link href="/css/respons.css" rel="stylesheet" media="screen">
<link href="/css/lightbox.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClgjXqqEgsegMqXbpbfuE8kNANGGL_yWs&callback=initMap"></script>
<?php include "g-maps.php"; ?>
<?php if($_GET["admin"]=="j1p") echo "<script src=\"/admin/client.js\"></script>\n<style type=\"text/css\">.admin-edit:focus {outline: none;border: 1px solid #e9691e;}</style>"; ?>
</head>

<body>


<section id="top-head" class="block-scroll ptb-10">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-4 col-6">
<h1><i class="fa fa-apple" aria-hidden="true"></i> Ifans Pro</h1>
</div>
<div class="col-sm-5 d-sm-block d-lg-none col-6 col-md-4">
<a class="phone-mob" href="tel:+380669858424">+38 (066) 985 84 24</a>
</div>
<div class="col-lg-6 col-md-2 col-sm-3">
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#about"><?php echo_data("text_field_1558854045001", "Об Ifans"); ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#gall"><?php echo_data("text_field_1558854045002", "Галерея"); ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tech"><?php echo_data("text_field_1558854045003", "Характеристики"); ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#testim"><?php echo_data("text_field_1558854045004", "Отзывы"); ?></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#work"><?php echo_data("text_field_1558854045005", "Доставка"); ?></a>
      </li>
    </ul>
	<a href="#" class="close-menu-btn"><?php echo_data("text_field_1558854045006", "Закрыть"); ?></a>
  </div>
</nav>
</div>
<div class="col-lg-3 col-md-12 ">
<div class="phone-num"><?php echo_data("text_field_1558854045007", "+38 "); ?><span><?php echo_data("text_field_1558854045009", "(066)"); ?></span><?php echo_data("text_field_1558854045008", " 985 84 24"); ?></div>
</div>
</div>
</div>
</section>



<section id="top-banner" class="bg-color dark-after">
<div class="container">
<div class="row">


<div class="offset-6 col-lg-6 col-md-12 pt-40">
<div class="only-mob">
<img src="/img/tech.png">
</div>
<h2 class="big pt-30"><span><?php echo_data("text_field_1558854045012", "Ifans Pro"); ?></span><br><?php echo_data("text_field_1558854045011", "НАУШНИКИ СО СКИДКОЙ 35%"); ?></h2>
<div class="clearfix"></div>
<h3><?php echo_data("text_field_1558854045013", "Ifans Pro – Самая лучшая версия на сегодняшний день"); ?></h3>
<h3 class="col-w"><?php echo_data("text_field_1558854045014", "призванные открыть новые грани комфорта и качества звука"); ?></h3>
<div class="clearfix"></div>
<hr>

<div class="row">
<div class="col-md-12">
<h4><?php echo_data("text_field_1558854045015", "Акция закончится через"); ?></h4>
<div class="countdown" style="height:60px;"/></div>
</div>
</div>

<div class="row">
<div class="offset-3 col-md-3 w50">
<p class="old-cen"><span><?php echo_data("text_field_1558854045097", "Обычная цена"); ?></span><b><?php echo_data("text_field_1558854045098", "2200 грн."); ?></b></p>
</div>

<div class="col-md-4 col-6 w50">
<p class="new-cen"><span><?php echo_data("text_field_1558854045019", "Цена со кидкой"); ?></span><?php echo_data("text_field_1558854045018", "1499 грн"); ?></p>
</div>
</div>

<a class="zak-btn" data-th="Форма обратного звонка в шапке" href="#" onclick="showPopup(event);"><?php echo_data("text_field_1558854045020", "Заказать"); ?></a>
</div>
</div>
<?php echo_data("text_field_1558854045010", "</div>"); ?>
</section>

<svg id="curve_1" data-name="Curve 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1416.99 174.01" class="homepage__features__wave">
 <path d="M0 120 Q360 60 720 120 T 1440 120 V240 H0 Z"></path>
</svg>


<section id="about" class="pt-20 pb-30">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-12">
<h2 class="titl"><span><?php echo_data("text_field_1558854045022", "Ifans Pro"); ?></span><?php echo_data("text_field_1558854045021", " – ВЫСОКОЕ КАЧЕСТВО ЗВУКА"); ?></h2>
<p><?php echo_data("text_field_1558854045023", "Ifans Pro – Премиум версия 2020 года, лучшие и последние по выпуску наушники, которые полностью изменят Ваше представление об использовании беспроводных bluetooth наушников. Достаньте их из футляра — и они уже готовы к работе с Android, iPhone, Apple Watch, iPad или Mac.. Наушники поддерживают все современные устройства с Bluetooth. Особенностью наушников является более глубокий и насыщенный звук на нижних частотах. Динамики наушников Ifans Pro специально спроектированы так, чтобы обеспечить минимальные потери звука и наилучшее звучание. 
"); ?></p>
<p><?php echo_data("text_field_1558854045024", "В отличие от круглой формы обычной гарнитуры, конструкция новых наушников Ifans Pro продиктована геометрией ушной раковины. Именно поэтому для многих пользователей они будут удобнее любых других наушников-вкладышей. А отсутствие резиновых заглушек сводит на нет практически любой возможный дискомфорт от длительного ношения гарнитуры."); ?></p>
</div>
<div class="col-lg-4 col-md-12">
<img src="/img/540_400.jpg">
</div>
</div>
</div>
</section>

<section id="features" class="wow fadeIn pb-60">
<div class="container">

<div class="row">
<div class="col-md-5">
<h2 class="titl"><?php echo_data("text_field_1573137536012", "Технологии"); ?></h2>
<div class="reimimg"><img class="wow rubberBand delay-4s" src="/img/preim1.jpg"></div>
<div class="wow fadeInLeft side-left">
<p><span class="wow rubberBand"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536014", "Пассивное шумоподавление"); ?></p>
<p><span class="wow rubberBand delay-1s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536016", "Меню шумо подавления"); ?></p>
<p><span class="wow rubberBand delay-2s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536018", "Управление жестами"); ?></p>
<p><span class="wow rubberBand delay-3s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536020", "Все функци Pop up анимации"); ?></p>
<p><span class="wow rubberBand delay-4s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536020", "Голосовое Управление Siri"); ?></p>
<p><span class="wow rubberBand delay-5s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536020", " На корпусе кейса на наушниках и на коробке присутствуют все серийные номера и надписи"); ?></p>
<p><span class="wow rubberBand delay-5s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536020", "Можно отследить в приложении локатор так же привязываются к iCloud"); ?></p>
</div>
</div>
<div class="col-md-2">
</div>
<div class="col-md-5">
<h2 class="titl"><?php echo_data("text_field_1573137536012", "Датчики"); ?></h2>
<div class="reimimg"><img class="wow rubberBand delay-4s" src="/img/preim2.jpg"></div>
<div class="wow fadeInRight side-right">
<p><span class="wow rubberBand"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536022", "Улучшенное качество басов/аудио"); ?></p>
<p><span class="wow rubberBand delay-1s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536024", "Микрофоны в обоих наушниках"); ?></p>
<p><span class="wow rubberBand delay-2s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536026", "Cмена имени наушников"); ?></p>
<p><span class="wow rubberBand delay-3s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536028", "Автоматически отключаются при вытаскивании из ушей"); ?></p>
<p><span class="wow rubberBand delay-4s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536028", "GPS модуль"); ?></p>
<p><span class="wow rubberBand delay-5s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536028", "Показывает реальный заряд ,батареи наушников и кейса"); ?></p>
<p><span class="wow rubberBand delay-5s"><i class="fa fa-check" aria-hidden="true"></i></span><?php echo_data("text_field_1573137536028", "Оригинальный чип"); ?></p>
</div>
</div>
</div>
</div>
</section>

<section id="free-button">
<a class="zak-btn" data-th="Кнопка обратного звонка" href="#" onclick="showPopup(event);"><?php echo_data("text_field_1558854045025", "Заказать сейчас"); ?></a>
</section>

<section id="preim" class="ptb-60 bg-gray dark-after">
<div class="container">
<h2  class="titl col-w"><span><?php echo_data("text_field_1558854045027", "Наши"); ?></span><?php echo_data("text_field_1558854045026", " преимущества "); ?></h2>
<div class="row"> 
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="pr-item">
<div class="i-circle">
<img src="/img/i1.png">
</div>
<h3><?php echo_data("text_field_1558854045028", "Мы продаем только сертифицированые товары"); ?></h3>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="pr-item">
<div class="i-circle">
<img src="/img/i1.png">
</div>
<h3><?php echo_data("text_field_1558854045029", "Наушники проходят тщательную проверку перед отправкой"); ?></h3>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="pr-item">
<div class="i-circle">
<img src="/img/i1.png">
</div>
<h3><?php echo_data("text_field_1558854045030", "Быстрая доставка товара почтой"); ?><br><?php echo_data("text_field_1558854045031", "1-2 дня"); ?></h3>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="pr-item">
<div class="i-circle">
<img src="/img/i1.png">
</div>
<h3><?php echo_data("text_field_1558854045032", "Оплата заказа по факту получения на руки"); ?></h3>
</div>
</div>
</div>
</div>
</section>


<svg id="curve_1" data-name="Curve 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1416.99 174.01" class="homepage__features__wave">
 <path d="M0 120 Q360 60 720 120 T 1440 120 V240 H0 Z"></path>
</svg>

<section id="gall" class="pb-80">
<div class="container-fluid">
<h2 class="titl"><?php echo_data("text_field_1558854045033", "Галерея "); ?><span><?php echo_data("text_field_1558854045034", "Ifans Pro"); ?></span></h2>
	<div class="row"> 
    <div class="nopadding col-lg-3 col-md-4 col-12">
        <a href="/img/gall/gal1.jpg" data-lightbox="gal1"><img src="/img/gall/gal1.jpg"></a>
    </div>
    <div class="nopadding col-lg-3 col-md-4 col-12">
        <a href="/img/gall/gal2.jpg" data-lightbox="gal1"><img src="/img/gall/gal2.jpg"></a>
    </div>
    <div class="nopadding col-lg-3 col-md-4 col-12">
        <a href="/img/gall/gal3.jpg" data-lightbox="gal1"><img src="/img/gall/gal3.jpg"></a>
    </div>
	<div class="nopadding col-lg-3 col-md-4 col-12">
        <a href="/img/gall/gal4.jpg" data-lightbox="gal1"><img src="/img/gall/gal4.jpg"></a>
    </div>
	<div class="nopadding col-lg-3 col-md-4 col-12">
        <a href="/img/gall/gal5.jpg" data-lightbox="gal1"><img src="/img/gall/gal5.jpg"></a>
    </div>
    <div class="nopadding col-lg-3 col-md-4 col-12">
        <a href="/img/gall/gal6.jpg" data-lightbox="gal1"><img src="/img/gall/gal6.jpg"></a>
    </div>
    <div class="nopadding col-lg-3 col-md-4 col-12">
        <a href="/img/gall/gal7.jpg" data-lightbox="gal1"><img src="/img/gall/gal7.jpg"></a>
    </div>
	<div class="nopadding col-lg-3 col-md-4 col-12">
        <a href="/img/gall/gal8.jpg" data-lightbox="gal1"><img src="/img/gall/gal8.jpg"></a>
    </div>
</div>
</div>

</section>



<section id="shop" class="pt-80 pb-60">
<div class="container">
<h2 class="titl"><span><?php echo_data("text_field_1558854045036", "КОМПЛЕКТ"); ?></span><?php echo_data("text_field_1558854045035", " ПОСТАВКИ"); ?></h2>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12 text-center">
<img src="/img/kompl1.jpg">
<h3><?php echo_data("text_field_1558854045037", "Ifans Pro"); ?></h3>
</div>

<div class="col-lg-3 col-md-3 col-sm-12 text-center">
<img src="/img/kompl2.jpg">
<h3><?php echo_data("text_field_1558854045038", "Зарядный чехол"); ?></h3>
</div>

<div class="col-lg-3 col-md-3 col-sm-12 text-center">
<img src="/img/kompl4.jpg">
<h3><?php echo_data("text_field_1558854045039", "Сменные амбушюры"); ?></h3>
</div>

<div class="col-lg-3 col-md-3 col-sm-12 text-center">
<img src="/img/k3.png">
<h3><?php echo_data("text_field_1558854045039", "Кабель Lightning/USB"); ?></h3>
</div>
</div>
</div>
</section>

<section id="free-button">
<a class="zak-btn" data-th="Кнопка обратного звонка" href="#" onclick="showPopup(event);"><?php echo_data("text_field_1558854045040", "Заказать сейчас"); ?></a>
</section>


<section id="tech" class="ptb-60 bg-gray dark-after">
<div class="container">

<div class="row">
<div class="col-lg-6 col-md-12 text-center">
<img src="/img/tech.png">
</div>
<div class="col-lg-6 col-md-12">
<h2 class="titl col-w text-left"><?php echo_data("text_field_1558854045041", "Характеристики "); ?><span><?php echo_data("text_field_1558854045042", "Ifans Pro"); ?></span></h2>
<p><span><?php echo_data("text_field_1558854045044", "1"); ?></span><?php echo_data("text_field_1558854045043", "Размеры: 30,9 мм х 21,8 мм х 24,0 мм (каждый)"); ?></p>
<p><span><?php echo_data("text_field_1558854045046", "2"); ?></span><?php echo_data("text_field_1558854045045", "Вес наушников: 6,4 г (каждый)"); ?></p>
<p><span><?php echo_data("text_field_1558854045048", "3"); ?></span><?php echo_data("text_field_1558854045047", "Размеры зарядного футляра: 45,2 мм х 60,6 мм х 21,7 мм"); ?></p>
<p><span><?php echo_data("text_field_1558854045050", "4"); ?></span><?php echo_data("text_field_1558854045049", "Вес зарядного футляра: 45,6 г"); ?></p>
<p><span><?php echo_data("text_field_1558854045052", "5"); ?></span><?php echo_data("text_field_1558854045051", "Время прослушивания музыки 4 часа"); ?></p>
<p><span><?php echo_data("text_field_1558854045054", "6"); ?></span><?php echo_data("text_field_1558854045053", "Работают с iОS и Аndrоid"); ?></p>
<p><span><?php echo_data("text_field_1558854045056", "7"); ?></span><?php echo_data("text_field_1558854045055", "Bluetooth 5.0"); ?></p>
</div>
</div>
</div>
</section>

<section id="free-button">
<a class="zak-btn" data-th="Кнопка обратного звонка" href="#" onclick="showPopup(event);"><?php echo_data("text_field_1558854045057", "Заказать сейчас"); ?></a>
</section>

<section id="tabs" class="ptb-60">
<div class="container">
<h2 class="titl"><?php echo_data("text_field_1558854045058", "ПРОСТАЯ ЗАРЯДКА И "); ?><span><?php echo_data("text_field_1558854045059", "ДОЛГАЯ РАБОТА"); ?></span></h2>
<div class="row">

<div class="col-lg-3 col-md-6 col-sm-12 text-center">
<div class="twork"><img src="/img/ch1.jpg"></div>
<h3><?php echo_data("text_field_1558854045060", "Зарядите футляр и возьмите его с собой"); ?></h3>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 text-center">
<div class="twork"><img src="/img/ch2.jpg"></div>
<h3><?php echo_data("text_field_1558854045061", "Используйте для зарядки футляра USB кабель"); ?></h3>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 text-center">
<div class="twork"><img src="/img/ch3.jpg"></div>
<h3><?php echo_data("text_field_1558854045062", "Вставьте в футляр Ifans Pro, когда они разрядятся"); ?></h3>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 text-center">
<div class="twork"><img src="/img/ch4.jpg"></div>
<h3><?php echo_data("text_field_1558854045063", "Полная зарядка футляра обеспечивает 24 часа работы"); ?></h3>
</div>


<p><?php echo_data("text_field_1558854045064", "Наушники понимают, когда вы снимаете их, — в этот момент воспроизведение приостанавливается. Наушники великолепно взаимодействуют с IOS, Android, Windows Вы будете приятно удивлены."); ?></p>
</div>
</div>
</section>

<section id="free-button">
<a class="zak-btn" data-th="Кнопка обратного звонка" href="#" onclick="showPopup(event);"><?php echo_data("text_field_1558854045065", "Заказать сейчас"); ?></a>
</section>

<section id="testim" class="testim ptb-60 dark-after">
<div class="container">
<h2 class="titl col-w"><?php echo_data("text_field_1558854045066", "Отзывы "); ?><span><?php echo_data("text_field_1558854045067", "покупателей"); ?></span></h2>

<div id="testimonail-photo" class="owl-carousel">

<div>
  <div id="content">
    <div id="card">
      <div id="front">
        <div id="top-pic" class="tg-1"></div>
        <div id="avatar"><img src="/img/testim/t1.jpg"></div>
        <div id="info-box">
          <div class="info">
             <h2><?php echo_data("text_field_1573137536110", "Мария"); ?></h2>
            <p><?php echo_data("text_field_1573137536111", "В целом покупкой более чем довольна. Отличная вещь! Цена полностью оправдана. Попользовавшись некоторое время, понимаешь, насколько приятная и удобная штука."); ?></p>
          </div>
        </div>
      </div>
    </div>
 </div>
</div>

<div>
  <div id="content">
    <div id="card">
      <div id="front">
        <div id="top-pic" class="tg-2"></div>
        <div id="avatar"><img src="/img/testim/t2.jpg"></div>
        <div id="info-box">
          <div class="info">
             <h2><?php echo_data("text_field_1573137536112", "Игорь"); ?></h2>
            <p><?php echo_data("text_field_1573137536113", "Чрезвычайно удобные, приятные. Очень удобна функция выключения звука, когда вынимаешь один наушник. В принципе аккумулятор достаточно долго держит, вместе с чехлом отлично. Страха потерять нет."); ?></p>
          </div>
        </div>
      </div>
    </div>
 </div>
</div>

<div>
  <div id="content">
    <div id="card">
      <div id="front">
        <div id="top-pic" class="tg-3"></div>
        <div id="avatar"><img src="/img/testim/t3.jpg"></div>
        <div id="info-box">
          <div class="info">
            <h2><?php echo_data("text_field_1573137536114", "Дмитрий"); ?></h2>
            <p><?php echo_data("text_field_1573137536115", "Простота подключения. Широкий диапазон частот. Скорость включения. Отсутствие провода на шее. Авто-пауза. Хорошая связь; даже в людных местах, даже в заднем кармане. Скорость зарядки. Запас заряда."); ?></p>
          </div>
        </div>
      </div>
    </div>
 </div>
</div>

<div>
  <div id="content">
    <div id="card">
      <div id="front">
        <div id="top-pic" class="tg-4"></div>
        <div id="avatar"><img src="/img/testim/t4.jpg"></div>
        <div id="info-box">
          <div class="info">
            <h2><?php echo_data("text_field_1573137536114", "Марина"); ?></h2>
            <p><?php echo_data("text_field_1573137536115", "Здравствуйте! Отличные наушники для моего айфона, звучат классно, очень понравились)) эмоций море, благодарю)"); ?></p>
          </div>
        </div>
      </div>
    </div>
 </div>
</div>

<div>
  <div id="content">
    <div id="card">
      <div id="front">
        <div id="top-pic" class="tg-5"></div>
        <div id="avatar"><img src="/img/testim/t5.jpg"></div>
        <div id="info-box">
          <div class="info">
            <h2><?php echo_data("text_field_1573137536114", "Елена"); ?></h2>
            <p><?php echo_data("text_field_1573137536115", "Здравствуйте, получила заказ, в жизни намно лучше, чем на фотке)) Очень довольна, хочу мужу еще заказать. Будет отличный подарок))"); ?></p>
          </div>
        </div>
      </div>
    </div>
 </div>
</div>

  </div>
<!--
	<div class="wrap">
		<span class="arrow right fa fa-chevron-right" id="right-arrow"></span> <span class="arrow left fa fa-chevron-left" id="left-arrow"></span>
		<ul class="dots" id="testim-dots">
			<li class="dot active"></li>
			<li class="dot"></li>
			<li class="dot"></li>
			<li class="dot"></li>
			<li class="dot"></li>
		</ul>
		<div class="cont" id="testim-content">
			<div class="active">
				<div class="img"><img alt="" src="/img/tes1.jpg"></div>
				<h2><?php echo_data("text_field_1558854045068", "Екатерина"); ?></h2>
				<p><?php echo_data("text_field_1558854045069", "В целом покупкой более чем довольна. Отличная вещь, тем более за такую цену, и попользовавшись некоторое время, понимаешь, насколько приятная и удобная штука."); ?></p>
			</div>
			<div>
				<div class="img"><img alt="" src="/img/tes2.jpg"></div>
				<h2><?php echo_data("text_field_1558854045070", "Сергей"); ?></h2>
				<p><?php echo_data("text_field_1558854045071", "Чрезвычайно удобные, приятные. Очень удобна функция выключения звука, когда вынимаешь один наушник. В принципе аккумулятор достаточно долго держит, вместе с чехлом отлично. Страха потерять нет."); ?></p>
			</div>
			<div>
				<div class="img"><img alt="" src="/img/tes3.jpg"></div>
				<h2><?php echo_data("text_field_1558854045072", "Евгений"); ?></h2>
				<p><?php echo_data("text_field_1558854045073", "Простота подключения. Широкий диапазон частот. Скорость включения. Отсутствие провода на шее. Авто-пауза. Хорошая связь; даже в людных местах, даже в заднем кармане. Скорость зарядки. Запас заряда."); ?></p>
			</div>
			<div>
				<div class="img"><img alt="" src="/img/tes4.jpg"></div>
				<h2><?php echo_data("text_field_1558854045074", "Ольга"); ?></h2>
				<p><?php echo_data("text_field_1558854045075", "Здравствуйте, получила заказ, в жизни намно лучше, чем на фотке)) Очень довольна, хотела бы мужу еще заказать, можно? Будет отличный подарок))"); ?></p>
			</div>
			<div>
				<div class="img"><img alt="" src="/img/tes5.jpg"></div>
				<h2><?php echo_data("text_field_1558854045076", "Светлана"); ?></h2>
				<p><?php echo_data("text_field_1558854045077", "Здравствуйте! Отличные наушники для такой цены, звучат классно, очень понравились)) эмоций море, благодарю)"); ?></p>
			</div>
		</div>
	</div> -->
</div>	
</section>

<svg id="curve_1" data-name="Curve 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1416.99 174.01" class="homepage__features__wave">
 <path d="M0 120 Q360 60 720 120 T 1440 120 V240 H0 Z"></path>
</svg>

<section id="work" class="pb-60">
<div class="container">
<h2 class="titl"><?php echo_data("text_field_1558854045078", "Как сделать "); ?><span><?php echo_data("text_field_1558854045079", "заказ?"); ?></span></h2>
<div class="row">

<div class="offset-1 col-lg-10 col-md-12">
<div class="row">

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="work-item">
<img src="/img/work1.jpg">
<h3 class="w-icon1"><?php echo_data("text_field_1558854045080", "Заявка"); ?></h3>
<p><?php echo_data("text_field_1558854045081", "Оставьте заявку на нашем сайте, заполнив форму заказа"); ?></p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="work-item">
<img src="/img/work2.jpg">
<h3 class="w-icon2"><?php echo_data("text_field_1558854045082", "Отправка"); ?></h3>
<p><?php echo_data("text_field_1558854045083", "Оператор уточнит у вас детали и мы отправим ваш заказ"); ?></p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="work-item">
<img src="/img/work3.jpg">
<h3 class="w-icon3"><?php echo_data("text_field_1558854045084", "Получение"); ?></h3>
<p><?php echo_data("text_field_1558854045085", "Через 1-2 дней вы получите товар и оплатите его при получении"); ?></p>
</div>
</div>

</div>
</div>
</div>
</div>
</section>


<?php if (data('checkbox5') == '1'): ?>
<section id="google-map">
<div id="map"></div>
<div class="inner-map">
<h2><?php echo_data("text_field_1558854045086", "Контактная информация"); ?></h2>
<p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo_data("text_field_1558854045087", " г. Москва, ул. Набережная, д. 6"); ?></p>
<p><i class="fa fa-phone" aria-hidden="true"></i><?php echo_data("text_field_1558854045088", " +7 (000) 000 00 00"); ?></p>
<p><i class="fa fa-phone" aria-hidden="true"></i><?php echo_data("text_field_1558854045089", " +7 (000) 000 00 00"); ?></p>
<p><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo_data("text_field_1558854045090", " mail@site.ru"); ?></p>
</div>
</section>
<?php endif; ?>


<!--
<section class="magnet-line">
    <div class="container">
        <h2><?php echo_data("text_field_1558854045091", "закажите сейчас "); ?><span><?php echo_data("text_field_1558854045092", "со скидкой 35%"); ?></span></h2>
    </div>
</section> -->


<section id="foot-banner" class="ptb-30 dark-after">
<div class="container">
<div class="row">

<div class="offset-6 col-lg-6 col-md-12">
<div class="only-mob">
<img src="/img/tech.png">
</div>
<h2 class="big"><span><?php echo_data("text_field_1558854045094", "Ifans Pro"); ?></span><br><?php echo_data("text_field_1558854045093", "НАУШНИКИ СО СКИДКОЙ 35%"); ?></h2>
<div class="clearfix"></div>
<h3 class="text-center"><?php echo_data("text_field_1558854045095", "Ifans Pro – Самая лучшая версия на сегодняшний день"); ?></h3>
<h3 class="text-center col-w"><?php echo_data("text_field_1558854045096", "призванные открыть новые грани комфорта и качества звука"); ?></h3>
<div class="clearfix"></div>
<hr>

<div class="row">
<div class="col-md-6 w50">
<p class="old-cen"><span><?php echo_data("text_field_1558854045097", "Обычная цена"); ?></span><b><?php echo_data("text_field_1558854045098", "2200 грн."); ?></b></p>
</div>
<div class="col-md-6 w50">
<p class="new-cen"><span><?php echo_data("text_field_1558854045100", "Цена со кидкой"); ?></span><?php echo_data("text_field_1558854045099", "1499 грн."); ?></p>
</div>
</div>
<form action="callback/mail.php">
		<input type="text" name="Имя" placeholder="Ваше имя..." required="">
		<input class="phone_mask" type="tel" name="Телефон" placeholder="<?php echo_data_static('country', '+38(999)999-99-99'); ?>" required="">
		<button><?php echo_data("text_field_1558854045101", "Заказать сейчас"); ?></button>
</form>
</div>
</div>
</div>
</section>

<section id="footer" class="ptb-20 text-center">
    <div class="container">
       <p><?php echo_data("text_field_1558854045102", " 2019 © Беспроводные наушники Ifans Pro со скидкой 35%!"); ?></p>
	   <a class="desinger" href="https://shop.just1page.ru/" target="_blank" title="Купить готовый лендинг"><img src="/img/logo-j.png"></a>
	   <?php if (data('checkbox4') == '1'): ?>
       <p class="textmin"><a href="/private.html" target="_blank"><?php echo_data("text_field_1558854045104", "Пользовательское соглашение"); ?></a><?php echo_data("text_field_1558854045103", " | "); ?><a href="/policy.html" target="_blank"><?php echo_data("text_field_1558854045105", "Политика конфиденциальности"); ?></a></p>
	   <?php endif; ?>
    </div>
</section>

<?php if (data('checkbox3') == '1'): ?>
<a href="#" class="scrollup"><?php echo_data("text_field_1558854045106", "Наверх"); ?></a>
<?php endif; ?>

<?php if (data('checkbox1') == '1'): ?>
<div class="exitblock">
<div class="flex-inner">
    <div class="fon"></div>   
	<div class="closeblock"></div>	
    <div class="modaltext">    
        <h3><?php echo_data("text_field_1558854045107", "ВАМ ПОНРАВИЛОСЬ ЭТО ПРЕДЛОЖЕНИЕ?"); ?></h3>
		<p><?php echo_data("text_field_1558854045108", "Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!"); ?></p>

		<form action="callback/mail.php">
		<input type="text" name="Имя" placeholder="Ваше имя..." required>
		<input class="phone_mask" type="tel" name="Телефон" placeholder="<?php echo_data_static('country', '+38(999)999-99-99'); ?>" required>
		<button><?php echo_data("text_field_1558854045109", "Перезвоните мне!"); ?></button>
	    </form>
		<p class="aft-but"><?php echo_data("text_field_1558854045110", "Оператор перезвонит Вам через 5-10 минут"); ?></p>

    </div>
</div>
</div>
<?php endif; ?>

<?php if (data('checkbox') == '1'): ?>
<script type="text/javascript">
(function () {
var options = {
whatsapp: "<?php echo_data_static("chat_whatsapp"); ?>", // WhatsApp number
telegram: "<?php echo_data_static("chat_telegram"); ?>", // Telegram bot username
vkontakte: "<?php echo_data_static("chat_vk"); ?>", // VKontakte page name
company_logo_url:"https://shop.just1page.ru/wp-content/uploads/2019/05/chat.png",
// URL of company logo (png, jpg, gif)
greeting_message: "Здравствуйте, чем мы можем Вам помочь? Просто отправьте нам сообщение и мы свяжемся с Вами!",
// Text of greeting message
call_to_action: "Напишите нам!", // Call to action
button_color: "#fa5e6d", // Color of button
position: "right", // Position may be 'right' or 'left'
order: "facebook,whatsapp,viber,snapchat,line,telegram,vkontakte,sms,call,email", // Order of buttons
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<?php endif; ?>

<div id="calform" class="callback">
		<div class="form">
		<form action="callback/mail.php">
		<a class="cme-cls" ></a>
		<div class="h6"><h2><b><?php echo_data("text_field_1558854045112", "ОСТАВИТЬ"); ?></b><?php echo_data("text_field_1558854045111", " ЗАЯВКУ"); ?></h2><span><?php echo_data("text_field_1558854045113", "Спасибо! Наши менеджеры свяжутся с Вами в ближайшее время!"); ?></span></div>
		<input type="hidden" name="project_name" value="">
		<input type="hidden" name="admin_email" value="">
		<input type="hidden" name="form_subject" value="">
		<input type="text" name="Имя" placeholder="Ваше имя..." required><br>
		<input class="phone_mask" type="tel" name="Телефон" placeholder="<?php echo_data_static('country', '+38(999)999-99-99'); ?>" required><br>
		<button><?php echo_data("text_field_1558854045114", "Отправить заявку"); ?></button>
	    </form>
		</div>
</div>	

</body>

<script type="text/javascript" src="/js/jquery-latest.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/main-scripts.js"></script>
<script src="/js/timer.js"></script>
<script type="text/javascript" src="/callback/js/callback.js"></script>
<script src="js/yvedd.js"></script>
<script src="/js/lightbox.js"></script>

<!-- /Yandex.Metrika counter -->	
	<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter<?php echo_data("ya_metrika_id"); ?> = new Ya.Metrika2({
                    id:<?php echo_data("ya_metrika_id"); ?>,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/<?php echo_data("ya_metrika_id"); ?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<?php if (data('checkbox2') == '1'): ?>
      <div class="yvedw">
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi" height="50" width="50">
            <div class="yvedvt">
               <div class="yvedt">Светлана Кручинина, г.Львов, сделала заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Антон Повелевский, г.Хмельницк, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Варвара Смирнова, г.Киев, сделала заказ на сумму 2998грн, кол-во 2 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Равиль Тахимов, г.Стрий, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Антон Данданов, г.Дубно, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Егор Беляев, г.Луцк, сделал заказ на сумму 1449грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Юлия Андреева, г.Житомир, сделала заказ на сумму 2998грн, кол-во 2 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Владимир Чистяков, г.Тернополь, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Богдан Аверин, г.Мукачево, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Игорь Лесницкий, г.Ивано Франковск, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi" height="50" width="50">
            <div class="yvedvt">
               <div class="yvedt">Ренат Ильдусов, г.Ужгород, сделала заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Александр Романов, г.Одесса, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Анна Ткач, г.Ровно, сделала заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Евгений Милославский, г.Львов, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Сергей Планцов, г.Винница, сделал заказ на сумму 2998грн, кол-во 2 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Александр Тушин, г.Полтава, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Гузель Степанова, г.Сумы, сделала заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Макс Рублёв, г.Бахмут, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Артем Корнев, г.Кременець, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
         <div style="display: none;" class="yved yvedf1">
            <img src="img/cart3.png" alt="" class="yvedi">
            <div class="yvedvt">
               <div class="yvedt">Эдуард Гринько, г.Тернополь, сделал заказ на сумму 1499грн, кол-во 1 шт</div>
            </div>
         </div>
      </div>
	  <?php endif; ?>
<script src="/js/jquery.maskedinput.min.js"></script>
<script>
	$(".phone_mask").mask("<?php echo_data_static('country', '+38(999)999-99-99'); ?>");
</script>
<script> 
$('body').click(function(){
    $(".navbar-collapse").collapse('hide');
});
</script>
<?php echo_data("pix_vk"); ?>
</html>