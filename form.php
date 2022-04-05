<?php
   // Para capturar la info que se ingresa en los inputs del form tengo que crear las variables. 
   // variables se crean con la etiqueta $
   
   $nombre = $_POST ['nombre'];
   $mail = $_POST['email'];
   $mensaje = $_POST['textarea'];
   

   // A quien le mando esta info 
   $para = 'alejandro-garcia2011@live.com'
   $asunto = 'Este mail fue enviado desde la web' ;

   // Funcion que envia la info del form
   mail($para,$asuntob,utf8_decode($nombre, $mail, $mensaje));

   
   // Funcion que redirecciona al usario una vez que completo el form
   header('Location:exito.html');


   














?>