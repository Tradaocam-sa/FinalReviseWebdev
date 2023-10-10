<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) { 
    $data= file_get_contents("php://input");
    $object = json_decode($data, true);
    $conn= mysqli_connect('localhost', 'root','', 'final') or die ("Connect failed: " .mysqli_connect_error());
    if(isset($_POST['truePositivev']) && isset($_POST['falseNegative']) && isset($_POST['trueNegative']) && isset($_POST['falsePositive'])) {
      $TP = $_POST['truePositive'];
      $FN = $_POST['falseNegative'];
      $TN = $_POST['trueNegative'];
      $FP = $_POST['falsePositive'];

      $sql= "INSERT INTO `final` (`TP`, `FN`, `TN`, `FP`) VALUES ('$TP', '$FN', '$TN', '$FP')";

      $query = mysql_query($conn, $sql);
      if($query) {
        echo 'Entry Successful';
      }
      else {
        echo 'Error Occured';
      }
    }
    
  }