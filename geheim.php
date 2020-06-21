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
 <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #6F7A72; height: 90px;" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger"  href="#page-top"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#">Discover</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="profil.php">Dein Profil</a>
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

    <div class="image-title  p-3 d-flex justify-content-center" >
                <img src="img/logofinal.png" class="img-fluid " style="height:180px; position:absolute; top:2%;" alt="Rhoti Van Logo">
    </div>

<section id="gallery">
        <div class="row position-relative">
            <div class="col-xl gallery d-flex align-items-center justify-content-center flex-column" style="height: 90vh;">


                <div class="text3">
                    <h1>Herzlich Wilkommen!</h1>
                    <p>Finde jetzt neue Freunde.</p>
                </div>
                <br>
                <section class="gallery-links">
                <h2>Discover</h2>
                <div class="wrapper row d-flex align-items-center justify-content-center">

                    

                    <?php
                    include_once 'includes/dbh.inc.php';

                    $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        echo "SQL statement failed0!";
                    }else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while($row = mysqli_fetch_assoc($result)){

                            echo '<div class="card gallery-container" style="width: 18rem;">
                            <img src="img/gallery/'.$row["imgFullNameGallery"].'" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">'.$row["titleGallery"].'</h5>
                                <p class="card-text">'.$row["descGallery"].'</p>
                                <a href="#" class="btn btn-primary">Profil</a>
                            </div>
                            </div>';
                        }
                    }

                    ?>

                    
                </div>
        </section>
            
</section>

<?php
require "footer.php"
?>



            