<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title></title>
        <link type="text/css" rel="stylesheet" href="/Assets/css/stylesheet.css">
        <script type="text/javascript" src="Assets/java/script.js">
        //Caso haja necessidade de usar algum script fora do arquivo JS, esse é o espaço.
        </script>
    </head>
    <body>
        <div class="loginform">
            <div class="logo"><img src="Assets/img/logo/PDSlogo2.svg" width="400"></div>
            <div class="formarea">
                <form method="POST" action="register.php">
                    <input class="table" type="text" name="reguser" placeholder="USERNAME" id="reguser"><br>
                    <input class="table" type="password" name="regpass" placeholder="PASSWORD" id="regpass"><br>
                    <input class="table" type="password" name="regpass2" placeholder="CONFIRM PASSWORD" id="regpass2"><br>
                    <input class="table" type="email" name="regmail" placeholder="EMAIL" id="regmail"><br>
                    <div class="btns">
                        <input type="submit" class="OK" name="reg" id="reg" value="REGISTER">
                        <input type="button" class="REG" value="CANCEL" onclick="window.location.href = '/index.php'">
                    </div>
                </form>
            </div>
            <div class="disclaimer">
                <a>REGRAS:</a>
            </div>
            <div class="regra">
                <a>1. É recomendado que a senha tenha no mínimo 8 caracteres e no máximo 32. Sendo um MAIÚSCULO, e um caractere especial (#, !, @).<a>
                <br><br>
                <a>2. Certifique-se de que possui acesso ao email usado para cadastro.</a>
                <br><br>
                <a>3. Ao se cadastrar, está concordando com os </a><a href="#"><u>termos de uso.</u></a>
            </div>
        </div>
    </body>
</html>