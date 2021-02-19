        <style>
          
        </style>
        <?php
        include('connect_db.php');
        
        if($_GET['valuedate']!="")
        {
          $dateseatt = $_GET['valuedate'];
        }
        else
        {
          $dateseatt = date("Y-m-d");
        }

        $sql = "select * from tbl_fares_time 
                inner join tbl_fares on tbl_fares_time.fares_id=tbl_fares.fares_id 
                where tbl_fares_time.fares_id = '1' and tbl_fares_time.ship_id = '2'
                and tbl_fares_time.fares_time_date_start <= '$dateseatt' 
                and tbl_fares_time.fares_time_date_end >= '$dateseatt'";
        $qr = mysql_query($sql);
        ?>
              <?php while($arr = mysql_fetch_array($qr)){?>
                <div class="col-md-12 well"">
                  <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel"><i class="fa fa-cart"></i> ข้อมูลทีนั่งโดยสาร <?php echo $arr['fares_name'];?> รอบ <?php 
                    $value_time=explode(":",$arr['fares_departtime']);
                    echo $value_time[0].".".$value_time[1]." น.";?> </h3>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_content">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                          <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" id="tab_content" aria-labelledby="home-tab">
                              <div class="col-md-6">
                                <h3 align="center">แผนผังที่นั่งเรือ ROYAL 2 <br>ชั้นธรรมดา (Economy Class)</h3>
                                <table width="700" border="0" style="background-image:url(../../assets/images/ROYAL2-1-2.jpg); background-repeat:no-repeat;background-position: center;background-size: 100%;">
                                  <?php for($i=-11;$i<=28;$i++){?>
                                  <tr>
                                    <?php for($ii=0;$ii<=20;$ii++){
                                      $iii = "";
                                      $char = "";?>
                                      <td width="32" height="32" align="center"
                                        <?php /* 1 */ if($i>0 && $i<8 && (($ii>=1 && $ii<=3) || ($ii>=5 && $ii<=8) || ($ii>=12 && $ii<=15) || ($ii>=17 && $ii<=19))){
                                          $iii=$i;
                                          if($ii==1){$char = "A";}else if($ii==2){$char = "B";}else if($ii==3){$char = "C";}else if($ii==5){
                                            $char = "D";}else if($ii==6){$char = "E";}else if($ii==7){$char = "F";}else if($ii==8){$char = "G";}else if($ii==12){$char = "H";}else if($ii==13){$char = "I";}else if($ii==14){$char = "J";}else if($ii==15){$char = "K";}else if($ii==17){$char = "L";}else if($ii==18){$char = "M";}else if($ii==19){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '4'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '4'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '4'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>
                                        <?php /* 2 */ if($i>7 && $i<10 && (($ii>=5 && $ii<=8) || ($ii>=12 && $ii<=15))){
                                          $iii=$i;
                                          if($ii==1){$char = "A";}else if($ii==2){$char = "B";}else if($ii==3){$char = "C";}else if($ii==5){
                                            $char = "D";}else if($ii==6){$char = "E";}else if($ii==7){$char = "F";}else if($ii==8){$char = "G";}else if($ii==12){$char = "H";}else if($ii==13){$char = "I";}else if($ii==14){$char = "J";}else if($ii==15){$char = "K";}else if($ii==17){$char = "L";}else if($ii==18){$char = "M";}else if($ii==19){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '4'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '4'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '4'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>
                                        <?php /* 3 */ if($i>9 && $i<14 && (($ii>=1 && $ii<=3) || ($ii>=5 && $ii<=8) || ($ii>=12 && $ii<=15) || ($ii>=17 && $ii<=19))){
                                          $iii=$i;
                                          if($ii==1){$char = "A";}else if($ii==2){$char = "B";}else if($ii==3){$char = "C";}else if($ii==5){
                                            $char = "D";}else if($ii==6){$char = "E";}else if($ii==7){$char = "F";}else if($ii==8){$char = "G";}else if($ii==12){$char = "H";}else if($ii==13){$char = "I";}else if($ii==14){$char = "J";}else if($ii==15){$char = "K";}else if($ii==17){$char = "L";}else if($ii==18){$char = "M";}else if($ii==19){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '4'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '4'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '4'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>
                                        <?php /* 4 */ if($i==14 && $ii!=0 && (($ii>=1 && $ii<=3) || ($ii>=17 && $ii<=19))){
                                          $iii=$i;
                                          if($ii==1){$char = "A";}else if($ii==2){$char = "B";}else if($ii==3){$char = "C";}else if($ii==5){
                                            $char = "D";}else if($ii==6){$char = "E";}else if($ii==7){$char = "F";}else if($ii==8){$char = "G";}else if($ii==12){$char = "H";}else if($ii==13){$char = "I";}else if($ii==14){$char = "J";}else if($ii==15){$char = "K";}else if($ii==17){$char = "L";}else if($ii==18){$char = "M";}else if($ii==19){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '4'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '4'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '4'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>
                                        <?php /* 5 */ if($i>14 && $i<20 && (($ii>=1 && $ii<=3) || ($ii>=5 && $ii<=8) || ($ii>=12 && $ii<=15) || ($ii>=17 && $ii<=19))){
                                          $iii=$i;
                                          if($ii==1){$char = "A";}else if($ii==2){$char = "B";}else if($ii==3){$char = "C";}else if($ii==5){
                                            $char = "D";}else if($ii==6){$char = "E";}else if($ii==7){$char = "F";}else if($ii==8){$char = "G";}else if($ii==12){$char = "H";}else if($ii==13){$char = "I";}else if($ii==14){$char = "J";}else if($ii==15){$char = "K";}else if($ii==17){$char = "L";}else if($ii==18){$char = "M";}else if($ii==19){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '4'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '4'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '4'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>
                                        <?php /* 6 */ if($i==20 && $ii!=0 && (($ii>=1 && $ii<=3) || ($ii>=5 && $ii<=7) || ($ii>=13 && $ii<=15) || ($ii>=17 && $ii<=19))){
                                          $iii=$i;
                                          if($ii==1){$char = "A";}else if($ii==2){$char = "B";}else if($ii==3){$char = "C";}else if($ii==5){
                                            $char = "D";}else if($ii==6){$char = "E";}else if($ii==7){$char = "F";}else if($ii==8){$char = "G";}else if($ii==12){$char = "H";}else if($ii==13){$char = "I";}else if($ii==14){$char = "J";}else if($ii==15){$char = "K";}else if($ii==17){$char = "L";}else if($ii==18){$char = "M";}else if($ii==19){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '4'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '4'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '4'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>
                                        <?php /* 7 */ if($i==21 && $ii!=0 && (($ii==3) || ($ii>=5 && $ii<=7) || ($ii>=13 && $ii<=15) || ($ii==17))){
                                          $iii=$i;
                                          if($ii==1){$char = "A";}else if($ii==2){$char = "B";}else if($ii==3){$char = "C";}else if($ii==5){
                                            $char = "D";}else if($ii==6){$char = "E";}else if($ii==7){$char = "F";}else if($ii==8){$char = "G";}else if($ii==12){$char = "H";}else if($ii==13){$char = "I";}else if($ii==14){$char = "J";}else if($ii==15){$char = "K";}else if($ii==17){$char = "L";}else if($ii==18){$char = "M";}else if($ii==19){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '4'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '4'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '4'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>
                                        <?php /* 8 */ if($i==22 && ($ii==3 || $ii==17)){
                                          $iii=$i;
                                          if($ii==1){$char = "A";}else if($ii==2){$char = "B";}else if($ii==3){$char = "C";}else if($ii==5){
                                            $char = "D";}else if($ii==6){$char = "E";}else if($ii==7){$char = "F";}else if($ii==8){$char = "G";}else if($ii==12){$char = "H";}else if($ii==13){$char = "I";}else if($ii==14){$char = "J";}else if($ii==15){$char = "K";}else if($ii==17){$char = "L";}else if($ii==18){$char = "M";}else if($ii==19){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '4'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '4'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '4'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>><?=$iii.$char?>
                                      </td>
                                    <?php }?>
                                  </tr>
                                  <?php }?>
                                </table>
                              </div>

                            <?php 
                            


                            ///////////////////////////////////////////////////////////////////////////////////////////////////////////
                            ///////////////////////////////////////////////////////////////////////////////////////////////////////////



                            ?>
                              <div class="col-md-6">
                                <h3 align="center">แผนผังที่นั่งเรือ ROYAL 2 ชั้นธุรกิจ (Business Class) <br>และ ชั้นห้องส่วนตัว (VIP Room Class)</h3>
                                <table width="700" border="0" style="background-attachment:scroll; background-image:url(../../assets/images/ROYAL2-2-2.jpg); background-repeat:no-repeat;background-position: center;background-size: 100%;">
                                  <?php for($i=0;$i<=12;$i++){?>
                                    <tr>
                                      <?php for($ii=0;$ii<=20;$ii++){ 
                                        $iii = "";?>
                                        <td width="35" height="35" align="center"></td>
                                      <?php }?>
                                    </tr>
                                  <?php }?>
                                  <tr>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"></td>
                                    <td width="35" height="35" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" 
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1V' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '6'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1V' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1V' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '6'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1V</td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" 
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1V' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '6'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1V' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1V' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '6'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1V</td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                  </tr>
                                  <?php for($i=14;$i<=15;$i++){?>
                                    <tr>
                                      <?php for($ii=0;$ii<=20;$ii++){ 
                                        $iii = "";?>
                                        <td width="35" height="35" align="center"></td>
                                      <?php }?>
                                    </tr>
                                  <?php }?>
                                  <tr>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" 
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1V' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '6'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1V' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1V' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '6'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1V</td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center" 
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1V' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '6'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1V' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1V' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '6'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1V</td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                  </tr>
                                  <tr>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1A' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1A' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1A' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1A</td>
                                    <td width="35" height="35" align="center"
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1B' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1B' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1B' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1B</td>
                                    <td width="35" height="35" align="center"
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1C' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1C' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1C' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1C</td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1L' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1L' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1L' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1L</td>
                                    <td width="35" height="35" align="center"
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1M' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1M' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1M' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1M</td>
                                    <td width="35" height="35" align="center"
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1N' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1N' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1N' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW4.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1N</td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                  </tr>
                                  <tr>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1D' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1D' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1D' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1D</td>
                                    <td width="35" height="35" align="center"
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1E' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1E' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1E' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1E</td>
                                    <td width="35" height="35" align="center"
                                      <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                          INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                          where b.seat_no='1F' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='1F' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where d.seat_no='1F' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>>1F</td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                    <td width="35" height="35" align="center"></td>
                                  </tr>
                                  <?php for($i=19;$i<=33;$i++){?>
                                  <tr>
                                    <?php for($ii=0;$ii<=20;$ii++){ 
                                      $iii = "";
                                      $char = "";?>
                                      <td width="35" height="35" align="center"
                                        <?php /* 4 */ if($i==18 && $ii>=9 && $ii<=11){$iii=$i-17;
                                          if($ii==4){$char = "A";}else if($ii==5){$char = "B";}else if($ii==6){$char = "C";}else if($ii==9){$char = "D";}else if($ii==10){$char = "E";}else if($ii==11){$char = "F";}else if($ii==14){$char = "L";}else if($ii==15){$char = "M";}else if($ii==16){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '5'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>
                                        <?php /* 5 */ if($i>=19 && $i<=23 && (($ii>=4 && $ii<=6) || ($ii>=9 && $ii<=11) || ($ii>=14 && $ii<=16))){$iii=$i-17;
                                          if($ii==4){$char = "A";}else if($ii==5){$char = "B";}else if($ii==6){$char = "C";}else if($ii==9){$char = "D";}else if($ii==10){$char = "E";}else if($ii==11){$char = "F";}else if($ii==14){$char = "L";}else if($ii==15){$char = "M";}else if($ii==16){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '5'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>
                                        <?php /* 6 */ if($i==24 && (($ii>=4 && $ii<=6) || ($ii>=14 && $ii<=16))){$iii=$i-17;
                                          if($ii==4){$char = "A";}else if($ii==5){$char = "B";}else if($ii==6){$char = "C";}else if($ii==9){$char = "D";}else if($ii==10){$char = "E";}else if($ii==11){$char = "F";}else if($ii==14){$char = "L";}else if($ii==15){$char = "M";}else if($ii==16){$char = "N";}?> 
                                          <?php 
                                          $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a 
                                            INNER JOIN tbl_seat b ON a.seat_id=b.seat_id 
                                            where b.seat_no='".$iii.$char."' and a.seat_other_date = '$dateseatt' and a.fares_id = '1' and b.class_id = '5'"));
                                          $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_no='".$iii.$char."' and seat_st = '0' and class_id = '5'"));
                                          $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                            INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                            ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                            where d.seat_no='".$iii.$char."' and a.reservedet_date = '$dateseatt' and c.fares_id = '1' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3' and d.class_id = '5'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW2.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }?>
                                        <?php }?>><?=$iii.$char?>
                                      </td>
                                    <?php }?>
                                  </tr>
                                  <?php }?>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <center>
                    <font color="red">หมายเหตุ</font> 
                    <button class="btn btn-info"> xxx</button> : ที่นั่งไม่ว่าง ,
                    <button class="btn btn-danger"> xxx</button> : ห้ามนั่ง ,
                    <button class="btn btn-dark"> xxx</button> : ที่นั่งชำรุด
                  </center>
                </div>
              <?php }?>
        <style>
          
        </style>
        <script>
          
        </script>