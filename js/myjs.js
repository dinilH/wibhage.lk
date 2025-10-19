	//avaliable exams උඩ click කරාම
$(document).on("click","#startQuiz", function(){
	  var thisId = $(this).data('id');
	  Swal.fire({
      title: 'Are you sure?',
      text: 'Do you want to take this exam now? ඔබගේ විභාගය දැන් ඇරඹීමට අවශ්‍යද?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'start now'
 }).then((result) => {
  if (result.value) {
         $.ajax({
          type : "post",
          url : "query/selExamAttemptExe.php",
          dataType : "json",  
          data : {thisId:thisId},
          cache : false,
          success : function(data){
            if(data.res == "alreadyExam")
            {
              Swal.fire(
                'Already Taken ',
                'you already take this exam/ඔබ මේ විභාගය දැනටමත් අවසන් කර ඇත',
                'error'
              )
            }
			//avaliable exams උඩ click කරල modal එකෙනුත් confirm කරාම

            else if(data.res == "takeNow")
            {
				if(data.res2 == "Cam_Tracking")
				{
					Swal.fire({
				  title: 'Camera tracking',
				  text: 'Camera tracking for this exam has been activated by the examiner.',
				  imageUrl: 'https://media.giphy.com/media/IsKFVXvVxyeN1aXfgj/giphy.gif',
				  imageWidth: 300,
				  imageHeight: 200,
				  imageAlt: 'Face recognition On.Please connect to the internet and press allow on next screen',
				}).then((result)=>/*syntax හරියන්න දැම්මෙ */
				{
					window.location.href="home.php?page=exam&id="+thisId;
					return false;
				});
				}
				else if(data.res2 == "No_Cam_Tracking")
				{
              window.location.href="home.php?page=exam&id="+thisId;
              return false;
				}
            }
			else if(data.res == "notStarted")
            {
              Swal.fire(
                'Not started ',
                'This exam is not started yet! It will start on ' + data.msg,
                'error'
              )
            }
          },
          error : function(xhr, ErrorStatus, error){
            console.log(status.error);
          }

        });




  }
 });
	return false;
})



// Reset Exam Form
$(document).on("click","#resetExamFrm", function(){
      $('#submitAnswerFrm')[0].reset();
      return false;
});





// Select Time Limit
var mins
var secs;

function cd() {
  var timeExamLimit = $('#timeExamLimit').val();//id is from exam.php
  mins = 1 * m("" + timeExamLimit); // change minutes for wibhage here
  secs = 0 + s(":01"); 
  redo();
}

function m(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(0, i));
}

function s(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
  var disp;
  if(mins <= 9) {
      disp = " 0";
  } else {
      disp = " ";
  }
  disp += mins + ":";
  if(secs <= 9) {
      disp += "0" + secs;
  } else {
      disp += secs;
  }
  return(disp);
}

function redo() {		//තප්පර ගාන 0 ට පස්සෙ again 59 ඉදන්
  secs--;
  if(secs == -1) {
      secs = 59;
      mins--;
  }
  document.cd.disp.value = dis(mins,secs); 
  if((mins == 0) && (secs == 0)) {
    $('#examAction').val("autoSubmit");
     $('#submitAnswerFrm').submit();
  } else {
    cd = setTimeout("redo()",1000);
  }
  if((mins < 1)) {
    $('#TimeCalc').removeClass("btn-info").addClass( "btn-danger" );
  }
}

function init() {
  cd();
}
window.onload = init;
