<?php 
session_start();
 include("../../conn.php");
 

extract($_POST);

$selAcc = $conn->query("SELECT * FROM admin_acc WHERE admin_user='$username' AND admin_pass='$pass'  ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


if($selAcc->rowCount() > 0)
{
  $_SESSION['admin'] = array(
  	 'admin_id' => $selAccRow['admin_id'],
  	 'adminnakalogin' => true
  );
  $res = array("res" => "success");

}
else
{
  $res = array("res" => "invalid");
}



/*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.com*/
 echo json_encode($res);
 ?>