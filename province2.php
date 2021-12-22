<?php

  echo "<center><b>รายงานสถานการโควิด-19 แยกจังหวัด</b></center>";
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  $bgcolor[0] = "#CCCCFF"; $bgcolor[1] = "#CCCCFF"; $bgcolor[2] = "#CCCCFF"; $bgcolor[3] = "#CCCCFF"; $bgcolor[4] = "#CCCCFF"; $bgcolor[5] = "#CCCCFF"; $bgcolor[6] = "#CCCCFF"; 
$bgcolor[7] = "#CCCCFF"; $bgcolor[8] = "#CCCCFF"; 
  echo "<table border='8'>";
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
