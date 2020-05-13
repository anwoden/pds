<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>PDS.V1 | HOME</title>
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
                                <li>LOGOUT</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="right">
                        <div class="hello">
                            <a>Hello, username</a> <!--Implementar PHP com nome do usuário após o login-->
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
                    <div class="content">
                        <div class="resinfo">
                            <a>USERNAME</a><br>
                            <a>EMAIL</a><br>
                            <input class="infobtn" type="submit" value="MORE" onclick="location.href='/prof.php'">
                        </div>
                    </div>
                    <div class="dcontent">
                        <div class="dbases" id="dbaselist">
                            <div class="userdb">
                                <a>USER DATABASES:</a>
                            </div>
                            <!--<ul class="dbaselist">
                                <li><a href="#">D.B.#1</a></li>
                                <li><a href="#">D.B.#2</a></li>
                                <li><a href="#">D.B.#3</a></li>
                                <li><a href="#">D.B.#4</a></li>
                            </ul>-->
                            <div class="addnew">
                                <input class="infobtn" type="submit" value="ADD NEW" onclick="location.href='newdb.php'">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fright">
                    <div class="logo">
                        <img src='/Assets/img/logo/pds-frame.svg' width="200">
                    </div>
                    <div class="about">
                        <a class="titletxt">PERSONAL DATABASE SYSTEM</a>
                        <p>==========================================================================================</p>
                        <a>Personal Database System é um sistema criado para que o 
                            usuário possa catalogar seu banco de dados pessoal no servidor, 
                            como notas, ideias ou projetos, coleções e o que mais você puder 
                            imaginar, com o conteúdo criptografado.
                        </a>
                        <br><br>
                        <a>Esse projeto é um trabalho independente, feito por uma equipe numerosa
                            de um desenvolvedor só em fase de estudo :)
                        </a>
                        <br><br>
                        <a>O código HTML é integrado com funções em PHP que se conectam ao servidor
                            MYSql para gerenciamento de informações enviadas pelo usuário. As informações
                            armazenadas são criptografadas de maneira segura, e não são lidas por nenhum outro
                            usuário ou administrador do sistema.
                        </a>
                        <br><br>
                        <a>Espero que esse projeto seja útil.</a>
                        <br><br>
                        <a>ANDRÉ BRAGA</a>
                            
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>