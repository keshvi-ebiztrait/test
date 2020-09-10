<?php
    date_default_timezone_set('America/Los_Angeles');
    // require 'user_common_details.php';
    // require 'commonmodel.php';
    // require 'all_dashboard_counts.php';


    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){

        $is_mobile = 1; 
    } else {
        $is_mobile = 0; 
    }

    require 'menu.php';

    $actual_link1 = "https://blpfirm.com/blackline/";
    // $actual_link1 = "http://localhost/blackline/blackline/";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAM | Simple & Mobile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo $actual_link1;?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="<?php echo $actual_link1;?>bower_components/font-awesome/css/font-awesome.min.css"> -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $actual_link1;?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $actual_link1;?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo $actual_link1;?>dist/css/bootstrap-select.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $actual_link1;?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $actual_link1;?>dist/css/skins/skin-blue.min.css"> 
    <link rel="stylesheet" href="<?php echo $actual_link1;?>dist/css/custom.css">
    <link rel="stylesheet" href="<?php echo $actual_link1;?>dist/css/admin_custom.css">
    <link rel="stylesheet" href="<?php echo $actual_link1;?>dist/css/responsive.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style type="text/css">
        .scrolldwn {
            width: 40px;
            height: 40px;
            position: fixed;
            bottom:0px;
           top:70px;
            right: 100px;
            display: none;
            text-indent: -9999px;
            background: url(https://blpfirm.com/blackline/dist/img/arrow-down.png) no-repeat;
        }
        #last_main_menu div.admin_box_hed.main_sub_bg:hover {
            background: #efefef;
        }
        #last_main_menu div.admin_box_hed.main_sub_bg.selected {
            background: #efefef;
        }
        #sub_main_menu div.admin_box_hed:hover{background: #efefef;}
        #sub_main_menu div.admin_box_hed.selected{background: #efefef;}
    </style>

</head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="sam_logo_img"><img src="dist/img/cpa_logo.png" /></a>
                        </li>
                    </ul>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right cpa_header_ul">
                        <li>
                            <a href="#" class="dropdown-toggle our_techno_font" data-toggle="dropdown">
                                
                                        <img src="https://blpfirm.com/blackline/profile_image/user_1.png" class="login_img" alt="User Image">
                                <?php echo 'Admin';?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right profile_toggle">
                                <li class="sub_header_first">
                                    
                                    <img src="https://blpfirm.com/blackline/profile_image/user_1.png" class="toggle_img" alt="User Image">
                                    
                                    <p><?php echo 'Admin'; ?></p>
                                </li>
                                <li class="sub_footer">
                                    <div class="edit_icon">
                                        <a href="#"><i class="fa fa-edit"></i></a>
                                    </div>
                                    <div class="logout_icon">
                                        <a href="#"><i class="fa fa-sign-out"></i></a>
                                    </div>
                                    
                                </li>
                            </ul>
                        </li>
                    </ul>       
                </div>
            </div>
        </nav>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <!-- <div class="cpa_banner">
            <img src="dist/img/cpa_banner.png">
        </div> -->
        <h2 style="margin-left: 25px;"><a href="document_list.php?ostatus=1" target="_blank">ADMIN CONNECT</a></h2>
    </div>
