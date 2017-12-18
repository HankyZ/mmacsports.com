<?php include('header.php'); ?> 
		<link href="//cdn.jotfor.ms/static/formCss.css?3.3.10752" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="//cdn.jotfor.ms/css/styles/nova.css?3.3.10752" />
<link type="text/css" media="print" rel="stylesheet" href="//cdn.jotfor.ms/css/printForm.css?3.3.10752" />
<style type="text/css">
    .form-label-left{
        width:250px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:false;
    }

    .form-all{
        margin:0px auto;
        padding-top:20px;
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }

</style>

<script src="//cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="//cdn.jotfor.ms/static/jotform.forms.js?3.3.10752" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      setTimeout(function() {
          $('input_3').hint('ex: myname@example.com');
       }, 20);
	JotForm.clearFieldOnHide="disable";
	JotForm.onSubmissionError="jumpToSubmit";
   });
</script>
		
		<!-- Scripts -->
	<script src="../js/vendor/jquery-1.8.3.min.js"></script>
        <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    	

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">
				
		<div class="wrapper blog-roll ad-pad clearfix">
		
			<!-- Start Main Column  -->
			<div class="main-content col-1-1">
<h1>Volunteer with us!</h1>
					<p>Feel free to contact us at <a href="mailto:mynixopen@gmail.com"><u>mynixopen@gmail.com</u></a> or fill out a form below to let us know what you are interested in!</p>
					<form class="jotform-form" action="//submit.jotform.ca/submit/60169620542250/" method="post" name="form_60169620542250" id="60169620542250" accept-charset="utf-8" style="float:left;">
  <input type="hidden" name="formID" value="60169620542250" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li class="form-line jf-required" data-type="control_fullname" id="id_1">
        <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1">
          Full Name / Nom Complet
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_1" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="10" name="q1_fullName[first]" id="first_1" />
            <label class="form-sub-label" for="first_1" id="sublabel_first" style="min-height: 13px;"> 
First Name / Prénom </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="15" name="q1_fullName[last]" id="last_1" />
            <label class="form-sub-label" for="last_1" id="sublabel_last" style="min-height: 13px;"> 
Last Name / Nom de famille </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3">
          E-mail / Adresse courriel
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input jf-required">
          <input type="email" class=" form-textbox validate[required, Email]" id="input_3" name="q3_email" size="30" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> Phone Number / Numéro de téléphone </label>
        <div id="cid_4" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="tel" name="q4_phoneNumber[area]" id="input_4_area" size="3">
            
            <label class="form-sub-label" for="input_4_area" id="sublabel_area" style="min-height: 10px;"> Area Code </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="tel" name="q4_phoneNumber[phone]" id="input_4_phone" size="8">
            <label class="form-sub-label" for="input_4_phone" id="sublabel_phone" style="min-height: 10px;"> Phone Number </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textarea" id="id_5">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5" style="width:250px!important;display:block!important;">
          Message
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input jf-required">
          <textarea id="input_5" class="form-textarea validate[required]" name="q5_message" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="60169620542250" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "60169620542250-60169620542250";
  </script>
</form>
				
				<!-- Finish Main Content -->
			</div>
			
			
			
		</div>
	</div>
    	
    
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper breadcrumb-wrapper">		
		<div class="wrapper">
			<a href="../index.php" class="fa">&#xf015;</a> <a href="../index.php">Home</a> <a href="../badminton/volunteer.php">Volunteer</a>
		</div>
	</div>

<?php include('../footer.php'); ?>