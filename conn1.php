<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'alkesha15';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"trial");
if(! $conn )
{
  echo "no";
}
else {
echo "Connected successfull";
}
$s="create table subject (subid int(3),subname varchar(30)) ";
if(!mysqli_query($conn,$s))
{
echo "error";
}
else{
echo "created";
}
$e="select * from department";
$result=mysqli_query($conn,$e);
$count=mysqli_num_rows($result);
echo $count." records";

mysqli_close($conn);
?>
</body>
</html>
