<?php
session_start();
?>

<?php
require "header.php"
?>

<body>
    <header>

    <main>

    </main>





<div class="background">
            <div class="text2">
                <h1>Login</h1>
                <p>Noch kein Account? <a href="signup.php">Signup</a></p>
            </div>
            <div class="box2">
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<p class="info" > Du hast dich erfolgreich eingeloggt!</p>';
                }
                else{
                    echo '<p class="info" >Log dich ein!</p>';
                }
            ?>


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

                <form class="form" action="includes/login.inc.php" method="post">
                    <input class="username" type="text" name= "mailuid" placeholder="Username/E-Mail...">
                    <input class="password"type="password" name= "pwd" placeholder="Password">
                    <button class="button" type="submit" name="login-submit">Login</button>
                </form>
            </div>
            </div> 

    </header>
</body>
</html>


<?php
require "footer.php"
?>