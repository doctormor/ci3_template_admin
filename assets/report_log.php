        <style>
          
        </style>
        <?php
        include('connect_db.php');
        
        if($_GET['mid']=="all" && $_GET['uid']!="all")
        {
          $dateseatt = $_GET['valuedate'];
          $mid = $_GET['mid'];
          $uid = $_GET['uid'];

          $sql = "select * from tbl_log where user_id = '$uid' and DATE(log_date) = '$dateseatt' ORDER BY log_id DESC";
          $qr = mysql_query($sql);
        }
        else if($_GET['uid']=="all" && $_GET['mid']!="all")
        {
          $dateseatt = $_GET['valuedate'];
          $mid = $_GET['mid'];
          $uid = $_GET['uid'];

          $sql = "select * from tbl_log where menu_sub_id = '$mid' and DATE(log_date) = '$dateseatt' ORDER BY log_id DESC";
          $qr = mysql_query($sql);
        }
        else if($_GET['mid']=="all" && $_GET['uid']=="all")
        {
          $dateseatt = $_GET['valuedate'];
          $mid = $_GET['mid'];
          $uid = $_GET['uid'];

          $sql = "select * from tbl_log where DATE(log_date) = '$dateseatt' ORDER BY log_id DESC";
          $qr = mysql_query($sql);
        }
        else
        {
          $dateseatt = date("Y-m-d");
          $mid = $_GET['mid'];
          $uid = $_GET['uid'];
          $sql = "select * from tbl_log where user_id = '$uid' and menu_sub_id = '$mid' and DATE(tbl_log.log_date) = '$dateseatt' ORDER BY log_id DESC";
          $qr = mysql_query($sql);
        }
        $today = explode("-", $dateseatt);
        ?>
          <div class="col-md-12 well"">
            <div class="modal-header">
              <h3 class="modal-title" id="myModalLabel"><i class="fa fa-cart"></i><button type="button" onclick="printDiv('printPassenger<?php echo $plac['place_id'];?>')" class="btn btn-info"><i class="fa fa-print"></i> Print</button></h3>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" id="tab_content" aria-labelledby="home-tab">
                      <div id="printPassenger<?php echo $plac['place_id'];?>">
                        <div class="printarea">
                          <div class="well">
                            <table width="95%" class="table table-striped table-bordered" align="center" border="1" cellpadding="">
                              <tr>
                                <td width="1%" align="center"><img src="../assets/images/rpl_logo_100.jpg"></td>
                                <td colspan="8" width="50%">
                                  <h3><strong>ข้อมูลการเข้าใช้งานระบบ</strong></h3>
                                  <h4>Royal Passenger Liner Co.,Ltd.</h4>
                                  ประจำวันที่<?php echo $dateseatt;?>
                                </td>
                              </tr>
                              <tr>
                                <td>User</td>
                                <td width="15%">Log Title</td>
                                <td>Date</td>
                                <td>During</td>
                                <td>Status</td>
                                <td>Menu</td>
                                <td>Sub Menu</td>
                                <td>IP ADD</td>
                              </tr>
                              <?php while($arr = mysql_fetch_array($qr)){
                                $menu = mysql_fetch_array(mysql_query("select * from tbl_menu_sub inner join tbl_menu on tbl_menu.menu_id=tbl_menu_sub.menu_id where tbl_menu_sub.menu_sub_id = '".$arr['menu_sub_id']."'"));
                                $user = mysql_fetch_array(mysql_query("select * from tbl_user where user_id = '".$arr['user_id']."'"));
                              ?>
                              <tr>
                                <td><?php if($user['name']!=""){echo $user['name'];}else{echo $arr['user_id'];}?></td>
                                <td><?php echo $arr['log_name'];?></td>
                                <td><?php if($arr['log_st']==1){echo "ตั้งแต่";}else{echo "จนถึง";}?></td>
                                <td><?php echo $arr['log_date'];?></td>
                                <td><?php if($arr['log_during']=="0"){echo "เริ่ม";}else{echo "เป็นเวลา ".$arr['log_during'];}?></td>
                                <td><?php if($menu['menu_name']!=""){echo $menu['menu_name'];}else{echo $arr['menu_sub_id'];}?></td>
                                <td><?php if($menu['menu_sub_name']!=""){echo $menu['menu_sub_name'];}else{echo $arr['menu_sub_id'];}?></td>
                                <td><?php echo $arr['log_ip'];?></td>
                              </tr>
                              <?php }?>
                            </table>  
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>

            function printDiv(divName) {

                 var printContents = document.getElementById(divName).innerHTML;
                 var originalContents = document.body.innerHTML;

                 document.body.innerHTML = printContents;

                 window.print();

                 document.body.innerHTML = originalContents;

                 setTimeout(function(){
                  $('#myModal').modal('hide')
              }, 100);
            }

          </script>