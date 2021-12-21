<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<table border='1'>";
  echo "<title><b>รายงานสถานการโควิด-19 แยกจังหวัด</title></b>"
  echo "<tr><td><b>ลำดับ</td></b><td><b>จังหวัด</td></b></tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td>";
    echo ($key+1);
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>"; 
?>
