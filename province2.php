<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<table border='1'>";
  echo "<tr><td>ลำดับ</td><td>จังหวัด</td></tr>";
  foreach($data as $key=>$val){
    echo $val->province."<br>";
  }
  echo "</table>"; 
?>
