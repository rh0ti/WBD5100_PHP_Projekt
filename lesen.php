<?php
require("includes/dbh.inc.php");

if (isset($_POST['deleter'])){
    $sql1 = "DELETE FROM gallery";
    $sql1 .= " WHERE idGallery=".$_POST['deleter'];
    $result1 = $conn->query($sql1);
}


$sql2 = "SELECT * FROM gallery";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    $code = '<form method="post" action="lesen.php" onsubmit="return confirm(\'Möchtest du den Datensatz wirklich löschen!\');">';
    $code .= "<table\n>";
    $code .= "<tr\n>";
    $code .= "<th>ID:</th>\n";
    $code .= "<th>Title:</th>\n";
    $code .= "<th>Kurzbeschrieb:</th>\n";
    $code .= "<th> </th>\n";
    $code .= "<th> </th>\n";
    $code .= "</tr>\n";



    while($row = $result2->fetch_assoc()) {
        $code .= "<tr>\n";
    	$code .= "<td> " . $row["idGallery"]. "</td>\n";
        $code .= "<td> " . $row["titleGallery"]. "</td>\n";
        $code .= "<td>" . strip_tags($row["descGallery"]). "</td>\n";
        $code .= "<td>";
        $code .= '<button type="submit" name="deleter" value="'. $row["idGallery"].'">';
        $code .= 'Löschen';
        $code .= '</button>';
        $code .= "</td>\n";
        $code .= "<td><a href=\"update.php?ID=".$row["idGallery"]."\">Ändern</a></td>\n";
        $code .= "</tr>\n";
    }
    $code .= "</table>\n";
    $code .= "</form\n>";
}

else {
    $code .= "No results";
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

    <style>

        form{
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

    td{
        border: black solid 1px;
        padding: 20px;
    }
    </style>

</head>
<body>
<section id="lesen">
        <div class="row position-relative">
            <div class="col-xl gallery d-flex align-items-center justify-content-center flex-column" style="height: 80vh;">

               <img src="./img/toto.png" class="img-fluid header-image" alt="Responsive image" style="width: 300px;">


<?php
echo $code;
?>

</section>

<?php
include("footer.php");
?> 


</body>
</html>
