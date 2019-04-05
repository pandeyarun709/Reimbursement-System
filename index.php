<?php
    
      if (isset($_POST['login'])) {
          
          header('Location: ./views/login.php'); 
       
      }
      if (isset($_POST['signin'])) {
          
          header('Location: ./views/register.php'); 
       
      }
?>
