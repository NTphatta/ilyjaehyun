<?php

  echo "<center><b>รายงานสถานการโควิด-19 แยกจังหวัด</b></center>";
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<table border='8'>";
  echo "<tr><td><b>ลำดับ</b></td><td><b>จังหวัด</b></td><td><b>ยอดผู้ป่วยใหม่</b></td><td><b>ยอดผู้ป่วยรวม</b></td><td><b>ยอดผู้ป่วยใหม่ภายในประเทศ</b></td><td><b>ยอดผู้ป่วยรวมในประเทศ</b></td>
  <td><b>ยอดผู้เสียชีวิตใหม่</b></td><td><b>ยอดผู้เสียชีวิตรวม</b></td><td><b>วันที่</b></td></tr>";
  foreach($data as $key=>$val){
    echo "<tr bgcolor="pink">";
    echo "<td>";
    echo ($key+1);
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
    echo "<td>";
    echo $val->new_case;
    echo "</td>";
    echo "<td>";
    echo $val->total_case;
    echo "</td>";
    echo "<td>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td>";
    echo $val->new_death;
    echo "</td>";
    echo "<td>";
    echo $val->total_death;
    echo "</td>";
    echo "<td>";
    echo $val->txn_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>"; 
?>
