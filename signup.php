<?php
session_start();
?>

<?php
require "header.php"
?>


<main>
    <div class="background">
        <div class="text">
            <h1>Registrierung</h1>
            <p>Hast du bereits einen Account? <a href="index.php">Login</a></p>
        </div>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class="error">Bitte alle Felder ausfüllen!</p>';
                    }
                    else if($_GET['error'] == "invaliduidmail"){
                        echo '<p class="error">Username oder Email ist falsch!</p>';
                    }
                    else if($_GET['error'] == "invaliduid"){
                        echo '<p class="error">Der Username ist falsch!</p>';
                    }  
                    else if($_GET['error'] == "invalidmail"){
                        echo '<p class="error">Die Email ist falsch!</p>';
                    }
                    else if($_GET['error'] == "passwordcheck"){
                        echo '<p class="error">Dein Passwort stimmt nicht überrein!</p>';
                    }             
                    else if($_GET['error'] == "usertaken"){
                        echo '<p class="error">Dieser Username oder Email wird bereits benutzt!</p>';
                    }   
                    else if($_GET["error"] == "success"){
                        echo '<p class="success">Login erfolgreich!</p>';
                    }
                }
            ?>
            <div class="box">
                <form class="form" action="includes/signup.inc.php" method="post">
                    <input class="username" type="text" name="uid" placeholder= "Username">
                    <input class="email" type="text" name="mail" placeholder= "E-Mail">
                    <input class="password" type="password" name="pwd" placeholder= "Password">
                    <input class="password2" type="password" name="pwd-repeat" placeholder= "Repeat password">
                    <button class="button" type="submit" name=signup-submit>Signup</button>
                </form>
            </div>
        </div>
</main>

<?php
require "footer.php"
?>