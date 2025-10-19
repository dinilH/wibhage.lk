

<div class="app-main__outer">
    <div id="refreshData">
    <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-monitor icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Admin Dashboard
                            <div class="page-title-subheading">Dashboard for wibhage.lk administrators
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        
                        <div class="d-inline-block dropdown">
                            
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span>
                                                examinees
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span>
                                                subscriptions
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span>
                                                feedbacks
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span>
                                                examinee login analytics
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                 </div>
            </div>            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Courses</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selCourse['totCourse']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Exams</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selExam['totExam']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Examinees</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
								<span><?php echo $totalCourse = $selExamne['totExmne']; ?></span>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/*Designed and developed by Dinil Hansara as a project for YCS*/
				/*contact me:- dinilhansara@gmail.com*/-->
            </div>
    
    </div>
