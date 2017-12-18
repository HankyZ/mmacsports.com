<?php include('header.php'); ?>

    <!-- JOTFORM -->
<link href="//cdn.jotfor.ms/static/formCss.css?3.3.11923" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="//cdn.jotfor.ms/css/styles/nova.css?3.3.11923" />
<link type="text/css" media="print" rel="stylesheet" href="//cdn.jotfor.ms/css/printForm.css?3.3.11923" />
<style type="text/css">
    .form-label-left{
        width:400px !important;
    }
    .form-line{
        padding-top:5px;
        padding-bottom:5px;
    }
    .form-label-right{
        width:400px !important;
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
<script src="//cdn.jotfor.ms/static/jotform.forms.js?3.3.11923" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"id":"action_1454100745499","visibility":"Require","field":"17","isError":false}],"id":"1454100763753","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1454100745499","field":"11","operator":"isEmpty","value":"","isError":false}],"type":"require"},{"action":[{"id":"action_1454100729619","visibility":"Require","field":"16","isError":false}],"id":"1454100740288","index":"1","link":"Any","priority":"1","terms":[{"id":"term_1454100729619","field":"14","operator":"isEmpty","value":"","isError":false}],"type":"require"},{"action":[{"id":"action_1454100704678","visibility":"Require","field":"11","isError":false}],"id":"1454100718818","index":"2","link":"Any","priority":"2","terms":[{"id":"term_1454100704678","field":"17","operator":"isEmpty","value":"","isError":false}],"type":"require"},{"action":[{"id":"action_1454100654685","visibility":"Require","field":"14","isError":false}],"id":"1454100690596","index":"3","link":"Any","priority":"3","terms":[{"id":"term_1454100654685","field":"16","operator":"isEmpty","value":"","isError":false}],"type":"require"}]);
   JotForm.init(function(){
      setTimeout(function() {
          $('input_6').hint('ex: 23');
       }, 20);
      JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
      JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
      JotForm.calendarOther = {"today":"Today"};
      JotForm.setCalendar("8", false, false);
      setTimeout(function() {
          $('input_3').hint('ex: myname@example.com');
       }, 20);
      setTimeout(function() {
          $('input_17').hint('ex: myname@example.com');
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
        <h3>Deadline: 23rd April 2017</h3>

       <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSclnbTng0iTLbNamvZEqLIzttXz6-oMV4cqICUFSskLlNCEoQ/viewform?embedded=true" width="760" height="1600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
          
        <!-- Finish Main Content -->
      </div>
      
      
      
    </div>
  </div>
      
    
      
  <!-- Start Outter Wrapper -->
  <div class="outter-wrapper breadcrumb-wrapper">   
    <div class="wrapper">
      <a href="../index.php" class="fa">&#xf015;</a> <a href="../index.php">Home</a> <a href="../badminton/registration.php">Mynix Open Badminton Tournament Registration</a>
    </div>
  </div>

<?php include('../footer.php'); ?>