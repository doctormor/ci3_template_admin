<?php 
ob_start();
session_start();
include("connect_db.php");
date_default_timezone_set('Asia/Bangkok');
?>
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <?php $alertreserve = mysql_query("SELECT * FROM tbl_reserve 
                                            INNER JOIN tbl_user ON tbl_user.user_id=tbl_reserve.user_id 
                                            WHERE tbl_reserve.reserve_status = 'W'
                                            AND tbl_reserve.reserve_cancel = '0'
                                            AND tbl_reserve.reserve_method = 'API'
                                            GROUP BY tbl_reserve.bid DESC");?>
                    <?php 
                      $al = 0;
                      while($alerr = mysql_fetch_array($alertreserve)){
                        $al = $al + 1;
                      }

                    ?>
                    <?php if($al!=0){?><span class="badge bg-green"><?php echo number_format($al);?></span><?php }?>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <?php $alertreserve1 = mysql_query("SELECT * FROM tbl_reserve 
                                            INNER JOIN tbl_user ON tbl_user.user_id=tbl_reserve.user_id 
                                            WHERE tbl_reserve.reserve_status = 'W'
                                            AND tbl_reserve.reserve_cancel = '0'
                                            AND tbl_reserve.reserve_method = 'API'
                                            GROUP BY tbl_reserve.bid DESC");?>
                    <?php while($alerr1 = mysql_fetch_assoc($alertreserve1)){?>
                    <li>
                      <a href="https://www.royalferrygroup.com/ferrybooking/rpladmin_api/check/<?php echo $alerr1['bid'];?>">
                        <?php if($alerr1['reserve_status']=="P"){?>
                        <span class="label label-info">Booking</span>
                        <?php }else if($alerr1['reserve_status']=="W"){?>
                        <span class="label label-warning">Pending</span>
                        <?php }?>
                        <span>
                          <span><?php $rdate1 = explode(" ", $alerr1['reserve_date']);
                              $rdate = explode("-", $rdate1[0]); echo "Voucher #".substr($rdate[0],2,4).$alerr1['bid'];?></span>
                          <span class="time"><?php $rsdate = explode(" ", $alerr1['reserve_date']); echo $rsdate[0]."<br>".$rsdate[1];?></span>
                        </span>
                        <span class="message">
                          <?php echo $alerr1['name']." ".$alerr1['surname'];?>
                        </span>
                      </a>
                    </li>
                    <?php }?>
                  </ul>
