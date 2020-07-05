
<!--------------------------------------------- VERBINDUNG ZU DATENBANK----------------------------------------------->

<?php
$servername = "localhost";/* Host name */
$dBUsername = "root"; /* User */
$dBPassword = "root";/* Password */
$dBname = "loginsystem";/* Database name */

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBname );
// Check connection
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}

?>