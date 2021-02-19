        <?php
        include('connect_db.php');
        
        $sql = "select * from tbl_fares";
        $qr = mysql_query($sql);
        if($_GET['valuedate']!="")
        {
          $dateseatt = $_GET['valuedate'];
        }
        else
        {
          $dateseatt = date("Y-m-d");
        }
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
                            <div role="tabpanel"  id="tab_content" aria-labelledby="home-tab">
                              <?php 
                              $sqlC = "select * from tbl_class";
                              $qrC = mysql_query($sqlC);
                              while($arrC = mysql_fetch_array($qrC)){?>
                              <?php if($arrC['class_code']=="E") {?>
                              <div class="col-md-7">
                              <h3 align="center">แผนผังที่นั่งเรือ ROYAL 1 ชั้นทั่วไป (Economy Class)</h3>
                              <table width="100%" align="center" border="0" style="background-image: url('assets/images/ship_body1.jpg');background-repeat: no-repeat;background-position: center center;">
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td rowspan="24">&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=2){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=8 && $arrS['seat_no']>=5){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=23 && $arrS['seat_no']>=20){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=38 && $arrS['seat_no']>=35){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=53 && $arrS['seat_no']>=50){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=68 && $arrS['seat_no']>=65){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=83 && $arrS['seat_no']>=80){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=98 && $arrS['seat_no']>=95){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=113 && $arrS['seat_no']>=110){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=128 && $arrS['seat_no']>=125){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=143 && $arrS['seat_no']>=140){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=158 && $arrS['seat_no']>=155){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=173 && $arrS['seat_no']>=170){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=188 && $arrS['seat_no']>=185){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=203 && $arrS['seat_no']>=200){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=218 && $arrS['seat_no']>=215){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=233 && $arrS['seat_no']>=230){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=248 && $arrS['seat_no']>=245){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=263 && $arrS['seat_no']>=260){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=276 && $arrS['seat_no']>=275){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=280 && $arrS['seat_no']>=279){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '1'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=284 && $arrS['seat_no']>=283){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="7" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="4" width="23%">&nbsp;</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                              </table> 
                              </div>
                              <?php }?>                            
                              <?php if($arrC['class_code']=="B") {?>
                            <div class="col-md-5">
                              <h3 align="center">แผนผังที่นั่งเรือ ROYAL 1 ชั้นธุรกิจ (Business Class) และ ชั้นห้องส่วนตัว (VIP Room Class)</h3>
                              <table border="0" width="100%" style="background-image: url('assets/images/ship_body2.jpg');background-repeat: no-repeat;background-position: center;"><tr><td><table width="60%" align="center" border="0">
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr><tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>

                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>                                
                                <tr align="center">
                                  <td width="5%"></td>
                                  <td colspan="2" width="23%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="23%"></td>
                                </tr>
                                <tr align="center">
                                  <td width="5%"></td>
                                  <td colspan="2" width="23%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="39%"></td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="23%"></td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>

                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <?php $sqlS = "select * from tbl_seat where class_id = '3'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']==1){
                                        ?><td colspan="4"><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><br><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        ?> btn-sm">&nbsp;&nbsp;&nbsp;VIP Room<?php echo $arrS['seat_no'];?>&nbsp;&nbsp;&nbsp;</button><br><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button></td><?php 
                                      
                                    }
                                  }?>
                                  <td colspan="1">&nbsp;</td>
                                  <?php $sqlS = "select * from tbl_seat where class_id = '3'";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']==2){
                                        ?><td colspan="5"><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><br><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        ?> btn-sm">&nbsp;&nbsp;&nbsp;VIP Room<?php echo $arrS['seat_no'];?>&nbsp;&nbsp;&nbsp;</button><br><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button><button type="button" class="btn btn-default btn-sm">*</button></td><?php 
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php if($arrS['seat_no']==10){?>btn-dark<?php }
                                        foreach ($reser as $reserr){
                                          if($reserr['seat_id']==$arrS['seat_id'] && $reserr['reservedet_date']==$dateseatt && $faresid['fares_id']==$reserr['fares_id'] && $reserr['ship_id']==1){
                                            ?>btn-success<?php 
                                          }
                                        }
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td colspan="2"><button type="button" class="btn btn-default btn-sm">&nbsp;&nbsp;&nbsp;โต๊ะ&nbsp;&nbsp;&nbsp;</button></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><button type="button" class="btn btn-default btn-sm">&nbsp;&nbsp;&nbsp;โต๊ะ&nbsp;&nbsp;&nbsp;</button>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=21 && $arrS['seat_no']>=20){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php if($arrS['seat_no']==19){?>btn-dark<?php }
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php if($arrS['seat_no']==27){?>btn-dark<?php }
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <td colspan="2"><button type="button" class="btn btn-default btn-sm">&nbsp;&nbsp;&nbsp;โต๊ะ&nbsp;&nbsp;&nbsp;</button></td>
                                  <td>&nbsp;</td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=31 && $arrS['seat_no']>=29){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><button type="button" class="btn btn-default btn-sm">&nbsp;&nbsp;&nbsp;โต๊ะ&nbsp;&nbsp;&nbsp;</button>
                                </tr>
                                <tr align="center">
                                  <td></td>
                                  <?php 
                                  $sqlS = "select * from tbl_seat where class_id = '2' order by seat_no desc";
                                  $qrS = mysql_query($sqlS);
                                  while($arrS = mysql_fetch_array($qrS)){
                                    if($arrS['seat_no']<=33 && $arrS['seat_no']>=32){
                                      if($arrC['class_id']==$arrS['class_id'] ){
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php if($arrS['seat_no']==42 || $arrS['seat_no']==43){?>btn-dark<?php }
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
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
                                        ?><td><button type="button" class="btn <?php 
                                        $sqlR = "select * from tbl_reservedet where seat_id = '".$arrS['seat_id']."' and reservedet_date = '$dateseatt'";
                                        $qrR = mysql_query($sqlR);
                                        $arrR = mysql_fetch_array($qrR);
                                          $sqlRR = mysql_fetch_array(mysql_query("select * from tbl_reserve where reserve_id = '".$arrR['reserve_id']."'"));
                                          $sqlUS = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$sqlRR['user_id']."'"));
                                          $sqlCal = mysql_fetch_array(mysql_query("select * from tbl_calfares where cal_id = '".$sqlRR['cal_id']."'"));
                                          if($arr['fares_id']==$sqlCal['fares_id'] && $sqlCal['ship_id']==1){
                                  ?><?php 
                                            if($sqlUS['place_id']==1){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-info<?php 
                                              }
                                            }?><?php 
                                            if($sqlUS['place_id']==2){
                                              if($sqlUS['user_type']==A)
                                              {
                                                ?>btn-warning<?php
                                              }
                                              else
                                              {
                                                ?>btn-danger<?php 
                                              }
                                            }?><?php 
                                          }
                                        
                                        ?> btn-sm"><?php echo $arrS['seat_no'];?></button></td><?php 
                                      }
                                    }
                                  }?>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>
                                <tr align="center">
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="3" width="30%">&nbsp;</td>
                                  <td width="5%">&nbsp;</td>
                                  <td colspan="2" width="25%">&nbsp;</td>
                                </tr>

                              </table></td></tr></table>                              

                            </div>
                            <?php }?>
                            
                            <?php }?>
                            <div class="col-md-12">
                            <table width="80%" border="0" align="center">
                                <tr>
                                  <td colspan="10"><font color="red">* หมายเหตุ</font></td>
                                </tr>
                                <tr>
                                  <td colspan="2" align="center"><button type="button" class="btn btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                  <td colspan="3">ขายจากฝั่งพัทยา</td>
                                  <td colspan="1" align="center"><button type="button" class="btn btn-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                  <td colspan="4">ที่นั่งชำรุด รอซ่อม</td>
                                </tr>
                                <tr>
                                  <td colspan="2" align="center"><button type="button" class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                  <td colspan="3">ขายจากฝั่หัวหิน</td>
                                  <td colspan="1" align="center"><button type="button" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                  <td colspan="4">คนยุโรป</td>
                                </tr>
                                <tr>
                                  <td colspan="2" align="center"><button type="button" class="btn btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                  <td colspan="3">แขกพิเศษ MD</td>
                                  <td colspan="1" align="center"><button type="button" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                  <td colspan="4">คนเอเชีย</td>
                                </tr>
                                <tr>
                                  <td colspan="2" align="center"></td>
                                  <td colspan="3"></td>
                                  <td colspan="1" align="center"><button type="button" class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                  <td colspan="4">คนไทย</td>
                                </tr>
                              </table>    
                              </div> 
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              <?php }?>
        