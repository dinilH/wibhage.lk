<?php 
$exmneId = $_SESSION['examineeSession']['exmne_id'];

// Select Data of examinee
$selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
$exmneCourse =  $selExmneeData['exmne_course'];


        
// Select and course login 
$selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id='$exmneCourse' ORDER BY ex_id DESC ");


//
/*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.com*/
 ?>