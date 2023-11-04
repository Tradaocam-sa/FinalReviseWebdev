<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "final2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
  echo "Failed";
}
$tp = $_POST['tp'];
$fn = $_POST['fn'];
$tn = $_POST['tn'];
$fp = $_POST['fp'];

$qry = "INSERT INTO `final2`(`tp`, `fn`, `tn`, `fp`) VALUES ($tp, $fn, $tn, $fp)";

$insert = mysqli_query($conn, $qry);
if (!$insert) {
  echo "some problems";
}
else {
  echo "Data Inserted";
  echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
}


 

  
?>