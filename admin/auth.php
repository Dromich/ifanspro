<?php
  include "data.php";
  if(!isset($_COOKIE['token']) || $_COOKIE['token'] != md5($password.'just1page.ru')) {
    header("Location: ".$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/admin/login.html');
    exit;
  }
?>