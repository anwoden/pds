<?php
include("config.php");
session_start();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>PDS.V1 | PROFILE</title>
        <link rel="icon" href="/Assets/img/logo/favicon.png">
        <link type="text/css" rel="stylesheet" href="/Assets/css/main.css">
        <script type="text/javascript" src="/Assets/java/clock.js">
        //Caso haja necessidade de usar algum script fora do arquivo JS, esse é o espaço.
        
        </script>
        <script type="text/javascript" src="/Assets/java/script.js"></script>
    </head>
    <body onload="currentTime()">
        <div class="container">
            <div class="upperbar"></div>
            <div class="menutop">
                <div class="menuleft">
                    <img src="/Assets/img/logo/favicon.png" width="40">
                </div>
                <div class="menuright">
                    <div class="left">
                        <nav>
                            <ul>
                                <li><a href="/main.php">HOME</a></li>
                                <li><a href="newdb.php">NEW D.B.</a></li>
                                <li><a href="/mfiles.php">MY FILES</a></li>
                                <li><a href="prof.php">PROFILE</a></li>
                                <li><a href="/messages.php">MESSAGES</a></li>
                                <li><a href="logout.php">LOGOUT</a></li>                              </a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="right">
                        <div class="hello">
                            <a>Hello, <?php 
                            if(isset($_SESSION['username'])){
                                echo $_SESSION['username'];
                            } else {
                                echo "user";
                            }
                            
                            ?></a> <!--Implementar PHP com nome do usuário após o login-->
                        </div>
                        <div id="clock"></div>
                    </div>
                </div>
            </div>
            <div class="frame">
                <div class="fleft">
                    <div class="content">
                    <div class="server" id="servdisplay">
                           <a class="s-status" id="sstatus">█ </a><a class="sinfo">SERVER STATUS:</a><a id="sanswer">
                           <?php
                            $conectado = @ fsockopen('localhost', 80, $numeroDoErro, $stringDoErro, 10); // Este último é o timeout, em segundos
                            if ($conectado) {
                                print ' ONLINE';
                            } else {
                                print ' OFFLINE';
                            } 
                            ?>
                           </a><br>
                           <a class="u-status" id="ustatus">█ </a> <a class="sinfo">USER CONNECTION:</a><a id="uanswer">
                           <?php
                            $conectado = @ fsockopen('localhost', 80, $numeroDoErro, $stringDoErro, 10); // Este último é o timeout, em segundos
                            if ($conectado) {
                                print ' ONLINE';
                            } else {
                                print ' OFFLINE';
                            } 
                            ?>
                           </a><br>
                           <!--<a class="p-status">█ </a> <a class="sinfo">PING:</a><a id="panswer"></a><a>
                           
                           </a>
                           <br>-->
                           <input class="infobtn" type="submit" value="CHECK" onclick="pingTest()">
                        </div> 
                    </div>
                    <div class="contentp">
                        <div class="userpic">
                            <img src="/Assets/img/users/userpic.svg" width="150px">
                        </div>
                        <div class="avataropt">
                            <a>CHANGE AVATAR</a><img src="/Assets/img/users/editicon.svg" width="15px">
                        </div>
                    </div>
                    <div class="contentp">                
                        <div class="userinfo">
                            <!--Cada informação em um campo de formulário de LABEL
                            username;
                            email;
                            (essas informações serão puxadas do banco de dados MYSql de usuário)
                            mudar senha;
                            -->
                        </div>                
                    </div>                    
                </div>                
                <div class="fright">
                     <div class="pdata">
                        <!--Aqui vão aparecer em blocos diferentes, como módulos, as informações
                        do usuário:
                        Quantidade de bancos criados;
                        qt de informação em cada banco;
                        opção de download dos bancos de dados (com janela para selecionar);
                        etc.
                        -->
                     </div>
                </div>
            </div>
        </div>
    </body>
</html>