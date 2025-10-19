
<?php 
  include("../../conn.php");
  $id = $_GET['id'];
 
  $selCourse = $conn->query("SELECT * FROM exam_question_tbl WHERE eqt_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update Question</i></legend>
  
  <div class="col-md-12 mt-4">
    <form method="post" id="updateQuestionFrm">
      <div class="form-group">
        <legend>Question</legend>
        <input type="hidden" name="question_id" value="<?php echo $id; ?>">
        <textarea name="question" class="form-control" rows="2" required=""><?php echo $selCourse['exam_question']; ?></textarea>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.8.2/tinymce.min.js"></script>
					<script>
						tinymce.init({
			  selector: 'textarea',
			  height: 300,
			  menu: {
    file: { title: 'File', items: 'preview | print ' },
    edit: { title: 'Edit', items: 'undo redo | cut copy | selectall' },
    view: { title: 'View', items: 'fullscreen' },
    insert: { title: 'Insert', items: 'link inserttable |emoticons hr| insertdatetime' },
    format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats blockformats fontformats fontsizes lineheight | forecolor backcolor | removeformat' },
    tools: { title: 'Tools', items: 'wordcount' },
    table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
	},
			  plugins: [
				'advlist autolink lists link image charmap print preview anchor',
				'searchreplace visualblocks code fullscreen',
				'insertdatetime media table paste wordcount',
				'table'
			  ],
			  toolbar: 'undo redo | formatselect | ' +
			  'bold italic backcolor ' +
			  'alignright alignjustify | bullist numlist outdent indent | ' ,
			  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
			});
					</script>
      </div>


      <div class="form-group">
        <legend>Choice A</legend>
        <input type="" name="exam_ch1" value="<?php echo $selCourse['exam_ch1']; ?>" class="form-control" required>
      </div>
      <div class="form-group">
        <legend>Choice B</legend>
        <input type="" name="exam_ch2" value="<?php echo $selCourse['exam_ch2']; ?>" class="form-control" required>
      </div>
      <div class="form-group">
        <legend>Choice C</legend>
        <input type="" name="exam_ch3" value="<?php echo $selCourse['exam_ch3']; ?>" class="form-control" required>
      </div>
      <div class="form-group">
        <legend>Choice D</legend>
        <input type="" name="exam_ch4" value="<?php echo $selCourse['exam_ch4']; ?>" class="form-control" required>
      </div>

      <div class="form-group">
        <legend class="text-success">Correct Answer</legend>
        <input type="" name="exam_final" value="<?php echo $selCourse['exam_answer']; ?>" class="form-control" required>
      </div>


      <div class="form-group" align="right">
        <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
      </div>
    </form>
  </div>
</fieldset>







