<?php

if( $_SESSION['recovery_token'] == $_GET['recovery_token'] ){

  include "verify/set_new_pass.php";   
  include "components/set_new_pass.php";   
  exit;
} else {
  $_SESSION['message'][] = 'Некорректная ссылка восстановления';
  header('Location: /?recovery');
  exit;    
}