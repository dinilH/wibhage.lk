 <?php 
    $examId = $_GET['id'];
    $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$examId' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="app-main__outer">
<div class="app-main__inner">
    <div id="refreshData">
            
    <div class="col-md-12">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <?php echo $selExam['ex_title']; ?>
                          <div class="page-title-subheading">
                            <?php echo $selExam['ex_description']; ?>
                          </div>

                    </div>
                </div>
            </div>
        </div>  
        <div class="row col-md-12">
        	<h1 class="text-primary">RESULTS</h1>
        </div>
		
		<!--Score and Persentage boxes-->
       <div class="col-md-6 float-left">
        	<div class="col-md-6 float-left">
        	<div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading"><h5>Score</h5></div>
                        <div class="widget-subheading" style="color: transparent;">/</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                            <?php 
                                $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id AND eqt.exam_answer = ea.exans_answer  WHERE ea.axmne_id='$exmneId' AND ea.exam_id='$examId' AND ea.exans_status='new' ");
                            ?>
                            <span>
                                <?php echo $selScore->rowCount(); ?>
                                <?php 
                                    $over  = $selExam['ex_questlimit_display'];
                                 ?>
                            </span> / <?php echo $over; ?>
                        </div>
                    </div>
                </div>
            </div>
        	</div>

            <div class="col-md-6 float-left">
            <div class="card mb-3 widget-content bg-happy-green">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading"><h5>Percentage</h5></div>
                        <div class="widget-subheading" style="color: transparent;">/</div>
                        </div>
                        <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                            <?php 
                                $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id AND eqt.exam_answer = ea.exans_answer  WHERE ea.axmne_id='$exmneId' AND ea.exam_id='$examId' AND ea.exans_status='new' ");
                            ?>
                            <span>
                                <?php 
                                    $score = $selScore->rowCount();
                                    $ans = $score / $over * 100;
                                    echo "~".round($ans);
                                    echo "%";
                                    /*Designed and developed by Dinil Hansara as a project for YCS*/
