

<?php
   $servername = "localhost"; 
   $username = "root";  
   $password = "ukAjbZx4YV6ASdFS";
   $database = "bnb";

   $connect = mysqli_connect($servername, $username, $password, $database);

   $connect = mysqli_connect( 'localhost', 'root', 'ukAjbZx4YV6ASdFS', 'bnb');

   if (!$connect) {
    die('Error connect to Database!');
  }
  
?>