<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Geschützter Bereich</title>
</head>
<body>


<div class="box3">
<form class="form" action="includes/logout.inc.php" method="post">
<button class="button" type="submit" name="logout-submit">Logout</button>
</form>
</div>



<div class="background">
            <div class="text3">
                <h1>Herzlich Wilkommen!</h1>
                <p>Du bist jetzt im geschützten Bereich.</p>
            </div>
</div>

</body>
</html>