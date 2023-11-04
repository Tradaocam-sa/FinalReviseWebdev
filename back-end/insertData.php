<!-- <?php
include 'script.php';

if(isset($_POST["submit"])) {
  $TP=$_POST["data.TP"];
  $FN=$_POST["data.FN"];
  $FP=$_POST["data.FP"];
  $TN=$_POST["data.TN"];

  $sql="INSERT into final (TP,FN,TN,FP) values ('{$TP}', '{$FP}', '{$FP}', {$TN}')";
  if($run_sql) {
    echo json_encode(["message" => "Add success"]);
  }else {
    echo json_encode(["message" => "Add success"]);
  }
  }
?> -->