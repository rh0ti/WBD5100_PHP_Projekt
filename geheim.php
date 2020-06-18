<?php
session_start();
?>

<?php
$_SESSION['username'] = "Ad";
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

                <?php
                if(isset($_SESSION['username'])){

                
                 echo '<div class="gallery-upload">
                        <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data" style="width: 400px; border: solid 1px black; position: relative; right: -30%" class="p-3 m-3">
                            <div class="form-group">
                            <input type="text" class="form-control" name="filename" placeholder="File name...">
                            <input type="text" class="form-control" name="filetitle" placeholder="Your name...">
                            <textarea class="form-control" rows="3" name="filedesc" placeholder="Bio description.."></textarea>
                            <input type="file" name="file" class="form-control-file">
                            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                        </div>';
                    }
                        ?>
        </section>

            
</section>

<?php
require "footer.php"
?>



            