<?php 
session_start();
 include("../conn.php");


extract($_POST);

$selExamineeFullname = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_fullname='$fullname' ");
$selExamineeEmail = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_email='$email' ");


if($course == "0")
{
	$res = array("res" => "noCourse");
}
else if($selExamineeFullname->rowCount() > 0)
{
	$res = array("res" => "fullnameExist", "msg" => $fullname);
}
else if($selExamineeEmail->rowCount() > 0)
{
	$res = array("res" => "emailExist", "msg" => $email);
}
else
{
	$insData = $conn->query("INSERT INTO examinee_tbl(exmne_fullname,exmne_course,exmne_email,exmne_password) VALUES('$fullname','$course','$email','$password')  ");
	if($insData)
	{
		$selAcc = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_email='$email'");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


if($selAcc->rowCount() > 0)
{
  $_SESSION['examineeSession'] = array(
  	 'exmne_id' => $selAccRow['exmne_id'],
  	 'examineenakalogin' => true
  );
  $res = array("res" => "success");

}
	}
	else
	{
		$res = array("res" => "failed");
	}
}


echo json_encode($res);
 ?>