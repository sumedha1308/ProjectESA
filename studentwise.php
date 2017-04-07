<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exam Seating Arrangement</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/swise.css"/>
  <!--BootStrapValidator css-->
  <link href="css/bootstrapValidator.min.css" rel="stylesheet" />

  <!-- jQuery and BOOTstrap JS-->
  <script src="js/bootstrap.js" type="text/javascript" ></script>
  <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

  <!--BootstrapValidator-->
  <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>
  <div class="container vertical-align">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
        <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal  content" role="form" id="individual-form" action="individualdata.php" method="post">
             <div class="form-group">
            <label class="style">Enrollment Number</label>
            <div  class="formgroup">
            <input type="text" class="form-control " id="rollno" name="rollno" placeholder="Enrollment number"></input>
            </div>
          </div>
            <div class="form-group">
      <center><input type="submit" name="submit" value="search" class="btn btn-success"></input></center>
           </div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
<script type="text/javascript">
      $(document).ready(function () {
	        var validator = $("#individual-form").bootstrapValidator({
	    fields :{
		       rollno: {
			         message : "enrollment number is require",
					 validators :{
					      notEmpty : {
						       message : "Please provide an enrollment number",
						             }
					             }

				      },



				 }

	  });
	  });
	  </script>
</html>
