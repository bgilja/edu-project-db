<?php

  $oib = $_POST['oib'];
  $pass = $_POST['pass'];

  $flag = false;

  if(($oib === '1') && ($pass === '1')){
    $flag = true;
  }


  if ($flag) {
    header( 'Location: admin.php');
  } else {
    header( 'Location:  admin_login.php');
  }
?>