<?php
   session_start();
   require_once 'C:/wamp64/www/Booking1/vendor/connect.php';

   $avatar= $_POST["avatar"];
   $housName = $_POST["housName"];
   $housePrice = $_POST["housePrice"];
   
   $check_hous = mysqli_query($connect, "SELECT * FROM `hous` WHERE `avatar` = {'$avatar'} AND `housName` = {'$housName'} AND `housePrice` = {'housePrice'}");
   if (mysqli_num_rows($check_hous) > 0) {

       $hous = mysqli_fetch_assoc($check_hous);
       
       $_SESSION['hous'] = [
           "id" => $hous['id'],
           "avatar" => $hous['avatar'],
           "housName" => $hous['housName'],
           "housePrice" => $hous['housePrice']
       ];
       header( 'Location: ../profile.php');
       
   } else {

       $_SESSION['message'] = 'Неверный логин или пароль';
       header( 'Location: ../index.php');

   }
?>