</div>
<main class="main_content">
    <div class="row">
    <div class="col-md-12">
        <div class="main-container-custom cpa_custom_container">
            <div class="main-container-custom-inner outside_main cpa_custom_inner" id="main_menu">
                <h4>Dashboard</h4>
                <div class="box-hed-shopify admin_box_hed <?= $is_selected_client_ticket ?>">
                    <a href="javascript:void(0)" class="client_ticket box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_create_client_ticket.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Client Tickets</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed">
                    <a href="javascript:void(0)" class="outside_cpa_client_tkt box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_review_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_new_tickets ?>">Outside CPA Client Tickets</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 3; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed <?= $is_selected_pay_commissions ?>">
                    <a href="javascript:void(0)" class="box-shopify lacerte_pay_commi box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_in_preparer_pool.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Lacerte/Pay Commissions</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 5; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed <?= $is_selected_manage_client ?>">
                    <a href="javascript:void(0)" class="box-shopify manage_clients box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_preparing.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Manage Clients</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 7; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed <?= $is_selected_manage_users ?>">
                    <a href="javascript:void(0)" class="box-shopify manage_users box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_in_review.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_tickets ?>">Manage Users</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 3; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed <?= $is_selected_other_menu ?>">
                    <a href="javascript:void(0)" class="box-shopify other_menus box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_active_preparers.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_tickets ?>">Other Menus</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 4; ?>)</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner client_ticket_div" id="last_main_menu" style="<?= $display_pay_client_ticket ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>document_list.php?ostatus=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">New Tickets</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>document_list.php?ostatus=2&assigned=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_new_tickets ?>">Assigned to CPA's</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 7; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>document_list.php?ostatus=2&inreview=0&preparing=1&prep_pool=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Pending in Preparer Pool</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 6; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>document_list.php?ostatus=2&inreview=0&preparing=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Assigned to Preparers</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>document_list.php?ostatus=2&inreview=1&preparing=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_tickets ?>">In Review</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 10; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>document_list.php?ostatus=3" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_tickets ?>">Completed Tickets</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 10; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>index.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">All Orders</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner outside_cpa_client_tkt_div" id="last_main_menu" style="display: none;">
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>outside_cpa_document_list.php?ostatus=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">New Order</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>outside_cpa_document_list.php?ostatus=2&assigned=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_new_tickets ?>">Assigned to CPA's</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 7; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>outside_cpa_document_list.php?ostatus=2&inreview=0&preparing=1&prep_pool=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Preparer Pool</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 6; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>outside_cpa_document_list.php?ostatus=2&inreview=0&preparing=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Preparing</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>outside_cpa_document_list.php?ostatus=2&inreview=1&preparing=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_tickets ?>">In Review</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 10; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>outside_cpa_document_list.php?ostatus=3" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_tickets ?>">Completed Tickets</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 10; ?>)</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner lacerte_pay_commi_div" id="last_main_menu" style="<?= $display_pay_commissions ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_pay_commissions_login ?>">
                    <a href="<?php echo $actual_link1;?>lacerterequestlist.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Login Request</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_pay_commissions_efile ?>">
                    <a href="<?php echo $actual_link1;?>efile_request.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_new_tickets ?>">Efile/Pay Commissions</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 7; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_pay_commissions_paid ?>">
                    <a href="<?php echo $actual_link1;?>complete_transection.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Paid Commission</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 6; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_pay_commissions_pending ?>">
                    <a href="<?php echo $actual_link1;?>prep_pendingcommission.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Pending Commission</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner manage_clients_div" id="sub_main_menu" style="<?= $display_manage_clients ?>">
                <div class="box-hed-shopify admin_box_hed <?= $is_selected_manage_client_register?> ">
                    <a href="<?php echo $actual_link1;?>shopify_client_list.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Clients Registered</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed <?= $is_selected_manage_client_appointment ?>">
                    <a href="<?php echo $actual_link1;?>clients_meeting.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_new_tickets ?>">Clients Appointments</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 7; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed <?= $is_selected_manage_client_create_ticket ?>">
                    <a href="<?php echo $actual_link1;?>addcustomerorder.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Create Client Ticket</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 6; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_client_make_client_payment ?>">
                    <a href="javascript:void(0)" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Make Client Payment</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed">
                    <a href="javascript:void(0)" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Add Customer(Set Prices)</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed <?= $is_selected_manage_client_surveys ?>">
                    <a href="<?php echo $actual_link1;?>clients_review.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Client Surveys</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner make_client_pay_div " id="last_main_menu" style="<?= $display_manage_clients_make_clients_sub ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_client_make_client_payment_sub ?>">
                    <a href="<?php echo $actual_link1;?>clientpayment.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Make a Client Payment</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div> 
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_client_make_client_payment_tax_matters ?>">
                    <a href="<?php echo $actual_link1;?>payment_list_main.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Tax Matters</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_client_make_client_payment_hill_group ?>">
                    <a href="<?php echo $actual_link1;?>payment_list_llc_one.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Morgan Hill Group</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_client_make_client_payment_san_carlos ?>">
                    <a href="<?php echo $actual_link1;?>payment_list_llc_two.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">San Carlos</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>outside_cpa_document_list.php?ostatus=2&inreview=0&preparing=1&prep_pool=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Caswell/Ontario</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_client_make_client_payment_dalton ?>">
                    <a href="<?php echo $actual_link1;?>payment_list_llc_four.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Dalton</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_client_make_client_payment_falsom ?>">
                    <a href="<?php echo $actual_link1;?>payment_list_llc_five.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Falsom</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>outside_cpa_document_list.php?ostatus=2&inreview=0&preparing=1&prep_pool=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Supplementary Invoice</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner manage_users_div" id="last_main_menu" style="<?= $display_manage_users ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_users_admin_users ?>">
                    <a href="<?php echo $actual_link1;?>update_user.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Admin Users</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_users_preparer_users ?>">
                    <a href="<?php echo $actual_link1;?>preparar_user.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_new_tickets ?>">Preparer Users</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 7; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_users_cpa_users ?>">
                    <a href="<?php echo $actual_link1;?>cpa_user.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">CPA Users</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 6; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_users_outside_cpa_users ?>">
                    <a href="<?php echo $actual_link1;?>outside_cpa.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Out Side CPA Users</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_users_all_users ?>">
                    <a href="<?php echo $actual_link1;?>registrationlist.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">All Users</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_manage_users_add_users ?>">
                    <a href="<?php echo $actual_link1;?>add_user.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Add Users</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner other_menus_div" id="sub_main_menu_other" style="<?= $display_other_menu ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg cpa_dashboards <?= $is_selected_cpa_dashboard ?>">
                    <a href="javascript:void(0)" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">CPA Dashboards</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg sales_marketing <?= $is_selected_sales_marketing ?>">
                    <a href="javascript:void(0)" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $review_new_tickets ?>">Sales & Marketing</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 7; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg resume <?= $is_selected_sales_resumes ?>">
                    <a href="javascript:void(0)" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Resumes</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 6; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="#" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Manage Tutorials</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_tutorials ?>">
                    <a href="<?php echo $actual_link1;?>updatetutorials.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Tutorials</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg new_office_regi <?= $is_selected_sales_new_office ?> ">
                    <a href="javascript:void(0)" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">New Office Registration</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg practice_acquisitions <?= $is_selected_sales_practice ?>">
                    <a href="javascript:void(0)" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Practice Acquisitions</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_ic_agreement ?>">
                    <a href="<?php echo $actual_link1;?>ic_agreement.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">IC Agreement Document</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_capital_structure ?>">
                    <a href="<?php echo $actual_link1;?>capital_structure.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Capital Structure</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_company_financial ?>">
                    <a href="<?php echo $actual_link1;?>company_financial_documents.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Company Financial/Trends</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg">
                    <a href="<?php echo $actual_link1;?>outside_cpa_document_list.php?ostatus=2&inreview=0&preparing=1&prep_pool=1" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Shopify Analytics</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_other_domain_list ?>">
                    <a href="<?php echo $actual_link1;?>domain_list.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Domain Registered Names</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg blackline_data_warehouse <?= $is_selected_other_blackline_warehouse ?>">
                    <a href="javascript:void(0)" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Blackline Data Warehouse</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_other_onboard_client ?>">
                    <a href="<?php echo $actual_link1;?>add_client.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Onboard Client</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_other_office_location ?>">
                    <a href="<?php echo $actual_link1;?>blackline_locationlist.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Office Locations</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_other_preparer_plan ?>">
                    <a href="<?php echo $actual_link1;?>preparer_plan.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_completed_tickets.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more <?= $prep_tickets ?>">Preparer Plan</span>
                            <p class="text-center text-bold para_mrg">(<?php echo 9; ?>)</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner cpa_dashboards_div" id="last_main_menu" style="<?= $display_other_menu_sub ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_cpa_dashboard_summary ?>">
                    <a href="<?php echo $actual_link1;?>all_summary.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Summary</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div> 
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_cpa_dashboard_bycpa ?>">
                    <a href="<?php echo $actual_link1;?>cpa_wise_summary.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">By CPA</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner sales_marketing_div" id="last_main_menu" style="<?= $display_sales_marketing ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_marketing_videos ?>">
                    <a href="<?php echo $actual_link1;?>listofvideo.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">List Of Videos</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div> 
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_marketing_email ?>">
                    <a href="<?php echo $actual_link1;?>list_of_campaigns.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">List Of Email Compaigns</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner resume_div" id="last_main_menu" style="<?= $display_sales_resumes ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_resumes_cpa_profile ?>">
                    <a href="<?php echo $actual_link1;?>cpa_profile_backend.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">CPA Profile</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div> 
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_resumes_concierge_profile ?>">
                    <a href="<?php echo $actual_link1;?>coincerge_profile_backend.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Concierge Profile</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_resumes_technology ?>">
                    <a href="<?php echo $actual_link1;?>technology_backend.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Technology</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_resumes_security ?>">
                    <a href="<?php echo $actual_link1;?>security_confidentiality_backend.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Security Confidentiality</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner new_office_regi_div" id="last_main_menu" style="<?= $display_sales_new_office ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_new_office_blackline ?>">
                    <a href="<?php echo $actual_link1;?>blackline_offices_list.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Blackline Registration</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>  
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_new_office_saller ?>">
                    <a href="<?php echo $actual_link1;?>sellersummery.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Saller Registration</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_new_office_employee ?>">
                    <a href="<?php echo $actual_link1;?>emplyee_offices_list.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Employee Registration</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_new_office_client_count ?>">
                    <a href="<?php echo $actual_link1;?>client_summary.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Client Count</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner practice_acquisitions_div" id="last_main_menu" style="<?= $display_sales_practice ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_sales_practice_acquisitions ?>">
                    <a href="<?php echo $actual_link1;?>viewacquisition.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Acquisitions</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div> 
            </div>
            <div class="main-container-custom-inner outside_main cpa_custom_inner blackline_data_warehouse_div" id="last_main_menu" style="<?= $display_other_blackline_warehouse ?>">
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_other_blackline_warehouse_lacerte ?>">
                    <a href="<?php echo $actual_link1;?>importlacerte.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Upload Lacerte</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div> 
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_other_blackline_warehouse_otw ?>">
                    <a href="<?php echo $actual_link1;?>otw_client_list.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Upload OTW</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div> 
                <div class="box-hed-shopify admin_box_hed main_sub_bg <?= $is_selected_other_blackline_warehouse_quickbook ?>">
                    <a href="<?php echo $actual_link1;?>quickbook.php" class="box-shopify box_mrg">
                        <div class="box-shopify-img outside_img adm_sm_img">
                            <img src="dist/img/services/adm_manage_clients.png">
                        </div>
                        <div class="box-shopify-txt">
                            <span class="view_more">Upload Quickbooks</span>
                            <p class="text-center text-bold para_mrg"></p>
                        </div>
                    </a>
                </div> 
            </div>
        </div>
    </div>
    </div>

<div id="cloud9_modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-center">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">CLOUD LOGIN INFO</h4>
            </div>
            <div class="modal-body" id="cloud9_modal_body"></div>
        </div>
    </div>
</div>