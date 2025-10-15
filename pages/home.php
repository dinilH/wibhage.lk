
<body>
<div class="app-main__outer">
    <div id="refreshData"><!--data will load into this div-->
						<!--carousel-photo slideshow එක-->
					<div class="container-fluid">
						<div class="row">
						   <div class="col-md-1"></div>
						   <div class="col-md-10">
                                <div class="main-card mb-3 card">
                                    <!--<div class="card-body">
                                        <h5 class="card-title">Carousel with Captions</h5>-->
                                        <div id="carouselExampleControls2" class="carousel slide carousel-fade" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="assets/images/carousal1.jpg" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Intro</h5>
                                                        <!--<p>sub topic if wanted</p>-->
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/carousel2.jpg" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>100% free</h5>
                                                        <!--<p></p>-->
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/carousal3.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Special features</h5>
                                                        <p>Timer,Camera Tracking,Live screen for examinee</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    <!--</div>-->
                                </div>
                            </div> 
							<div class="col-md-1"></div>
						</div>
					</div>
					<hr>
					<div class="container-fluid">
					<div class="row">
						
						   <div class="col-md-12">
						   <button class="active list-group-item-action list-group-item">
							<h1 class="text-light text-center" style="font-family:poppins;">My exams section</h1>
							</button>
						   </div>
						
					</div><br><br><br>
					<div class="container-fluid">
						<div class="row">
						<div class="col-md-1"></div>
						   <div class="col-md-5">
							<a href="#" data-toggle="modal" data-target="#modalForExam" >
                        
								<div class="mb-3 card card-body myhover">
								<center><i style="color:green;" class="pe-5x pe-7s-plus"></i>
									<h1 style="font-family:poppins;">Create a new exam</h1>
								   </center>
								</div>
							</a>
							</div>
						   <div class="col-md-5">
						   	<a href="home.php?page=manage-exam">
							<div class="mb-3 card card-body myhover">
							<center><i style="color:blue;" class="pe-5x pe-7s-study"></i>
								<i class="metismenu-icon">
								</i>
								<div data-toggle="tooltip" title="Add question,Edit exam,Update questions,Delete questions" data-placement="bottom">
								<h1 style="font-family:poppins;" >Manage exams</h1> 
								</div>
                            </div>
							</a>
							</div>
						</div>
						</div>
											<?php
						$ex_creator_id = $_SESSION['examineeSession']['exmne_id'];
						$selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_creator_id='$ex_creator_id' ORDER BY ex_id DESC ");
						if($selExam->rowCount() > 0)
                                { ?>
								<div class="row">
						<div class="col-md-1"></div>
						   <div class="col-md-10">
							<div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Exams created by me</h5>
                                        <div class="scroll-area-md">
                                            <div class="scrollbar-container ps--active-y">
											<div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4">Exam Title</th>
                                <th class="text-left ">Grade</th>
                                <th class="text-left ">Description</th>
                                <th class="text-left ">Start</th>  
                                <th class="text-center" width="20%">Action</th>
                            </tr>
                            </thead>
											<tbody>
												<?php while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamRow['ex_title']; ?></td>
                                            <td>
                                                <?php 
                                                    $courseId =  $selExamRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td><?php echo $selExamRow['ex_description']; ?></td>
                                            <td><?php echo $selExamRow['ex_start']; ?></td>
                                            <td class="text-center">
												<?php 
												$ex_id=$selExamRow['ex_id']; 
												$sel_Attempt = $conn->query("SELECT * FROM exam_attempt WHERE exam_id='$ex_id' ");
												?>
                                             <a href="responses.php?id=<?php echo $ex_id; ?>" type="button" class="btn btn-primary btn-md">Responses
												<span class="badge badge-pill badge-light"><?php echo $sel_Attempt->rowCount(); ?></span>
											 </a>                                           
											 </td>
                                        </tr>

                                    <?php } ?>
									</tbody></table></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
						   </div>
						<div class="col-md-1"></div>
					</div>
                                <?php } 
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
                                        <h3 class="p-3">You haven't created any exams yet!</h3>
                                      </td>
                                    </tr>
								<?php } ?>
						
					</div><hr>
					<style>
						 .myhover:hover
						 { 
							box-shadow: 5px 10px 8px #c4c4c4;
							background-color:#4bcef2;
							color:white;
						 }
						 a
						 {
							 text-decoration:none !important;
						 }
						 /*code ussanna epa cauruth 
						 mahansi wela code care masa ganak*/
					 </style>
					 <?php
						include("pages/calendar.php");
					 ?>		
					 
					
    </div>
