<?php
 include("../../conn.php");
 extract($_POST);


$updCourse = $conn->query("UPDATE examinee_tbl SET exmne_fullname='$exFullname', exmne_course='$exCourse',exmne_email='$exEmail', exmne_password='$exPass' WHERE exmne_id='$exmne_id' ");
if($updCourse)
{
	   $res = array("res" => "success", "exFullname" => $exFullname);
}
else
{
	   $res = array("res" => "failed");
}


/*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.com*/
 echo json_encode($res);	
?>