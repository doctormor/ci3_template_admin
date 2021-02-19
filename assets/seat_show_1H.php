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
                where tbl_fares_time.fares_id = '2' and tbl_fares_time.ship_id = '1'
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
                              <?php 
                              $sqlC = "select * from tbl_class";
                              $qrC = mysql_query($sqlC);
                              while($arrC = mysql_fetch_array($qrC)){?>
                              <?php if($arrC['class_id']==1) {?>
                              <div class="col-md-7">
                              <h3 align="center">แผนผังที่นั่งเรือ ROYAL 1 ชั้นทั่วไป (Economy Class)</h3>
                              <table width="710" align="center" border="0" style="background-image: url('../../assets/images/ship_body1.jpg');background-repeat: no-repeat;">
                                <tr align="center">
                                  <td width="1%" rowspan="40">&nbsp;</td>
                                  <td colspan="4" width="20%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="40%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="20%">&nbsp;</td>
                                  <td width="1%" rowspan="40">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=2){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=4 && $arrS['seat_no']>=3){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=8 && $arrS['seat_no']>=5){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=15 && $arrS['seat_no']>=9){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=19 && $arrS['seat_no']>=16){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=23 && $arrS['seat_no']>=20){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=30 && $arrS['seat_no']>=24){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=34 && $arrS['seat_no']>=31){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=38 && $arrS['seat_no']>=35){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=45 && $arrS['seat_no']>=39){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=49 && $arrS['seat_no']>=46){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=53 && $arrS['seat_no']>=50){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=60 && $arrS['seat_no']>=54){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=64 && $arrS['seat_no']>=61){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=68 && $arrS['seat_no']>=65){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=75 && $arrS['seat_no']>=69){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=79 && $arrS['seat_no']>=76){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=83 && $arrS['seat_no']>=80){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=90 && $arrS['seat_no']>=84){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=94 && $arrS['seat_no']>=91){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=98 && $arrS['seat_no']>=95){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=105 && $arrS['seat_no']>=99){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=109 && $arrS['seat_no']>=106){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=113 && $arrS['seat_no']>=110){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=120 && $arrS['seat_no']>=114){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=124 && $arrS['seat_no']>=121){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=128 && $arrS['seat_no']>=125){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=135 && $arrS['seat_no']>=129){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=139 && $arrS['seat_no']>=136){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=143 && $arrS['seat_no']>=140){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=150 && $arrS['seat_no']>=144){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=154 && $arrS['seat_no']>=151){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=158 && $arrS['seat_no']>=155){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=165 && $arrS['seat_no']>=159){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=169 && $arrS['seat_no']>=166){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=173 && $arrS['seat_no']>=170){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=180 && $arrS['seat_no']>=174){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=184 && $arrS['seat_no']>=181){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=188 && $arrS['seat_no']>=185){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=195 && $arrS['seat_no']>=189){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=199 && $arrS['seat_no']>=196){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=203 && $arrS['seat_no']>=200){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=210 && $arrS['seat_no']>=204){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=214 && $arrS['seat_no']>=211){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=218 && $arrS['seat_no']>=215){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=225 && $arrS['seat_no']>=219){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=229 && $arrS['seat_no']>=226){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=233 && $arrS['seat_no']>=230){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=240 && $arrS['seat_no']>=234){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=244 && $arrS['seat_no']>=241){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=248 && $arrS['seat_no']>=245){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=255 && $arrS['seat_no']>=249){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=259 && $arrS['seat_no']>=256){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=263 && $arrS['seat_no']>=260){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=270 && $arrS['seat_no']>=264){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=274 && $arrS['seat_no']>=271){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=276 && $arrS['seat_no']>=275){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=278 && $arrS['seat_no']>=277){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=280 && $arrS['seat_no']>=279){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=282 && $arrS['seat_no']>=281){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=284 && $arrS['seat_no']>=283){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=286 && $arrS['seat_no']>=285){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="7"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                              </table> 
                              </div>
                              <?php }?>                            
                              <?php if($arrC['class_id']==2) {?>
                            <div class="col-md-5">
                              <h3 align="center">แผนผังที่นั่งเรือ ROYAL 1 ชั้นธุรกิจ (Business Class) และ ชั้นห้องส่วนตัว (VIP Room Class)</h3>
                              <table border="0" width="510" style="background-image: url('../../assets/images/ship_body2.jpg');background-repeat: no-repeat;"><tr><td><table width="59%" align="center" border="0">
                                <tr align="center">
                                  <td width="1%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr><tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>

                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>                                
                                <tr align="center">
                                  <td></td>
                                  <td colspan="2"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="3"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="2"></td>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td colspan="2"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="3"></td>
                                  <td>&nbsp;</td>
                                  <td colspan="2"></td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>

                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <?php $sqlS = "select * from tbl_seat where class_id = '3'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']==1){
                                        ?><td colspan="4"><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><br><button type="button" class="btn <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($value_seat){
                                  ?>btn-info<?php 
                                          }
                                          else if($seato){
                                  ?>btn-info<?php 
                                          }
                                        ?> btn-sm"><font size="-2">&nbsp;&nbsp;&nbsp;VIP Room</font><font size="-2"><?php echo $arrS['seat_no'];?></font>&nbsp;&nbsp;&nbsp;</button><br><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button></td><?php 
                                      
                                    }
                                  }?>
                                  <td colspan="1">&nbsp;</td>
                                  <?php $sqlS = "select * from tbl_seat where class_id = '3'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']==2){
                                        ?><td colspan="5"><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><br><button type="button" class="btn <?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($value_seat){
                                  ?>btn-info<?php 
                                          }
                                          else if($seato){
                                  ?>btn-info<?php 
                                          }
                                        ?> btn-sm"><font size="-2">&nbsp;&nbsp;&nbsp;VIP Room</font><font size="-2"><?php echo $arrS['seat_no'];?></font>&nbsp;&nbsp;&nbsp;</button><br><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button><button type="button" class="btn btn-default btn-sm"><font size="-2">*</font></button></td><?php 
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=7 && $arrS['seat_no']>=6){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=5 && $arrS['seat_no']>=3){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=2){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=9 && $arrS['seat_no']>=8){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=12 && $arrS['seat_no']>=10){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=14 && $arrS['seat_no']>=13){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td colspan="2"><button type="button" class="btn btn-default btn-sm"><font size="-2">&nbsp;&nbsp;&nbsp;โต๊ะ&nbsp;&nbsp;&nbsp;</font></button></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><button type="button" class="btn btn-default btn-sm"><font size="-2">&nbsp;&nbsp;&nbsp;โต๊ะ&nbsp;&nbsp;&nbsp;</font></button>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=21 && $arrS['seat_no']>=20){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=19 && $arrS['seat_no']>=17){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=16 && $arrS['seat_no']>=15){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=23 && $arrS['seat_no']>=22){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=26 && $arrS['seat_no']>=24){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=28 && $arrS['seat_no']>=27){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td colspan="2"><button type="button" class="btn btn-default btn-sm"><font size="-2">&nbsp;&nbsp;&nbsp;โต๊ะ&nbsp;&nbsp;&nbsp;</font></button></td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=31 && $arrS['seat_no']>=29){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><button type="button" class="btn btn-default btn-sm"><font size="-2">&nbsp;&nbsp;&nbsp;โต๊ะ&nbsp;&nbsp;&nbsp;</font></button>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=33 && $arrS['seat_no']>=32){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=36 && $arrS['seat_no']>=34){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=38 && $arrS['seat_no']>=37){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=43 && $arrS['seat_no']>=41){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=40 && $arrS['seat_no']>=39){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']==44){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td width="32" height="32"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '1' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

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
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>

                              </table></td></tr></table>                              

                            </div>
                            <?php }?>
                            
                            <?php }?>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                            <center><font color="red">หมายเหตุ</font> <button class="btn btn-info"> xxx</button> : ที่นั่งไม่ว่าง ,<button class="btn btn-danger"> xxx</button> : ห้ามนั่ง ,<button class="btn btn-dark"> xxx</button> : ที่นั่งชำรุด</center>
                </div>
              <?php }?>
        <style>
          
        </style>
        <script>
          
        </script>