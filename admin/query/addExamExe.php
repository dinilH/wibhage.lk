<?php 
 include("../../conn.php");

 extract($_POST);

 $selCourse = $conn->query("SELECT * FROM exam_tbl WHERE ex_title='$examTitle' ");

 if($courseSelected == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else if($timeLimit == "0")
 {
 	$res = array("res" => "noSelectedTime");
 }
 else if($examQuestDipLimit == "" && $examQuestDipLimit == null)
 {
 	$res = array("res" => "noDisplayLimit");
 }
 else if($selCourse->rowCount() > 0)
 {
	$res = array("res" => "exist", "examTitle" => $examTitle);
 }
 else
 {
    
	$insExam = $conn->query("INSERT INTO exam_tbl(cou_id,ex_title,ex_start,ex_time_limit,ex_questlimit_display,ex_description,ex_creator_id,ex_Camera_Tracking) VALUES('$courseSelected','$examTitle','$ex_start','$timeLimit','$examQuestDipLimit','$examDesc','admin', '$cam_tracking') ");
	if($insExam)
	{
		$res = array("res" => "success", "examTitle" => $examTitle);
	}
	else
	{
		$res = array("res" => "failed", "examTitle" => $examTitle);
	}


 }

/*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.com*/


 echo json_encode($res);
 ?>