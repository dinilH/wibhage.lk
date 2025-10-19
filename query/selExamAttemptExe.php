<?php 
 session_start();
 include("../conn.php");
$exmneId = $_SESSION['examineeSession']['exmne_id'];
 

extract($_POST);

 $selExamAttmpt = $conn->query("SELECT * FROM exam_attempt WHERE exmne_id='$exmneId' AND exam_id='$thisId' ");
 date_default_timezone_set('Asia/Colombo');
 $date1 = date("Y-m-d H:i:s");

 
 $STH = $conn -> prepare( "select ex_start from exam_tbl where ex_id='$thisId'" );

	$STH -> execute();
	$result = $STH -> fetch();
	$selExamStart= $result ["ex_start"];
 
  //Selecting camera tracking state
$Cam_Query = $conn -> prepare( "select ex_Camera_Tracking from exam_tbl where ex_id='$thisId'" );

	$Cam_Query -> execute();
	$result2 = $Cam_Query -> fetch();
	$CamRow= $result2 ["ex_Camera_Tracking"];
	
if($CamRow == 1)
 {
 	$res2 = "Cam_Tracking";
 }
 else
 {
	 $res2 = "No_Cam_Tracking";
 }
 
 
 
 if($selExamAttmpt->rowCount() > 0)
 {
 	$res = array("res" => "alreadyExam", "msg" => $thisId);
 }
 else if($date1 < $selExamStart)
 {
 	$res = array("res" => "notStarted", "msg" => $selExamStart);
 }
 else
 {
 	$res = array("res" => "takeNow" , "res2" => $res2 );
 }



 /*echo json_encode($res2);*/
 echo json_encode($res);

 ?>