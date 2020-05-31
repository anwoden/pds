<?php
include("config.php");
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: main.php");
    exit;
}

$username = $password = "";
$username_err = $password_err = "";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>PDS.V1</title>
        <link rel="icon" href="/Assets/img/logo/favicon.png">
        <link type="text/css" rel="stylesheet" href="/Assets/css/stylesheet.css">
        <script type="text/javascript" src="Assets/java/script.js">
        //Caso haja necessidade de usar algum script fora do arquivo JS, esse é o espaço.
        </script>
    </head>
    <body>
        
        <div class="loginform">
            <div class="logo"><img src="Assets/img/logo/PDSlogo2.svg" width="400"></div>
            <div class="formarea">
                <form method="POST" action="index.php">
                    <input class="table" type="text" placeholder="USERNAME" name="login" id="login">
                    <input class="table" type="password" placeholder="PASSWORD" name="pword" id="pword">
                    <div class="btns">
                        <input class="OK" type="submit" value="LOGIN" id="entrar" name="entrar">
                        <input type="button" class="REG" value="REGISTER" onclick="window.location.href = '/register.php'">
                    </div>
                </form>
            </div>
            <div class="disclaimer">
                <a>P.D.S. é um projeto independente</a>
            </div>
        </div>
    </body>
</html>