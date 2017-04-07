<!--classroom wise data is present here-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exam Seating Arrangement</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/branchyeardata.css"/>
</head>
<body>
  <?php
$server='localhost';
$dbuser='root';
$dbpass='alkesha15';
$db='trial';
$conn=mysqli_connect($server,$dbuser,$dbpass,$db);
$depttake= $_POST['department'];
$yeartake=$_POST['year'];
if($depttake && $yeartake)
{
foreach ($depttake as $d )
{
$deptname=mysqli_real_escape_string($conn,$d);
}
foreach ($yeartake as $y )
{
$yearname=mysqli_real_escape_string($conn,$y);
}
}
if($yearname=='I')
{
$yeartext='First';
}
elseif ($yearname=='II') {
$yeartext='Second';
}
elseif ($yearname=='III') {
$yeartext='Third';
}
elseif ($yearname=='IV') {
$yeartext='Fourth';
}
?>
<div class="container vertical-align">
  <div class="row">
    <div class="col-xs-10 col-xs-push-1" >
      <div class="panel panel-default" >

            <form class="form-horizontal  content" role="form"  action="branchyeardata.php" method="post">
             <div class="form-group">
               <table class="table ">
                 <tr>
                 <th class="yearheading" colspan="4"><center><?php echo "".$yeartext."  Year  ".$deptname.""; ?></center></th>
                 </tr>
               </table>
           </div>

         </div>
         <?php
         $subquery="SELECT distinct subject,examdate,starttime,endtime from trisub where department='$deptname' AND year='$yearname'";
        $retvalsquery=mysqli_query($conn,$subquery);
        ?>
        <?php
        while ($rowclassdata=mysqli_fetch_assoc($retvalsquery)) {
          $subject=$rowclassdata['subject'];//subject selection
          $examdate=$rowclassdata['examdate'];//date selection
          $starttime=$rowclassdata['starttime'];//starttime selection
          $endtime=$rowclassdata['endtime'];//endtime selection
          $classquery="SELECT distinct classroom from trisub where department='$deptname' AND year='$yearname' AND subject='$subject' AND examdate='$examdate' AND starttime='$starttime' AND endtime='$endtime'"; //class query
          $retvalclassquery=mysqli_query($conn,$classquery);//class query retrival
          $classroomrow=mysqli_fetch_assoc($retvalclassquery);
          $classroom=$classroomrow['classroom'];//clasroom is obtain
          //for obtaining enrollNumber
          $rollnoquery="SELECT  enrollnumber from trisub where classroom='$classroom' AND department='$deptname' AND year='$yearname' AND subject='$subject' AND examdate='$examdate' AND starttime='$starttime' AND endtime='$endtime'";
         $retvalroll=mysqli_query($conn,$rollnoquery);

         ?>
         <div class="panel panel-default panelsub">

            <div class="form-group sub-heading">
              <table class="table " >
                <tr>
                  <td class="textstyle" ><b>Subject Name : </b><?php echo $subject; ?></td> <!--subject is display here-->
                  <td class="textstyle" ><b>Date :</b> <?php echo $examdate; ?> </td> <!--exam date is display here-->
                  <td class="textstyle"><b>Time : </b><?php echo "".$starttime." to ".$endtime.""; ?></td><!--start and end time is dispplay here-->
                </tr>

              </table>
            </div>
         </div>
<div class="panel panel-default panelcon">
 <div class="form-group sub-heading">
   <table class="table  " >

     <tr >
    <th colspan="2">ROLL NUMBER</th>
    <th colspan="2">LECTURE HALL</th>
    </tr>
     <tr>
       <td class="textstyle" colspan="2" ><?php
            $count=1;
           while($rollrow=mysqli_fetch_assoc($retvalroll)){
             $rollno=$rollrow['enrollnumber'];
             if(($count%6)!=0){
             echo $rollno." , ";
             $count=$count+1;
           }
           else {
             echo "<br/>";
              $count=1;
           }
           }

       ?>
       <td class="textstyle" ><?php echo $classroom;?></td>
     </tr>
   </table>
 </div>
</div>
<?php } ?>
</form>
</div>
</div>
</div>

</body>
</html>
