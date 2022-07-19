<form method="post" class="cf" id="career_form" name="career_form" action="http://122.160.61.100/dev/nk/gj/wp-content/themes/globaljet/email/career.php" novalidate="novalidate" data-status="init" enctype="multipart/form-data">


<div class="top_sec cr_top_sec trip_form_sec">
<div class="custom_form_container">
<div class="row model_input_form">
<div class="col col-12">

<i class="far fa-user" aria-hidden="true"></i><input type="text" placeholder="Enter your name*" class="lettersonly crss_name custom_formm_input"  name="crss_name" />

</div>


<div class="col col-12">
	  <i class="far fa-envelope" aria-hidden="true"></i>  <input type="email" placeholder="Enter your email address*" class="crss_email custom_formm_input"  name="crss_email" pattern=".+@globex\.com"/>

</div>

<div class="col col-12">

<i class="fas fa fa-file-pdf-o" aria-hidden="true"></i><input type="file" name="file" class="crss_cv_upload custom_formm_input" accept=".pdf,.doc,.docx,.jpeg,.jpg,.png">
</div>
</div>
</div>
</div>
<div class="custom_form_container">
<div class="row model_input_form">
<div class="col col-6">
<div class="g-recaptcha" data-sitekey="6LeFaSEUAAAAANl7JovITcgR6cZ5yfAwyAnyfFZo"></div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</div>
<div class="col col-6"> 
<div class="rq_submit_btn">
<input type="submit" id="requestmail" name="submit" value="Submit CV"  class="rq_req_btn custom_btn primary_btn">
</div>

</div>
	<div class="col col-12">
	 <div id="sucess" style="display:none"><h3>Thank you, someone from Global Jet Centre shall be in touch with you.</h3></div>
	<div id="error" style="display:none"><h3>Failed to send your message. Please try later.</h3></div>
	</div>
</div>
</div>

</form>
