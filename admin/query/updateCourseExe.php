<?php
 include("../../conn.php");
 extract($_POST);


$newCourseName = strtoupper($newCourseName);
$updCourse = $conn->query("UPDATE course_tbl SET cou_name='$newCourseName' WHERE cou_id='$course_id' ");
if($updCourse)
{
	   $res = array("res" => "success", "newCourseName" => $newCourseName);
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);
/*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.com*/ 
?>