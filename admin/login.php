<?php
  include 'data.php';
  if($_POST['password'] == $password) {
    setcookie('token', md5($password.'just1page.ru'), time()+60*60*24*365);
    header("Location: ".$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/admin/');
    exit;
  }
  setcookie('token', '', time()+60*60*24*365);
  header("Location: ".$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/admin/login.html');
  exit;
?>