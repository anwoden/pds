<?php 


$user = $_POST['login'];
$pass = md5($_POST['pword']);
$entrar = $_POST['entrar'];
$conn = mysqli_connect("localhost","root", "", "pdsys", "3308");

if(isset($entrar)){
    $verifica = mysqli_query($conn,"SELECT * FROM users WHERE username = '$user' AND pword = '$pass'") or die ("Usuário ou senha incorretos");
    if (mysqli_num_rows($verifica)<=0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.php';</script>";
        die();
    } else {
        setcookie("login", $user);
        $_SESSION['username'] = $user;
        header("location: main.php");
    }
}