<?php
   session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <img class = "logo" src="/img/travel.png" alt="Логотип">
        <div class="right_header">
            <ul class="mnu_top">
                <li><a href="#">Places</a></li>
                <li><a href="#">My Ads</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
            <div class="btns">
                <!-- <a href="#" class="btn_light open-popup1">Sign In</a> -->
                <a href="#" class="btn_pink open-popup2">Personal Account</a>
            </div>
        </div>
    </header>
    <section class= "catalog">
        <div action="../vendor/prof.php" class="wrapper">
            <section id="learn" class="learn">
                <div  class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" name = "avatar" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" name="housName">Card title</h5>
                        <p class="card-text" name="housePrice">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">To Book</a>
                    </div>
                </div>
            </section>
            <section id="learn" class="learn">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $_SESSION['hous']['avatar'] ?>" class="card-img-top" name="avatar" width="100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" name="housName"><?= $_SESSION['hous']['housName'] ?></h5>
                        <p class="card-text" name="housePrice"><?= $_SESSION['hous']['housePrice'] ?></p>
                        <a href="#" class="btn btn-primary">To Book</a>
                    </div>
                </div>
            </section>
            <section id="learn" class="learn">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" name="avatar" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" name="housName">Card title</h5>
                        <p class="card-text" name="housePrice">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">To Book</a>
                    </div>
                </div>
            </section>
            <section id="learn" class="learn">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" name="avatar" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" name="housName">Card title</h5>
                        <p class="card-text" name="housePrice">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">To Book</a>
                    </div>
                </div>
            </section>
            <section id="learn" class="learn">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" name="avatar" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" name="housName">Card title</h5>
                        <p class="card-text" name="housePrice">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">To Book</a>
                    </div>
                </div>
            </section>
            <section id="learn" class="learn">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" name="avatar" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" name="housName">Card title</h5>
                        <p class="card-text" name="housePrice">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">To Book</a>
                    </div>
                </div>
            </section>
            <section id="learn" class="learn">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" name="avatar" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" name="housName">Card title</h5>
                        <p class="card-text" name="housePrice">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">To Book</a>
                    </div>
                </div>
            </section>
            <section id="learn" class="learn">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" name="avatar" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" name="housName">Card title</h5>
                        <p class="card-text" name="housePrice">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">To Book</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
    

</body>
</html>        