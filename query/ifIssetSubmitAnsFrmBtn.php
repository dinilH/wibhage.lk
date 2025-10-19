<?php 

extract($_POST);

if(isset($_POST['submit']))
{
	$res = array("res" => "yesIsset");
}
else
{
	$res = array("res" => "noIsset", "msg" => $exam_id);
}

/*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.com*/
echo json_encode($res);
 ?>