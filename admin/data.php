<?php
  error_reporting(E_ERROR);
  $password = "admin";
  ob_start();
  @include("config.php");
  ob_end_clean();

  function data($val, $default = null) {
    global ${$val};
    return ${$val} ? ${$val} : ($default ? $default : "");
  }

  function echo_data($val, $default = null) {
    $data = data($val, $default);
    if($_GET['admin'] == 'j1p') echo "<span class=\"admin-edit\" data-key=\"$val\" data-changed=\"".intval($data!==$default)."\" contenteditable>$data</span>";
    else echo $data;
  }
  
  function echo_data_static($val, $default = null) {
    echo data($val, $default);
  }
  
  function echo_data_input($val, $default = null) {
    echo htmlentities(data($val, $default));
  }
?>