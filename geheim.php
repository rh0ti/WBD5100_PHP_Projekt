<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/geheim.css">
    <title>PHP Projekt</title>
</head>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light  fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#">Discover</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#">Dein Profil</a>
                        </li>
                        <div class="box3">
                            <form class="form" action="includes/logout.inc.php" method="post">
                                <button class="button" type="submit" name="logout-submit">Logout</button>
                            </form>
                        </div>
                    </ul>
                </div>
        </div>
    </nav>

<section id="gallery">
        <div class="row position-relative">
            <div class="col-xl gallery d-flex align-items-center justify-content-center flex-column" style="height: 130vh;">

                <img src="./img/toto.png" class="img-fluid header-image" alt="Responsive image" style="width: 300px;">

                <div class="text3">
                    <h1>Herzlich Wilkommen!</h1>
                    <p>Du bist jetzt im geschützten Bereich.</p>
                </div>

                <section class="gallery-links">
                <h2>Gallery</h2>
                <div class="wrapper row d-flex align-items-center justify-content-center">

                    <div class="card gallery-container" style="width: 18rem;">
                        <img src="./img/face1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Profil</a>
                        </div>
                    </div>

                    <div class="card gallery-container" style="width: 18rem;">
                        <img src="./img/face2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Profil</a>
                        </div>
                    </div>

                    <div class="card gallery-container" style="width: 18rem;">
                        <img src="./img/face3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Profil</a>
                        </div>
                    </div>

                    <div class="card gallery-container" style="width: 18rem;">
                        <img src="./img/face4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Profil</a>
                        </div>
                    </div>

                    <!-- <div class="card gallery-container"style="width: 18rem;">
                        <a href="#">
                            <div></div>
                            <h3>This is a title</h3>
                            <p>This is a paragraph</p>
                        </a>
                    </div> -->
                </div>
                <div class="gallery-upload">
                        <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data" style="width: 400px; border: solid 1px black; position: relative; right: -30%" class="p-3 m-3">
                            <!-- <input type="text" name="filename" placeholder="File name">
                            <input type="text" name="filetitle" placeholder="Image title">
                            <input type="text" name="filedesc" placeholder="Image description">
                            <input type="file" name="file"> -->

                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="File name...">
                            <input type="text" class="form-control" placeholder="Your name...">
                            <textarea class="form-control" rows="3" placeholder="Bio description.."></textarea>
                            <input type="file" class="form-control-file">
                            <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    
                </section>

            </div>
</section>

<?php
require "footer.php"
?>



            