
<!--------------------------------------------- BEREICH LOGIN ----------------------------------------------->

<?php
session_start();
?>  


<div class="image-title fixed-top p-3">
    <img src="img/logofinal.png" class="img-fluid" style="height:180px;" alt="Rhoti Van Logo">
</div>

<?php
require "./includes/header.inc.php"
?>

<section id="login">
        <div class="row position-relative">
            <div class="col-xl-8 contact-left ">
                <img src="./img/smallgirl.jpg" class="img-fluid header-image" alt="Responsive image">
            </div>
            <div class="col-lg-4 contact-right d-flex align-items-center justify-content-center flex-column">
            
            <div class="text2">
                <h1>Login</h1>
                <p>Noch kein Account? <a href="signup.php">Signup</a></p>
            </div>

 <!--------------------------------------------- PHP - Meldung beim Einlogen ----------------------------------------------->      
        <?php
            if(isset($_SESSION['userId'])){
                echo '<p class="info" > Du hast dich erfolgreich eingeloggt!</p>';
            }
            else{
                echo '<p class="info" >Log dich ein!</p>';
            }
        ?>
<!--------------------------- PHP - ERROR Meldung, wenn etwas nicht korrekt ausgefüllt ist! ------------------------------->
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="error2">Bitte alle Felder ausfüllen!</p>';
                }
                else if($_GET['error'] == "sqlerror"){
                    echo '<p class="error2">Die Angaben sind falsch!</p>';
                }
                else if($_GET['error'] == "wrongpwd"){
                    echo '<p class="error2">Passwort ist falsch!</p>';
                }  
                else if($_GET['error'] == "nouser"){
                    echo '<p class="error2">Username nicht vorhanden!</p>';
                }
            }
        ?>
<!--------------------------------------------------- Login Formular --------------------------------------------------------->    

        <div class="box2">
            <form class="form" action="includes/login.inc.php" method="post">
                <input class="username" type="text" name= "mailuid" placeholder="Username/E-Mail...">
                <input class="password"type="password" name= "pwd" placeholder="Password">
                <button class="button" type="submit" name="login-submit">Login</button>
            </form>
          </div>
 </section>

<?php
require "./includes/footer.inc.php"
?>