<?php
include("config.php");
session_start();

$username = '';
$email ='';
$errors = array(); 

if(isset($_POST['reg'])){
    $username = mysqli_real_escape_string($db, $_POST['reguser']);
    $email = mysqli_real_escape_string($db, $_POST['regmail']);
    $password_1 = mysqli_real_escape_string($db, $_POST['regpass']);
    $password_2 = mysqli_real_escape_string($db, $_POST['regpass2']);

    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
    }
    
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
          echo '<script language="javascript">';
          echo 'alert("Usuário existente")';
          echo '</script>';
        }
    
        if ($user['email'] === $email) {
          array_push($errors, "email already exists");
          echo '<script language="javascript">';
          echo 'alert("Email já cadastrado")';
          echo '</script>';
        }
    }

    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
  
        $query = "INSERT INTO users (username, pword, email) 
                  VALUES('$username', '$password', '$email')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        header('location: index.php');
    }
  }

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