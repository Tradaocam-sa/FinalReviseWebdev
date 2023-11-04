<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "final2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
  echo "Failed";
}
$sql = "select * from final2";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  echo "<table>
          <tr>
            <th>Precision</th><th>Recall</th><th>Accuracy</th><th>F1 Score</th>
          </tr>";
        
  while ($row = mysqli_fetch_assoc($result)) {
    $tp = $row["tp"];
    $fn = $row["fn"];
    $tn = $row["tn"];
    $fp = $row["fp"];
    $precision = $tp/($tp + $fp);
    $recall = $tp/($tp + $fn);
    $accuracy = ($tn+$tp)/($tn+$fp+$tp+$fn);
    $f1Score = 2*(($precision*$recall)/($precision+$recall)); 
    echo "<tr><td>".$precision."</td><td>".$recall."</td><td>".$accuracy."</td><td>".$f1Score."</td><td></tr>";
  }
  echo "</table>";
  echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
}
?>