<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Exam Seating Arrangement</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/setting.css"/>
<body>
  <?php
   $server='localhost';
   $dbuser='root';
   $dbpass='alkesha15';
   $db='trial';
  $conn=mysqli_connect($server,$dbuser,$dbpass,$db);
    $sql = "SELECT fullname,adminemail from admintable ";
    $retval = mysqli_query( $conn,$sql );
  $row=mysqli_fetch_array($retval);
      $name=$row[0];
      $email=$row[1];

   ?>
  <div class="container vertical-align">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
        <div class="panel panel-default" >
            <div class="panel-body ">
            <form class="form-horizontal  content" role="form" method="post" action="<?php $_PHP_SELF?>">
             <div class="form-group">
              <table class="table table-hover ">
                <tr>
                  <td><b>Administrator Name :</b><td>
                    <td class="textstyle"><?php echo $name; ?></td>
                </tr>
                <tr>
                  <td><b>Primary Email :</b><td>
                    <td class="textstyle"><?php echo $email; ?></td>
                </tr>
                <tr>
                  <td><b>password :</b><td>
                    <td><a class="link" href="changepass.php">change password</td>
                </tr>
              </table>
            </div>
</form>
</div>
</div>
</div>
</div>
</div><?php
mysqli_close($conn); ?>
</body>
</html>
