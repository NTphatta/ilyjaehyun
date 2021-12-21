<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<table border='1'>";
  echo "<TITLE><b>รายงานสถานการโควิด-19 แยกจังหวัด</TITLE></b>"
  echo "<tr><td><b>ลำดับ</td></b><td><b>จังหวัด</td></b><td><b>ยอดผู้ป่วยใหม่</td></b><td><b>ยอดผู้ป่วยรวม</td></b><td><b>ยอดผู้ป่วยใหม่ภายในประเทศ</td></b><td><b>ยอดผู้ป่วยรวมในประเทศ</td></b>
  <td><b>ยอดผู้เสียชีวิตใหม่</td></b><td><b>ยอดผู้เสียชีวิตรวม</td></b><td><b>วันที่</td></b></tr>";
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
