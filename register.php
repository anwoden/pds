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
                <input class="table" type="text" placeholder="USERNAME" required><br>
                <input class="table" type="password" placeholder="PASSWORD" required><br>
                <input class="table" type="password" placeholder="CONFIRM PASSWORD" required><br>
                <input class="table" type="email" placeholder="EMAIL" required><br>
                <div class="btns">
                    <button class="OK" type="submit">REGISTER</button>
                    <input type="button" class="REG" value="CANCEL" onclick="window.location.href = '/index.php'">
                </div>
            </div>
            <div class="disclaimer">
                <a>REGRAS:</a>
            </div>
            <div class="regra">
                <a>1. É recomendado que a senha tenha entre 6 a 8 caracteres. Sendo um MAIÚSCULO, e um caractere especial (#, !, @).<a>
                <br><br>
                <a>2. Certifique-se de que possui acesso ao email usado para cadastro.</a>
                <br><br>
                <a>3. Ao se cadastrar, está concordando com os </a><a href="#"><u>termos de uso.</u></a>
            </div>
        </div>
    </body>
</html>