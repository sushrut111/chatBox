<?php
$conn = mysql_connect('localhost','root','') or die ("Not able to connect to server!");
mysql_select_db('mfra',$conn) or die ("Not able to connect to database!");
$total =10;
error_reporting(0);
if($_COOKIE["p_user"]) $usr = $_COOKIE["p_user"];
if($_POST['keyt']||$_POST['val']){
  $k = $_POST['keyt'];}{
    $info=mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `keyt`='$k'"));
    if(!$info) $info1 = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `name`='$usr'"));
  //  if(!$info1) die("login failed");
  }
    if($_POST['keyt']) {
    $usr = $info['name'];
    //$_POST[$usr];
    setcookie("p_user",$usr,time()+24*60*60,"/"); 
    //die($_COOKIE["p_user"]);
  }
    //echo $_COOKIE["p_user"]; 
    $usr = $info['name'];
    //if(!$usr) $usr = $_COOKIE["p_user"];
      $img = "/mfra/images/".$usr.".jpg";         
echo'<head> <link rel="stylesheet" type="text/css" href="css/materialize.css">
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></head>';
    if($info || $_COOKIE["p_user"])
 { 
  if($_COOKIE["p_user"]) $usr = $_COOKIE["p_user"];
  if(isset($_POST['change'])){
         // echo"ff";
          $msg = $_POST['val'];
          mysql_query("INSERT INTO `chat` (`usrn`,`message`) VALUES ('$usr','$msg')");
        $count = mysql_fetch_array(mysql_query("SELECT * FROM `count` WHERE `id` = 0"));
        $c = $count['count'];
        $c = $c + 1;
        //echo "new".$c;
        mysql_query("UPDATE `count` SET `count` = '$c' WHERE `id` = 0");
        }

        $count = mysql_fetch_array(mysql_query("SELECT * FROM `count` WHERE `id` = 0"));
        $c = $count['count'];
// echo $c;
  
  $i = $c+1;
  //$count = mysql_fetch_array(mysql_query("SELECT * FROM `count` WHERE `id` = 0"));
  //$c = $count['count'];
 // echo $c;
  // SELECT * FROM table ORDER BY id DESC LIMIT 50
  //$msgs=mysql_fetch_array(mysql_query("SELECT * FROM `chat` WHERE usrn= 'pap'"));
//foreach($msgs as $msgs) {

 // $in = $msgs->result_array();
        //'no' => $row['no'],
        //echo $msgs['usrn'].'<br>';
  //foreach($msgs as $msgs)
    //    echo $msgs -> 0;
     
//}

 // echo $productitems[1]['usrn'].'<br>'.$productitems[1]['message'];
  //echo 
//
  echo          " <form class='col s12' method='POST'>
     
          <input type='text' name='val' placeholder='your message here' autofocus></input>
          <input type='submit' name='change' class='waves-effect waves-light btn'></input>
      
        ";
        
  echo '<div id="scores">';
  

echo'</div>';

echo'';
 }

     
    
      ?>       

   