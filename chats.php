
<?php
$conn = mysql_connect('localhost','root','') or die ("Not able to connect to server!");
mysql_select_db('mfra',$conn) or die ("Not able to connect to database!");
$total =10;
error_reporting(0);
$count = mysql_fetch_array(mysql_query("SELECT * FROM `count` WHERE `id` = 0"));
        $c = $count['count'];
 //echo $c;
  echo'
<head>
<link rel="stylesheet" type="text/css" href="css/materialize.css">
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  '
  ;
  $i = $c+1;
  $j = 0 ;
  while($i--){
    $c = $i;
    $j++;
  $msgs=mysql_fetch_array(mysql_query("SELECT * FROM `chat` WHERE `no` =$c"));
  //echo $msgs['usrn'].$msgs['message'];
     //var_dump($msgs);
 $img ="/mfra1/images/".$msgs['usrn'].".jpg";
echo '
<div class="chip" >
    <img src="'.$img.'" alt="Contact Person">
    '.$msgs['message'].'
  </div>';
         if($j>10) break;
         else echo"<br>";
       }



?>