<?php 
session_start();
if(isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:home.php");
/*Designed and developed by Dinil Hansara as a project for YCS*/

 ?>

<?php 

include("landing_page/land_page.php");
 ?>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>