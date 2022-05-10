<?php
   class Connexion{

     function cnxbase(){
      $pdo= new pdo ("mysql:host=127.0.0.1;dbname=miracle","root","");
            
      return $pdo;
     }
     
     
   

   }