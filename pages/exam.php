<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>

 <?php 
    $examId = $_GET['id'];
    $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$examId' ")->fetch(PDO::FETCH_ASSOC);
    $selExamTimeLimit = $selExam['ex_time_limit'];
    $exDisplayLimit = $selExam['ex_questlimit_display'];
 ?>
<style>

div.sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
  top: 0;
  //background-color: yellow;
  padding: 50px;
  font-size: 20px;
}
</style>

<div class="app-main__outer">
<div class="app-main__inner">
    <div class="col-md-12">
         <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>
                            <button class="mb-2 mr-2 btn-transition btn btn-primary"><h1><?php echo $selExam['ex_title']; ?></h1></button>
                            <div class="page-title-subheading">
                             <h3> <?php echo $selExam['ex_description']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions mr-5" style="font-size: 20px;">
					<div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">WIBHAGE.LK</div>
                                                                <div class="widget-subheading">Online examinations</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-success"><?php echo $selExam['ex_time_limit'];?> minutes</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper">
                                                            <div class="progress-bar-xs progress">
															<div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            
                        
                    </div>
                 </div>
            </div>  
    </div>

	
	<?php
		if($selExam['ex_Camera_Tracking'] == 1){
		include("pages/meeting.php");
		}
	?>
	<form name="cd" style=" position: -webkit-sticky; position: sticky; top: 0; z-index:1000;">
		<center>
                          <input type="hidden" name="" id="timeExamLimit" value="<?php echo $selExamTimeLimit; ?>" disabled>
						<div class="sticky"><button class="mb-2 mr-2 btn btn-info" id="TimeCalc">
                          <label>Remaining Time : </label>
                          <input style="border:none;background-color: transparent;color:white;font-size: 25px;" name="disp" type="text" class="clock" id="txt" value="00:00" size="5" readonly>
						  </button></div>					  </center>
                      </form> 

    <div class="col-md-12 p-0 mb-4">
	<button class="mb-2 mr-2 btn-transition btn btn-success"><h1>Questions</h1></button>
        <form method="post" id="submitAnswerFrm">
            <input type="hidden" name="exam_id" id="exam_id" value="<?php echo $examId; ?>">
            <input type="hidden" name="examAction" id="examAction" >
        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
        <?php 
            $selQuest = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' ORDER BY rand() LIMIT $exDisplayLimit ");
            if($selQuest->rowCount() > 0)
            {
                $i = 1;
                while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                      <?php $questId = $selQuestRow['eqt_id']; ?>
                    <tr>
                        <td>
                            <p><b><?php echo $i++ ; ?> .) <?php echo $selQuestRow['exam_question']; ?></b></p>
                            <div class="col-md-4 float-left">
							
                              <div class="form-group pl-4 ">
							  <label>
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch1']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                                <span><?php echo $selQuestRow['exam_ch1']; ?></span>
                              </label>
                              </div>  

                              <div class="form-group pl-4">
							  <label>
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch2']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                                <span><?php echo $selQuestRow['exam_ch2']; ?></span>
                               </label>
                              </div>   
                            
                             <div class="form-group pl-4">
							 <label>
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch3']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                                <span><?php echo $selQuestRow['exam_ch3']; ?></span>
                             </label>
                              </div>  

                              <div class="form-group pl-4">
							  <label>
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch4']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >                             
                                 <span><?php echo $selQuestRow['exam_ch4']; ?></span>
                               </label>
                              </div>  
                            </div>                         
                        </td>
                    </tr>					
                <?php }
                ?>
                       <tr>
                             <td style="padding: 20px;">
                                 <button type="button" class="btn btn-xlg btn-warning p-3 pl-4 pr-4" id="resetExamFrm">Reset</button>
                                 <input name="submit" type="submit" value="Submit" class="btn btn-xlg btn-primary p-3 pl-4 pr-4 float-right" id="submitAnswerFrmBtn">
                             </td>
                         </tr>

                <?php
            }
            else
            { ?>
                <b>No question at this moment</b>
            <?php }
         ?>   
              </table>	
        </form>
    </div>
</div>
 <!--css for 4 options-->
<style>
*, *:after, *:before {
	 box-sizing: border-box;
}
 /*code ussanna epa mahaththayo 
 mahansi wela code kare masa ganak*/
 label {
	 display: flex;
	 cursor: pointer;
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
	 background-color: #d6d6e5;
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
 
</style>