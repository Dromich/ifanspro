<?php
  include 'auth.php';
  $str = "<?php\n";
  $params = json_decode(file_get_contents('php://input'), true);
  foreach ($params as $key => $value) {
    $val = str_replace('"', '\"', $value);
    $str .= "  \$$key = \"$val\";\n";
  }
  $str.= "?>";
  if(file_put_contents('config.php', $str)) {
    if($params['password'] != $password) {
      setcookie('token', md5($_POST['password'].'just1page.ru'), time()+60*60*24*365);
    }
    echo 1;
  }
  else {
    echo 0;
  }
  
?> 