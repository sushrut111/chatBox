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
    header('Location: in.html');
  }
  ?>