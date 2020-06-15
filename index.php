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

    <!-- Bereich Header-->
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
                <img src="img/logo-name.png" class="img-fluid" alt="Name logo of Silaryon" > 
        </div>
    </header>
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
   <!-- Bereich SECOND-PAGE GIRL/BOY-->
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
    <!-- Bereich Image Slider-->
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
    <!-- Bereich THIRD-PAGE KONTAKFORMULAR-->
    <section id="third-page">
        <div class="row position-relative">
            <div class="col-xl-8 contact-left ">
                <img src="./img/header-1.jpg" class="img-fluid header-image" alt="Responsive image">
            </div>
            <div class="col-lg-4 contact-right d-flex align-items-center justify-content-center flex-column">
                <div>
                    <h1>Kontaktformular</h1>
                    <p>Hast du eine Frage? Dann schreib uns.</p>
                </div>
                <div class="contact-form">
                        <form>
                            <fieldset class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label text-white">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Herr
                                    </label>
                                </div>

                                <div class="form-check">
                                <label class="form-check-label text-white">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Frau
                                    </label>
                                </div>

                                <label for="vorname" ></label>
                                <input type="vorname" id="vorname" class="form-control" name="vorname" placeholder="Vorname" value="">

                                <label for="nachname"></label>
                                <input type="nachname" id="nachname" class="form-control" name="nachname" placeholder="Nachname" value="">



                                    <label for="exampleInputEmail1"></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">


                                    <label for="exampleSelect1"></label>
                                    <select class="form-control" id="exampleSelect1">
                                      <option>Betreff</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>

                                    <label for="exampleTextarea" class="text-white">Deine Nachricht</label>
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                             <br>
                                    <div class="form-check">
                                      <label class="form-check-label text-white">
                                        <input class="form-check-input" type="checkbox" value="" checked="">
                                        Newsletter
                                      </label>

                                      <br>
                                      <br>

                                <fieldset>
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                </fieldset>

                              </fieldset>
                              </form>
                    <!-- <form action="">
                        <br>
                        <input type="radio"  name="anrede" id="herr" value="m" checked="">Herr
                        <input type="radio"   name="anrede" id="frau" value="f" checked="">Frau
                        <br>
                        <label for="vorname" >Vorname</label>
                        <input type="vorname" id="vorname" class="form-control" name="vorname" placeholder="Vorname" value="">
                        <br>
                        <label for="nachname" >Nachname</label>
                        <input type="nachname" id="nachname" class="form-control" name="nachname" placeholder="Nachname" value="">
                        <br>
                        <label for="subject">Betreff</label>
                        <input type="text" id="inputBetreff" class="form-control" name="subject"  placeholder="Betreff" value="">
                        <br>
                        <label for="inputEmail">Email</label>
                        <input type="email" id="inputEmail" class="form-control" name="email"  placeholder="Email addresse" >
                        <br>
                        <br>
                        <select class="laender" class="form-control" name="laender" require>
                            <option selected="">Bitte Land wählen</option>
                            <option value="1">Schweiz</option>
                            <option value="2">Frankreich</option>
                            <option value="3">Deutschland</option>
                            <option value="4">Italien</option> 
                        </select>
                        <br>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="yes" name="checkbox[]"> Ich möchte Newsletter erhalten.
                                <br>
                                <input type="checkbox" value="no" name="checkbox[]"> Ich möchte keine Newsletter erhalten.
                            </label>
                        </div>
                        <br>
                        <button class="button" type="submit" name="go">Anmelden</button>
                    </form> -->
                </div>
            </div>
        </div>
    </section>
            
  <!-- Footer -->
    <footer class="py-3 bg-dark mx-auto">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; PHP Projekt von Rhottana Truy 2019</p>
        </div>
    </footer>


    <script src="code.js"></script>
    <script src="js/scrolling-nav.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>