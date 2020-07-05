
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>PHP Projekt</title>
</head>
<body id="page-top">


<!--------------------------------------------- BEREICH HEADER ----------------------------------------------->

    <section id="header">
    <header class="container-fluid">
        <div class="row">
            <div class="col-xl-4 header-left d-flex flex-column justify-content-center align-items-center">
                <h1 class="p-5">Discover <br> New Friends</h1>
                <p>Have fun and discover new people. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione omnis dignissimos quia consequatur quasi et voluptatibus amet? Tempore, amet! Voluptates optio itaque nobis illo animi porro, reprehenderit dicta quisquam deleniti!</p>
            </div>
            <div class="col-xl-8 header-right">
                <img src="./img/header-1.jpg" class="img-fluid header-image" alt="Responsive image">
            </div>
        </div>
        <div class="image-title fixed-top p-3">
                <img src="img/logofinal.png" class="img-fluid" style="height:180px;" alt="Rhoti Van Logo">
    </header>
<!--------------------------------------------- NAVIGATION ----------------------------------------------->

    <nav class="navbar navbar-expand-lg navbar-light  fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#header">Home</a>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#second-page">Signup</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#third-page">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </section>
  <!--------------------------------------------- Bereich SECOND-PAGE GIRL/BOY ----------------------------------------------->
  
    <section id="second-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col second-page">
                    <div class="row p-5 bd-highlight">
                        <div class="col-5 col-md-5 mx-auto girl-frame">
                            <img src="./img/girl4.png" class="img-fluid girl-image" alt="Responsive image">
                            <div class="text-boy-girl d-flex align-items-center justify-content-center" > 
                                <a class="h1 text-white" href="signup.php">GIRL</a>
                            </div>
                            </div>
                            <div class="col-5 col-md-5 mx-auto boy-frame">
                                <img src="./img/boy2.png" class="img-fluid boy-image" alt="Responsive image">
                            <div class="col text-boy-girl d-flex align-items-center justify-content-center">
                                <a class="h1 text-white" href="signup.php">BOY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--------------------------------------------- Bereich IMAGE SLIDER ----------------------------------------------->
    <section id="image-slider">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col page">
                        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel" >
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner bg-white">
                                <div class="carousel-item active">
                                <img src="./img/totoro.png" class="col-xl-5 col-lg-5 w-80 img-fluid" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark">First slide label</h5>
                                    <p class="text-dark"> Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <img src="./img/totoro.png" class="col-xl-5 col-lg-5 w-80 img-fluid" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark">Second slide label</h5>
                                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <img src="./img/totoro.png" class="col-xl-5 col-lg-5 w-80 img-fluid " alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark">Third slide label</h5>
                                    <p class="text-dark">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

<!--------------------------------------------- INCLUDE KONTAKTFORMULAR ----------------------------------------------->
  <?php
  require "kontaktformular.php"
  ?>
            
<!--------------------------------------------- INCLUDE FOOTER ----------------------------------------------->
  <?php
  require "./includes/footer.inc.php"
  ?>

</body>
</html>