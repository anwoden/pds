function pingUser(){
   var useron = "<?php print 'ONLINE' ?>";
   var useroff = "<?php print 'OFFLINE ?>";
   var ulight = document.getElementById('ustatus');
   var user = document.getElementById("uanswer");

   user.style.display = "block";

   if (useron){
       ulight.style.color = "#ADFF2F";
   } else if (useroff) {
       ulight.style.color = "#FF4500";
   }

}

function pingServer(){
    var serveron = "<?php print 'ONLINE' ?>";
    var serveroff = "<?php print 'OFFLINE ?>";
    var slight = document.getElementById('sstatus');
    var server = document.getElementById("sanswer");
 
    server.style.display = "block";

    if (serveron){
        slight.style.color = "#ADFF2F";
    } else if (serveroff) {
        slight.style.color = "#FF4500";
    }
}

function pingTest() {
    pingUser();
    pingServer();
}