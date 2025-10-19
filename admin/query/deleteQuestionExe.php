<?php 
 include("../../conn.php");
/*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.com*/

extract($_POST);

$delExam = $conn->query("DELETE  FROM exam_question_tbl WHERE eqt_id='$id'  ");
if($delExam)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}


	echo json_encode($res);
 ?>