<?php 
if(isset($_GET['ID'])){
    //echo "Habe die GET-Variable erhalten";
    //Hier müsste man noch der FILTER SANITIZE einsetzen
    $id = $_GET['ID'];

}
else{
    echo "Habe die GET-Variable nicht erhalten";
}

require('includes/dbh.inc.php');

// Update record
if(isset($_POST['submit'])){

  $title = $_POST['titleGallery'];
  $desc = $_POST['descGallery'];
  $id = $_POST['ID'];

 $sql = "UPDATE gallery SET";
$sql .= " titleGallery='".$title."',";
$sql .= " descGallery='".$desc."',";
$sql .= " WHERE idGallery=".$id;
//echo $sql;
$result = $conn->query($sql);



}
else{
    $sql = "SELECT * FROM gallery WHERE ID=".$id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $row["idGallery"];
           $title =  $row["titleGallery"];
           $desc = $row["descGallery"];


        }
    }
        else {
            echo " Kann diesen Datensatz nicht nicht finden.";
        }

}
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
                            <a class="nav-link js-scroll-trigger" href="geheim.php">Discover</a>
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
            <div class="col-xl gallery d-flex align-items-center justify-content-center flex-column" style="height: 80vh;">

               <img src="./img/toto.png" class="img-fluid header-image" alt="Responsive image" style="width: 300px;"> 

                <div class="text3">
                    <h1>Bearbeite dein Profil!</h1>
                    <p>Und finde neue Freunde.</p>
                </div>
                
              
               <div class="gallery-upload d-flex align-items-center justify-content-center flex-column">
                        <form action="update.php" method="post" enctype="multipart/form-data" style="width: 400px; border: solid 1px black; background-color: #6F7A72" class="p-3 m-4">
                            <div class="form-group">
                            <input type="text" class="form-control m-1" name="filename" placeholder="File name...">
                            <input type="text" class="form-control m-1" name="titleGallery" value="<?=$title?>" placeholder="Your name...">
                            <textarea class="form-control m-1" rows="3" id="descGallery" name="descGallery" placeholder="Bio description.."><?=$desc?></textarea>
                            <input type="file" name="file" class="form-control-file m-1 text-white">
                            <input type="hidden" name="ID" value="<?=$id?>">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        </div>
                  
                      

<script>
	// Replace the <textarea> with a CKEditor
	// instance, using default configuration.
  CKEDITOR.replace( 'descGallery' );
</script>

  </section>

<?php
require "footer.php"
?>
