<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "wibhage_lk";
//$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
 ?> <script>alert("Connection failed: Something went wrong on your database or database connection.To run wibhageLK properly, please correct it and refresh page.Plz refer READ ME file sir/madam");</script>
<?php 
echo "<h1 style='color:red'>"."Sir/Madam, there is a Database connection/database error.Please correct it first.Otherwise website will not run.I hope readme file will help you.". "</h1>";
}
/*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.com*/
 ?>