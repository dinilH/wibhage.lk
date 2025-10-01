<?php if(isset($_SESSION['examineeSession']['examineenakalogin']) == true)
{//only for logged users
  include("conn.php");
  include("query/selectData.php");
}
 ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Wibhage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
     
    <!--CSS -->
    <link href="./main.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
	<link href="css/facebox.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon.png">

	

</head>
<style>
@import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");
	.app-header {
  font-family: 'Poppins', sans-serif;
  font-weight: 400;
  background-color: #fff;
  font-size: 14px;
  -ms-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
<body id="body">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <a href="home.php"><div class="logo-src"></div></a>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                
				<div class="app-header-left">                    
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="home.php " class="nav-link">
                                <i class="nav-link-icon fa fa-home"> </i>
                                Home
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="about.php" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                About Us
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="contact-us.php" class="nav-link">
                                <i class="nav-link-icon fa fa-phone"></i>
                                Contact Us
                            </a>
                        </li>
                    </ul>        </div>
					<?php if(isset($_SESSION['examineeSession']['examineenakalogin']) == true)
					{//only show for logged users
						?>
				<div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/user.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
										<a href="home.php?page=profile" >
                                            <button type="button" tabindex="0" class="dropdown-item">											 
											My Account
											</button> 
										</a>											
                                            <div tabindex="-1" class="dropdown-divider"></div>
											<a href="query/logoutExe.php">
                                            <button type="button" tabindex="0" class="dropdown-item mb-2 mr-2 btn-transition btn btn-outline-danger" >Logout</button>
											</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php 
                                                echo strtoupper($selExmneeData['exmne_fullname']);
                                             ?>
                                    </div>
                                    <div class="widget-subheading">
                                        User
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">                                    
                                </div>
                            </div>
                        </div>
                    </div>   
					</div>
					<?php } ?> 
					
					<?php if(!isset($_SESSION['examineeSession']['examineenakalogin']) == true)
					{//only show for non logged users?>
					<div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
								<a href="#login">
								<button class="mb-2 mr-2 btn btn-success">
									login
								</button>
								</a><a href="#register">
								<button class="mb-2 mr-2 btn btn-info">
									Register
								</button>
								</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
            </div>
        </div>  
		<!--/*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.com   */-->