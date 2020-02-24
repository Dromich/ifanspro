<?php
  include "auth.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="ie=edge" http-equiv="x-ua-compatible">
<title>Панель управления</title>
<link href="/admin/css/style.css" rel="stylesheet">
<link href="/admin/img/fav.png" rel="shortcut icon" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script>
function showBlock(id) {
  var elements = document.querySelectorAll('.admin-info-block');
  elements.forEach(function(el){
    el.style.display = 'none';
  });
  document.getElementById(id).style.display = 'block';
}
function save(e) {
  e.preventDefault();
  var data = {};
  var elements = document.querySelectorAll('input');
  elements.forEach(function(el){
    data[el.name] = el.value;
  });
  elements = document.querySelectorAll('select');
  elements.forEach(function(el){
    data[el.name] = el.value;
  });
  var iframe = document.getElementsByTagName("iframe")[0];
  var iframeContent = (iframe.contentWindow || iframe.contentDocument);
  fetch('/admin/save.php', {
    method: "POST",
    body: JSON.stringify(Object.assign({},changedData,iframeContent.changedFields(),data)),
    credentials: 'include'
  }).then(function(response) {
    // iframe.src = iframe.src;
    var el = document.getElementById("info");
    el.innerHTML = "Настройки сохранены";
    var timeout = 2000;
    if(response.text == "0") {
      el.innerHTML = '<span style="color: red;">Ошибка.</span> Разрешите запись в папке <b>/admin</b>';
      timeout = 5000; 
    }
    el.style.display = 'block';
    setTimeout(function() {el.style.display = 'none'}, timeout);
  })
}
function closeWindow(e) {
  console.log(e);
  e.target.parentElement.style.display = 'none';
}
document.addEventListener('DOMContentLoaded', function() {
  var elements = document.querySelectorAll('.save-btn');
  elements.forEach(function(el){
    el.onclick = save;
  });
  elements = document.querySelectorAll('.close-button');
  elements.forEach(function(el){
    el.onclick = closeWindow;
  });
  elements = document.querySelectorAll('input');
  elements.forEach(function(el){
    el.oninput = changeText;
  });
  elements = document.querySelectorAll('input[type=checkbox]');
  elements.forEach(function(el){
    el.onchange = changeText;
  });
  elements = document.querySelectorAll('select');
  elements.forEach(function(el){
    el.onchange = changeText;
  });
});
function changeText(e) {
  var iframe = document.getElementById("site");
  var iframeContent = (iframe.contentWindow || iframe.contentDocument);
  if(e.target.type === "checkbox") e.target.value = e.target.checked ? '1' : '0'; 
  iframeContent.changeText(e.target.name, e.target.value);
  textChanged(e.target.name, e.target.value);
}
var changedData = {};
function textChanged(key, value) {
  changedData[key] = value;
  var elements = document.querySelectorAll('input[name='+key+']');
  elements.forEach(function(el) {
    if(el.value != value) el.value = value;
  })
}
</script>
</head>
<body>
<div class="admin-bar">
<div class="admin-inside">

<div class="admin-logo">
<img src="/admin/img/logo.png">
</div>

<div class="admin-menu">
<ul>
<li><p onclick="showBlock(1)" >Настройки</p></li>
<li><p onclick="showBlock(3)" >SEO</p></li>
<li><p onclick="showBlock(4)" >Карта Google</p></li>
<li><p onclick="showBlock(5)" >Чат-мессенджер</p></li>
<li class="admin-sub-li">Информация <span>▼</span>
<ul class="admin-sub-menu">
<li><a href="https://shop.just1page.ru/adminka-dlya-odnostranichnikov/" target="_blank">Как использовать админ-бар?</a></li>
<li><a href="https://shop.just1page.ru/shop/" target="_blank">Готовые лендинги с админкой</a></li>
<li><a href="https://just1page.ru/uslugi/" target="_blank">Услуги веб-студии</a></li>
<li><a href="https://shop.just1page.ru/uslugi/" target="_blank">Лендинг услуги</a></li>
<li><a href="mailto:info@just1page.ru" target="_blank">Вопросы и предложения</a></li>
</ul>
</li>
</ul>
</div>

<a class="admin-exit" href="/admin/login.php">Выход</a>
<a class="admin-exit save-btn" target="iframe_a" href="#">Сохранить изменения</a>

</div>
</div>

<div class="admin-flex">

