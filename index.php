<?php
   session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/main.css">

</head>
<body>
  <header>
    <!-- <a href="/img/travel.png" class="logo"></a> -->
    <img class = "logo" src="/img/travel.png" alt="Логотип">
    <div class="right_header">
        <ul class="mnu_top">
            <li><a href="#">Places</a></li>
            <li><a href="#">My Ads</a></li>
            <li><a href="#">Messages</a></li>
        </ul>
        <div class="btns">
            <a href="#" class="btn_light open-popup1">Sign In</a>
            <a href="#" class="btn_pink open-popup2">Join The Movement</a>
        </div>
    </div>
  </header>
  <div class="popup-bg">
    <div class="popup">
      <img class= "close-popup" src="https://img.icons8.com/ios/24/000000/multiply.png" alt="icon"> 
          <!-- Форма авторизации -->
      <form action="../vendor/signin.php" method="post">
          <label for="">Логин</label>
          <input type="text" name="login" placeholder="Введите свой логин">
          <label for="">Пароль</label>
          <input type="password" name="password" placeholder="Введите свой пароль">
          <label for="">email</label>
          <input type="email" name="email" placeholder="Введите свой Email">
          <button type="submit">Войти</button><br><br>
          <p>
              У вас нет аккаунта? <a href="/index.php">Зарегистрируйтесь</a>
          </p>
          <?php 
            if ($_SESSION['message']) {
              echo  '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }        
              unset ($_SESSION['message']); 
          ?>
      </form> 
    </div>
  </div>
  <div class="popup-gb">
    <div class="popup">
      <img class= "close-popup" src="https://img.icons8.com/ios/24/000000/multiply.png" alt="icon"> 
          <!-- Форма регистрации -->
      <form action="../vendor/reg.php" method="post" enctype="multipart/form-data">
          <label for="">ФИО</label>
          <input type="text" name="full_name" placeholder="Введите своё ФИО">
          <label for="">Логин</label>
          <input type="text" name="login" placeholder="Введите свой логин">
          <label for="">Почта</label>
          <input type="email" name="email" placeholder="Введите адрес своей электронной почты">
          <label for="">Пароль</label>
          <input type="password" name="password" placeholder="Введите свой пароль">
          <label for="">Подтверждение пароля</label>
          <input type="password" name="password_confirm" placeholder="Введите свой пароль">
          <button type="submit">Зарегистрироваться</button><br><br>
          <p>
              У вас уже есть аккаунт? <a href="/index.php">Авторезируйтесь</a>
          </p>
          
          <?php 
          if ($_SESSION['message']) {
              echo  '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
          }        
              unset ($_SESSION['message']); 
          ?>
      
      </form>
    </div>
  </div>
  <div class="block_one">
    <div class = "img"> 
      <h1>Жильё для поездки ищите сразу на SUAIbnb!</h1>
      <img src="img/pngwing.com.png" class="fly" alt="">
    </div>
  </div>
 
  <footer id="foter" class="footer">
  <div class="container">

  </div> 
  </footer>
    
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>