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
                              <div class="col-md-12">
                                <h3 align="center">แผนผังที่นั่งเรือ ROYAL 2 ชั้นทั่วไป (Economy Class)</h3>
                                <table width="1500" border="0" style="background-attachment:scroll; background-image:url(../../assets/images/ROYAL2-1.jpg); background-repeat:no-repeat;background-position: center;">
                                  <tr height="58">
                                    <td width="27%">&nbsp;</td>
                                    <td colspan="22" width="57%">&nbsp;</td>
                                    <td width="15%">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=589 && $arrS['seat_id']>=583){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=600 && $arrS['seat_id']>=590){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=571 && $arrS['seat_id']>=565){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=582 && $arrS['seat_id']>=572){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=551 && $arrS['seat_id']>=545){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=564 && $arrS['seat_id']>=552){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=537 && $arrS['seat_id']>=525){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=544 && $arrS['seat_id']>=538){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=517 && $arrS['seat_id']>=505){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=524 && $arrS['seat_id']>=518){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr> 
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=497 && $arrS['seat_id']>=485){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=504 && $arrS['seat_id']>=498){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=479 && $arrS['seat_id']>=467){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=484 && $arrS['seat_id']>=480){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=461 && $arrS['seat_id']>=449){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=466 && $arrS['seat_id']>=462){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=441 && $arrS['seat_id']>=429){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=448 && $arrS['seat_id']>=442){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr> 
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=421 && $arrS['seat_id']>=409){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=428 && $arrS['seat_id']>=422){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=401 && $arrS['seat_id']>=389){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=408 && $arrS['seat_id']>=402){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=375 && $arrS['seat_id']>=369){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=388 && $arrS['seat_id']>=376){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=357 && $arrS['seat_id']>=351){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=368 && $arrS['seat_id']>=358){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=339 && $arrS['seat_id']>=333){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?><td width="32">&nbsp;</td><td width="32">&nbsp;</td><?php 
                                    $sqlS = "select * from tbl_seat where class_id = '4'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=350 && $arrS['seat_id']>=340){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr> 
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr> 
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="22">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
                              </div>

                            <?php 
                            


                            ///////////////////////////////////////////////////////////////////////////////////////////////////////////
                            ///////////////////////////////////////////////////////////////////////////////////////////////////////////



                            ?>
                              <div class="col-md-12">
                                <h3 align="center">แผนผังที่นั่งเรือ ROYAL 2 ชั้นธุรกิจ (Business Class) และ ชั้นห้องส่วนตัว (VIP Room Class)</h3>
                                <table width="1500" border="0" style="background-attachment:scroll; background-image:url(../../assets/images/ROYAL2-2.jpg); background-repeat:no-repeat;background-position: center;">
                                  <tr>
                                    <td width="36%">&nbsp;</td>
                                    <td width="34%" colspan="11">&nbsp;</td>
                                    <td width="30%">&nbsp;</td>
                                  </tr>
                                  <?php for($it=1;$it<=10;$it++){?>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr> 
                                  <?php }?>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '6'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==661){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td width="42" height="32">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '6'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==661){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==654){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=660 && $arrS['seat_id']>=655){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td width="32" height="32" align="center"><font color="#000">&nbsp;</font></td>
                                    <td height="32">&nbsp;</td>
                                    <td width="32" height="32" align="center"><font color="#000">&nbsp;</font></td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==647){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=653 && $arrS['seat_id']>=648){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '6'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==661){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '6'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==661){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==640){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=646 && $arrS['seat_id']>=641){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr> 
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td width="32" height="32" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"><font color="<?php echo $font;?>"></font></td>
                                    <td height="32">&nbsp;</td>
                                    <td width="32" height="32" align="center"><font color="#000">&nbsp;</font></td>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=639 && $arrS['seat_id']>=634){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td height="32">&nbsp;</td>
                                    <td height="32">&nbsp;</td>
                                    <td width="32" height="32" align="center"><font color="#000">&nbsp;</font></td>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=633 && $arrS['seat_id']>=628){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td width="32" height="32" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"><font color="<?php echo $font;?>"></font></td>
                                    <td height="32">&nbsp;</td>
                                    <td width="32" height="32" align="center"><font color="#000">&nbsp;</font></td>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=627 && $arrS['seat_id']>=622){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td width="32" height="32" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"><font color="<?php echo $font;?>"></font></td>
                                    <td height="32">&nbsp;</td>
                                    <td width="32" height="32" align="center"><font color="#000">&nbsp;</font></td>
                                    <td width="32" height="32" align="center"><font color="#000"></font></td>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php for($i=2;$i<=7;$i++){?><td width="32" height="32" align="center"><font color="#000"></font></td><?php }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr> 
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td width="32" height="32" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"><font color="<?php echo $font;?>"></font></td>
                                    <td>&nbsp;</td>
                                    <td width="32" height="32" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"><font color="<?php echo $font;?>"></font></td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==615){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=621 && $arrS['seat_id']>=616){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td width="32" height="32" align="center"><font color="#000">&nbsp;</font></td>
                                    <td height="32">&nbsp;</td>
                                    <td width="32" height="32" align="center"><font color="#000">&nbsp;</font></td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==608){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=614 && $arrS['seat_id']>=609){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td width="32" height="32" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"><font color="<?php echo $font;?>"></font></td>
                                    <td>&nbsp;</td>
                                    <td width="32" height="32" align="center" style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"><font color="<?php echo $font;?>"></font></td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']==601){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW1.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td width="32" height="32" align="center">&nbsp;</td>
                                    <?php 
                                    $sqlS = "select * from tbl_seat where class_id = '5'";
                                    $qrS = mysql_query($sqlS);
                                    while($arrS = mysql_fetch_array($qrS)){
                                      if($arrS['seat_id']<=607 && $arrS['seat_id']>=602){
                                        ?><td width="32" height="32" align="center"<?php 
                                        $seato = mysql_fetch_array(mysql_query("select * from tbl_seat_other a INNER JOIN tbl_seat b ON a.seat_id=b.seat_id where a.seat_id='".$arrS['seat_id']."' and a.seat_other_date = '$dateseatt' and a.fares_id = '".$arr['fares_id']."'"));
                                        $seatst = mysql_fetch_array(mysql_query("select * from tbl_seat where seat_id='".$arrS['seat_id']."' and seat_st = '0'"));
                                        $value_seat = mysql_fetch_array(mysql_query("select * from tbl_reservedet a
                                          INNER JOIN (tbl_reserve b,tbl_calfares c,tbl_class cl,tbl_seat d)
                                          ON (a.reserve_id=b.reserve_id AND b.cal_id=c.cal_id AND c.class_id=cl.class_id AND a.seat_id=d.seat_id)
                                          where a.seat_id='".$arrS['seat_id']."' and a.reservedet_date = '$dateseatt' and c.fares_id = '".$arr['fares_id']."' and cl.ship_id = '2' and b.reserve_cancel = '0' and b.reserve_status != 'D' and a.reservedet_st != '3'"));

                                          if($seatst){$font="#fff";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB3.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($value_seat){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else if($seato){$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EB.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                          else
                                          {$font="#000";
                                            ?> style="background-attachment:scroll; background-image:url(../../assets/images/9EW.jpg); width: 32; background-repeat:no-repeat;background-position: center;"<?php 
                                          }
                                        
                                        ?>><font color="<?php echo $font;?>"><?php echo $arrS['seat_no'];?></font></td><?php  
                                      }
                                    }?>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr> 
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="11">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
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