<?php
    
         session_start();
         unset($_SESSION[“products”]);
         header("location:index.php");
         exit();
    
    ?>