<div class="admin-inner">
<div class="admin-info-block" id="1" style="display: none;">
<div class="close-button">×</div> 
<h2><i class="fas fa-cogs"></i> Настройки</h2>
<div class="admin-stroke"><span>Новый пароль:</span><input name="password" type="password" placeholder="Введите новый пароль" value="<?php echo_data_input("password"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>E-mail для приема заявок:</span><input name="email" type="text" placeholder="Введите e-mail" value="<?php echo_data_input("email"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>ID видео YouTube:</span><input name="video" type="text" placeholder="Введите e-mail" value="<?php echo_data_input("video"); ?>" autocomplete="off"></div>
<div class="admin-stroke">
<span>Телефонный код страны</span>
<select name="country">
<option value="+7(999)999-99-99" selected>Россия +7</option>
<option value="+38(099)999-99-99">Украина +38</option>
<option value="+37(599)999-99-99">Беларусь +37</option>
<option value="+7(999)999-99-99">Казахстан +7</option>
</select>
</div>
<div class="admin-stroke">
<span>Показывать форму захвата при выходе</span> <input name="checkbox1" type='checkbox' value='<?php echo_data('checkbox1'); ?>' id='ch_1' <?php if(data('checkbox1') == '1') echo 'checked'; ?>/>
</div>
<div class="admin-stroke">
<span>Показывать всплывающие уведомления о покупках</span> <input name="checkbox2" type='checkbox' value='<?php echo_data('checkbox2'); ?>' id='ch_2' <?php if(data('checkbox2') == '1') echo 'checked'; ?>/>
</div>
<div class="admin-stroke">
<span>Показывать кнопку вверх</span> <input name="checkbox3" type='checkbox' value='<?php echo_data('checkbox3'); ?>' id='ch_3' <?php if(data('checkbox3') == '1') echo 'checked'; ?>/>
</div>
<div class="admin-stroke">
<span>Показывать ссылки в футере</span><input name="checkbox4" type='checkbox' value='<?php echo_data('checkbox4'); ?>' id='ch_4' <?php if(data('checkbox4') == '1') echo 'checked'; ?>/>
</div>
<a class="admin-exit save-btn" target="iframe_a" href="#">Сохранить изменения</a>
</div>
</div>
</div>




<div class="admin-flex">
<div class="admin-inner">
<div class="admin-info-block" id="3" style="display: none;">
<div class="close-button">×</div> 
<h2><i class="fab fa-sith"></i> SEO</h2>
<div class="admin-stroke"><span>Заголовок сайта:</span><input name="title" type="text" placeholder="Введите заголовок сайта" value="<?php echo_data_input("title"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>Описание сайта:</span><input name="description" type="text" placeholder="Введите описание сайта" value="<?php echo_data_input("description"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>Ключевые слова:</span><input name="keywords" type="text" placeholder="Ключевые слова, через запятую" value="<?php echo_data_input("keywords"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>Код онлайн-консультанта:</span><input name="pix_vk" type="text" placeholder="Вставьте код онлайн-консультанта" value="<?php echo_data_input("pix_vk"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>ID Яндекс Метрики:</span><input name="ya_metrika_id" type="text" placeholder="ID Яндекс Метрики" value="<?php echo_data_input("ya_metrika_id"); ?>" autocomplete="off"></div>
<a class="admin-exit save-btn" target="iframe_a" href="#">Сохранить изменения</a>
</div>
</div>
</div>

<div class="admin-flex">
<div class="admin-inner">
<div class="admin-info-block" id="4" style="display: none;">
<div class="close-button">×</div> 
<h2><i class="fab fa-sith"></i> Настройка карты на сайте</h2>
<div class="admin-stroke">
<span>Показывать блок с Google картой</span><input name="checkbox5" type='checkbox' value='<?php echo_data('checkbox5'); ?>' id='ch_5' <?php if(data('checkbox5') == '1') echo 'checked'; ?>/>
</div>
<div class="admin-stroke"><span>Название объекта на карте:</span><input name="map_name" type="text" placeholder="Введите название объекта на карте" value="<?php echo_data_input("map_name"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>Координаты #1:</span><input name="s_map" type="text" placeholder="Вставьте координаты #1" value="<?php echo_data_input("s_map"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>Координаты #2:</span><input name="d_map" type="text" placeholder="Вставьте координаты #2" value="<?php echo_data_input("d_map"); ?>" autocomplete="off"></div>
<a class="admin-exit save-btn" target="iframe_a" href="#">Сохранить изменения</a> 
</div>
</div>
</div>

<div class="admin-flex">
<div class="admin-inner">
<div class="admin-info-block" id="5" style="display: none;">
<div class="close-button">×</div> 
<h2><i class="fab fa-sith"></i> Настройка чат-мессенджера</h2>

<div class="admin-stroke">
<span>Включить чат-мессенджер</span><input name="checkbox" type='checkbox' value='<?php echo_data('checkbox'); ?>' id='ch_0' <?php if(data('checkbox') == '1') echo 'checked'; ?>/>
</div>

<div class="admin-stroke"><span>Группа ВКонтакте:</span><input name="chat_vk" type="text" placeholder="https://vk.com/just1page" value="<?php echo_data_input("chat_vk"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>Телеграм:</span><input name="chat_telegram" type="text" placeholder="just1page" value="<?php echo_data_input("chat_telegram"); ?>" autocomplete="off"></div>
<div class="admin-stroke"><span>WhatsApp:</span><input name="chat_whatsapp" type="text" placeholder="+70000000000" value="<?php echo_data_input("chat_whatsapp"); ?>" autocomplete="off"></div>

<a class="admin-exit save-btn" target="iframe_a" href="#">Сохранить изменения</a> 
</div>
</div>
</div>



<div class="admin-info-block" id="info" style="display: none;top: auto;left: auto;bottom: 3%;right: 3%;">  
</div>

<div class="admin-iframe">
<iframe id="site" name="iframe_a" src="/index.php?admin=j1p">
</div>

</body>
</html>