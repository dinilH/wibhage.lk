<?php include("conn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wibhage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="login-ui/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">
</head>
<body>
	
	<div class="limiter" role="tabpanel">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Register
					</span>
				</div>

				<form class="refreshFrm" id="addExamineeFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New member</h5>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>User name</label>
            <input type="" name="fullname" id="fullname" class="form-control" placeholder="Input a username" autocomplete="off" required="">
          </div>                    
          <div class="form-group">
            <label>Grade</label>
            <select class="form-control" name="course" id="course">
              <option value="0">Select grade</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php }
               ?>
            </select>
          </div>          
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Input Password" autocomplete="off" required="">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Register Now</button>
      </div>
    </div>
   </form>
			</div>
		</div>
	</div>
	
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/vendor/bootstrap/js/popper.js"></script>
	<script src="login-ui/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-ui/vendor/select2/select2.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login-ui/vendor/countdowntime/countdowntime.js"></script>
	<!--<script src="login-ui/js/main.js"></script>-->

</body>
</html>