<?php

  $oib = $_POST['oib'];
  $pass = $_POST['pass'];

  if(($oib === '1') && ($pass === '1')){
    header( 'Location: admin.php');
  } else {
    header( 'Location:  admin_login.php');
  }
?>
