<?php 
session_start();

if(!isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:index.php");


 ?>
<?php include("conn.php"); ?>
<!--HEADER -->
<?php include("includes/header.php"); ?>      

<div class="app-main">
<!-- sidebar-->
<?php include("includes/sidebar.php"); ?>

<!-- To get exam status-->



<!-- When specific page is clicked -->
<?php 
   @$page = $_GET['page'];


   if($page != '')
   {
     if($page == "exam")
     {
       include("pages/exam.php");
     }
     else if($page == "result")
     {
       include("pages/result.php");
     }
     else if($page == "myscores")
     {
       include("pages/myscores.php");
     }
	 else if($page == "manage-exam")
     {
       include("pages/manage-exam.php");
     }
	 else if($page == "profile")
     {
       include("pages/profile.php");
     }
     
   }
   else
   {
     include("pages/home.php"); 
   }
/*Designed and developed by Dinil Hansara as a project for YCS*/

 ?> 


<!--FOOTER -->
<?php include("includes/footer.php"); ?>

<?php include("includes/modals.php"); ?>


