<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all");
  $data = json_decode($json);
  echo "วันที่ : ".$data[0]->txn_date."<br>";
  echo "ยอดผู้ป่วยใหม่ : ".$data[0]->new_case."<br>";
  echo "ยอดผู้ป่วยรวม : ".$data[0]->total_case."<br>";
  echo "ยอดผู้ป่วยภายใหม่ประเทศ : ".$data[0]->new_case_excludeabroad."<br>";
  echo "ยอดผู้ป่วยรวมในประเทศ : ".$data[0]->total_case_excludeabroad."<br>";
  echo "ยอดผู้เสียชีวิตใหม่ : ".$data[0]->new_death."<br>";
  echo "ยอดผู้เสียชีวิตรวม : ".$data[0]->total_death."<br>";
  echo "ยอดผู้หายป่วยใหม่ : ".$data[0]->new_recovered."<br>";
  echo "ยอดผู้หายป่วยรวม: ".$data[0]->total_recovered ."<br>";
?>