/*contact me:- dinilhansara@gmail.comcopyrights reserved&copy;*/
                                 ?>
                            </span> 
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
		<!--Answers loop-->
        <div class="row col-md-12 float-left">       	
                	<h5 class="card-title">Your Answers</h5>
        			<table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                    <?php 
                    	$selQuest = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id WHERE eqt.exam_id='$examId' AND ea.axmne_id='$exmneId' AND ea.exans_status='new' ");
                    	$i = 1;
                    	while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                    		<tr>
                    			<td>
								<div class="row">
                    				<div class="col-md-11">
										<b><h3 class="widget-heading"><?php echo $i++; ?> .) <?php echo $selQuestRow['exam_question']; ?></h3></b>
									</div>
									<?php 
                    				if($selQuestRow['exam_answer'] != $selQuestRow['exans_answer'])
                    					{ ?>
										<div class="col-md-1"><div class="mb-2 mr-2 btn btn-secondary badge-pill"><h5>0/1</h5></div></div>
										<?php
										}
										else{
										?>
										<div class="col-md-1"><div class="mb-2 mr-2 btn btn-success badge-pill"><h5>1/1</h5></div></div>
										<?php
										}
										?>
										
								</div>
									<div class="col-md-4 float-left">
							<?php $questId = $selQuestRow['eqt_id'];?>
                              <div class="form-group pl-4 ">
							  <label>
                                <?php 
                    				if($selQuestRow['exam_ch1'] == $selQuestRow['exans_answer'])
									{ 
								?>																
								<input name="answer[<?php echo $questId; ?>][correct]" type="radio" checked>
								<?php
								} 
								?>								
                                <span><?php
								echo $selQuestRow['exam_ch1']; //උත්තරය නිකන් පෙන්නනො
								if($selQuestRow['exam_answer'] == $selQuestRow['exam_ch1']) //උත්තරේ හරි නම් හරි ලකුන
                    			{ ?>
									&nbsp <sup><i class="fa fa-check"></i></sup>
								<?php } else{?>
									&nbsp <sup><i class="fas fa-times"></i></sup> <!--උත්තරේ වැරදි නම් වැරදි ලකුන-->
								<?php } ?></span>
                              </label>
                              </div>  

                              <div class="form-group pl-4">
							  <label>
							  <?php 
                    				if($selQuestRow['exam_ch2'] == $selQuestRow['exans_answer'])
									{ 
								?>	
                                <input name="answer[<?php echo $questId; ?>][correct]" type="radio" checked>
								<?php
								} 
								?>
                                <span><?php echo $selQuestRow['exam_ch2'];
								if($selQuestRow['exam_answer'] == $selQuestRow['exam_ch2']) //උත්තරේ හරි නම් හරි ලකුන
                    			{ ?>
									&nbsp <sup><i class="fa fa-check"></i></sup>
								<?php } else{?>
									&nbsp <sup><i class="fas fa-times"></i></sup> <!--උත්තරේ වැරදි නම් වැරදි ලකුන-->
								<?php } 
								?></span>
                               </label>
                              </div>   
                            
                             <div class="form-group pl-4">
							 <label>
							 <?php 
                    				if($selQuestRow['exam_ch3'] == $selQuestRow['exans_answer'])
									{ 
								?>	
                                <input name="answer[<?php echo $questId; ?>][correct]" type="radio" checked>
								<?php
								} 
								?>
                                <span><?php echo $selQuestRow['exam_ch3'];
								if($selQuestRow['exam_answer'] == $selQuestRow['exam_ch3']) //උත්තරේ හරි නම් හරි ලකුන
                    			{ ?>
									&nbsp <sup><i class="fa fa-check"></i></sup>
								<?php } else{?>
									&nbsp <sup><i class="fas fa-times"></i></sup> <!--උත්තරේ වැරදි නම් වැරදි ලකුන-->
								<?php } 
								?></span>
                             </label>
                              </div>  

                              <div class="form-group pl-4">
							  <label>
							  <?php 
                    				if($selQuestRow['exam_ch4'] == $selQuestRow['exans_answer'])
									{ 
								?>	
                                <input name="answer[<?php echo $questId; ?>][correct]" type="radio" checked>
								<?php
								} 
								?>
                                 <span><?php echo $selQuestRow['exam_ch4'];
								if($selQuestRow['exam_answer'] == $selQuestRow['exam_ch4']) //උත්තරේ හරි නම් හරි ලකුන
                    			{ ?>
									&nbsp <sup><i class="fa fa-check"></i></sup>
								<?php } else{?>
									&nbsp <sup><i class="fas fa-times"></i></sup> <!--උත්තරේ වැරදි නම් වැරදි ලකුන-->
								<?php } 
								 ?></span>
                               </label>
                              </div> 
							<hr>							  
                            </div>   
														
							<div class="row col-md-12">
                    				<label class="pl-4 text-success">
									
                    					
                    					<?php 
                    						if($selQuestRow['exam_answer'] != $selQuestRow['exans_answer'])
                    						{ ?>
                    							Correct answer : <span style="color:gray"><?php echo $selQuestRow['exam_answer']; ?></span>
                    						<?php }
                    						else
                    						{ ?>
                    							<!--<span class="text-success"><?php echo $selQuestRow['exans_answer']; ?></span>-->
                    						<?php }
                    					 ?>
                    				</label>
							</div>
                    			</td>
                    		</tr>
                    	<?php }
                     ?>
	                 </table>
        </div>
    </div>


    </div>
</div>
<style>
*, *:after, *:before {
	 box-sizing: border-box;
}
 
 label {
	 display: flex;
	 cursor: cursor;
	 font-weight: 500;
	 position: relative;
	 overflow: hidden;
	 margin-bottom: 0.375em;
	/* Accessible outline */
	/* Remove comment to use 
	 &:focus-within {
		 outline: .125em solid $primary-color;
	}*/
	 
}
 label input {
	 position: absolute;
	 left: -9999px;
}
 label input:checked + span {
	 background-color: #d6d6e5;
}
 label input:checked + span:before {
	 box-shadow: inset 0 0 0 0.4375em #00005c;
}
 label span {
	 display: flex;
	 align-items: center;
	 padding-top: .5em;
	 padding-bottom: .5em;
	 padding-right: 3em;
	 padding-left: .7em;
	 border-radius: 99em;
	 transition: 0.25s ease;
}
 label span:hover {
	 opacity: 0.8;
}
 label span:before {
	 display: flex;
	 flex-shrink: 0;
	 content: "";
	 background-color: #fff;
	 width: 1.5em;
	 height: 1.5em;
	 border-radius: 50%;
	 margin-right: 0.375em;
	 transition: 0.25s ease;
	 box-shadow: inset 0 0 0 0.125em #969696;
}

i.fa-check
{
	color:green;
}
i.fa-times
{
	color:red;
}
 
</style>