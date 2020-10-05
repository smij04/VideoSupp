<?php

    include 'db.php';
    $db->query("use tmp_firm");
    date_default_timezone_set('Europe/Prague');

//    $sql = "INSERT INTO person(password,firstname,lastname,function,email,phone_num,web_page,firm,address,city,psc,ic,dic,noti_email,newsletter) VALUES ('$2y$10$jEnWjDpwYFQxPYdJJDQ6du0J.Xu4osc9Od3LGKp1pfOcJaD.gJiUi','Adam','Sieratowski','Oddeleni Vlasu','info@namagnet.net','+420 727 756 123','www.namagnet.net','Na Magnet s. r. o.','Pod zadnicí 13','Praha 1','110 00','1234567890','CZ1234567890','0','0')";
//$db->query($sql);

?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Zprávy - Videosupp</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/profile.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
     <link rel="stylesheet" href="assets/css/theme-colors/dark-red.css"/>
    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="dark">


<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="profil.php">
                <img src="assets/real/VS-logo-ok.png" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
                <div class="topbar">
                <ul class="loginbar pull-right">
                
                    <li class="hoverSelector">
                        <i class="fa fa-globe"></i>
                        <a>Jazyky</a>
                        <ul class="languages hoverSelectorBlock">
                            <li class="active">
                                <a href="#">Česky <i class="fa fa-check"></i></a>
                            </li>
                            <li><a href="#">Anglicky</a></li>
                            <li><a href="#">Německy</a></li>
                            <li><a href="#">Rusky</a></li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>
                    <li><a href="#">Denní mód</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href="index.php">Logout</a></li>                                
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
            
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        
    </div>
    <!--=== End Header ===-->

    <!--=== Profile ===-->
    <div class="container content profile">
    	<div class="row">
            <!--Left Sidebar-->
            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive profile-img margin-bottom-20" src="assets/img/team/img32-md.jpg" alt="">
                
        <div class="onoffswitch margin-bottom-20">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
        <label class="onoffswitch-label" for="myonoffswitch">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>

                
                
                <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                    <li class="list-group-item">
                        <a href="profil.php"><i class="fa fa-bar-chart-o"></i> Nástěnka</a>
                    </li>
                    <li class="list-group-item active">
                        <a href="zpravy.php"><i class="fa fa-comments"></i> Zprávy a upozornění</a>
                    </li>
                    <li class="list-group-item">
                        <a href="ikona.php"><i class="fa fa-user"></i> Ikona na stránkách</a>
                    </li>
                    <li class="list-group-item">
                        <a href="automat.php"><i class="fa fa-paper-plane"></i> Automatické zprávy</a>
                    </li>                   
                    <li class="list-group-item">
                        <a href="statistiky.php"><i class="fa fa-history"></i> Statistiky a historie</a>
                    </li>
                    <li class="list-group-item">
                        <a href="nastaveni.php"><i class="fa fa-cog"></i> Nastavení</a>
                    </li>
                </ul>

                <!--Notification-->
               <div class="panel-heading-v2 overflow-h">
                    <h2 class="heading-xs pull-left"><i class="icon-users"></i> Poradci</h2> <a href="#" title="Hromadná zpráva"><i class="fa fa-comments pull-right"  style="color:rgb(153, 153, 153);"></i></a>
                </div>
                <ul class="list-unstyled mCustomScrollbar margin-bottom-20" data-mcs-theme="minimal-dark">
                      <li class="notification">
                         <img class="rounded-x" src="assets/img/testimonials/img4.jpg" alt=""> 
                        <div class="overflow-h">
                            <span><strong>Adam Sieratowski</strong> 
                            <a href="#" title="Zpráva"><i class="fa fa-comments pull-right" style="padding-top: 4px;margin-right:0px;"></i></a>
                            <a href="#" title="Volání"><i class="fa fa-phone pull-right" style="padding-top: 4px;margin-right:0px;"></i></a>
                            <a href="#" title="Video"><i class="fa fa-video-camera pull-right" style="padding-top: 4px; margin-right:0px;"></i></a>
                            </span>
                            <small>Oddělení vlasů</small> <span class="pull-right"><font color="green"> online</font> </span>
                        </div>
                    </li>
                    <li class="notification">
                        <img class="rounded-x" src="assets/img/testimonials/img6.jpg" alt="">
                        <div class="overflow-h">
                            <span><strong>Tomáš Nimmerrichter</strong> <a href="#" title="Zpráva"><i class="fa fa-envelope pull-right" style="padding-top: 4px;margin-right:0px;"></i></a></span>
                            <small>Antroposofie</small> <span class="pull-right"><font color="red"> offline</font></span>                                                      
                        </div>
                    </li>
                     <li class="notification">
                        <i class="icon-custom icon-sm rounded-x icon-bg-yellow icon-line fa fa-bolt"></i>
                        <div class="overflow-h">
                            <span><strong>Mirek Lipovský</strong>
                            <a href="#" title="Zpráva"><i class="fa fa-comments pull-right" style="padding-top: 4px;margin-right:0px;"></i></a>
                            <a href="#" title="Volání"><i class="fa fa-phone pull-right" style="padding-top: 4px;margin-right:0px;"></i></a>
                            <a href="#" title="Video"><i class="fa fa-video-camera pull-right" style="padding-top: 4px; margin-right:0px;"></i></a>
                            </span>
                            <small>Oddělení IT</small> <span class="pull-right"><font color="green"> online</font> </span>
                        </div>
                    </li>

                </ul>
                
                <!--
                <button type="button" class="btn-u btn-u-default btn-u-sm btn-block">Load More</button>
                End Notification-->

                <div class="margin-bottom-50"></div>

                
            </div>
            <!--End Left Sidebar-->

            <!-- Profile Content -->
            <div class="col-md-9">
                <div class="profile-body" style="padding-bottom:100px;">
                  

                    <div class="row">
                    
                    <div class="col-sm-7">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments-o"></i> Zprávy</h2>
                                    
                                    <ul class="pagination pagination-sm pull-right" style="margin-top:0px;margin-bottom:0px;">
                            <li><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                                <div id="scrollbar4" class="panel-body no-padding" data-mcs-theme="minimal-dark">
                                    <?php
                                    $tmp = $db->prepare("SELECT * FROM messages;");
                                    $tmp->execute();
                                    $mes = $tmp->fetchAll();

                                    foreach ($mes as $item) {?>
                                        <?php
                                        $to_time = strtotime($item['time']);
                                        $from_time = strtotime(date("Y-m-d h:i:s"));
                                        $minutes = round(abs($to_time - $from_time) / 60,0);

                                        if ( $minutes == 0 ) {
                                            $time = "Právě teď";
                                        }
                                        if ( $minutes > 0 && $minutes < 60 ) {
                                            $time = $minutes . "m";
                                        }
                                        if ( $minutes >= 60 && $minutes < 1440) {
                                            $time = round($minutes / 60,0) . "h";
                                        }
                                        if ( $minutes >= 1440) {
                                            $time = round($minutes / 1440,0) . "d";
                                        }

                                        ?>
                                        <?php if ($item['prectena'] == 0) {?>
                                            <div class="comment neprectena">
                                            <?php if ($item['img'] == '') {?>
                                                <i class="icon-custom  icon-bg-red icon-line icon-envelope" style="float:left;width:50px;height:50px; margin-right:15px; font-size:25px;padding-top:5px;"></i>
                                            <?php } else {?>
                                                <img src="<?= $item['img']?>" alt="">
                                            <?php }?>
                                                <div class="overflow-h">
                                                    <strong><a href data-toggle="modal" data-target=".zprava-odpoved" class="neprectene"><?= $item['name']?></a><small class="pull-right"> <?= $time?></small></strong>
                                                    <p><?= $item['message']?></p>

                                                </div>
                                            </div>

                                        <?php } if ($item['prectena'] == 1){?>
                                            <div class="comment">
                                            <?php  if ($item['img'] == '') {?>
                                                <i class="icon-custom  icon-bg-red icon-line icon-envelope" style="float:left;width:50px;height:50px; margin-right:15px; font-size:25px;padding-top:5px;"></i>
                                            <?php } else {?>
                                                <img src="<?= $item['img']?>" alt="">
                                            <?php } ?>

                                                <div class="overflow-h">
                                                    <strong><?= $item['name']?><small class="pull-right"> <?= $time?></small></strong>
                                                    <p><?= $item['message']?></p>

                                                </div>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    
                        <!--Alert-->
                        <div class="col-sm-5 sm-margin-bottom-30">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-bell-o"></i> Upozornění</h2>
                                    <ul class="pagination pagination-sm pull-right" style="margin-top:0px;margin-bottom:0px;">
                            <li><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">»</a></li>
                        </ul>                                     
                                </div>
                                <div id="scrollbar3" class="panel-body no-padding" data-mcs-theme="minimal-dark">

                                    <?php
                                        $tmp = $db->prepare("SELECT * FROM notifications;");
                                        $tmp->execute();
                                        $notif = $tmp->fetchAll();

                                        foreach ($notif as $item) {?>
                                            <?php
                                            $to_time = strtotime($item['time']);
                                            $from_time = strtotime(date("Y-m-d h:i:s"));
                                            $minutes = round(abs($to_time - $from_time) / 60,0);

                                            if ( $minutes == 0 ) {
                                                $time = "Právě teď";
                                            }
                                            if ( $minutes > 0 && $minutes < 60 ) {
                                                $time = "Před " . $minutes . " minutami";
                                            }
                                            if ( $minutes >= 60 && $minutes < 1440) {
                                                $time = "Před " . round($minutes / 60,0) . " hodinami";
                                            }
                                            if ( $minutes >= 1440  && $minutes < 2880) {
                                                $time = "Před " . round($minutes / 1440,0) . " dnem";
                                            }
                                            if ( $minutes >= 2880 ) {
                                                $time = "Před " . round($minutes / 1440,0) . " dny";
                                            }

                                            ?>
                                            <?php if ($item['type'] == 'Platby' ) {?>
                                                <div class="alert-blocks alert-blocks-pending alert-dismissable">
                                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                                    <i class="icon-custom rounded-x icon-bg-yellow fa fa-info"></i>
                                                    <div class="overflow-h">
                                                        <strong class="color-yellow"><?= $item['type']?> <small class="pull-right"><em><?= $time?></em></small></strong>
                                                        <p><?php echo $item['text_od_noti'];?> <a href="<?= $item['link']?>"><?= $item['link_name']?></a></p>
                                                    </div>
                                                </div>
                                            <?php } if ($item['type'] == 'Nastavení' ) {?>
                                                <div class="alert-blocks alert-blocks-info alert-dismissable">
                                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                                    <i class="icon-custom rounded-x icon-bg-blue fa fa-bolt"></i>
                                                    <div class="overflow-h">
                                                        <strong class="color-blue"><?= $item['type']?> <small class="pull-right"><em><?= $time?></em></small></strong>
                                                        <p><?= $item['text_od_noti']?> <a href="<?= $item['link']?>"><?= $item['link_name']?></a></p>
                                                    </div>
                                                </div>
                                            <?php } if ($item['type'] == 'Zmeskaný chat' ) {?>
                                                <div class="alert-blocks alert-blocks-error alert-dismissable">
                                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                                     <img class="rounded-x" src="<?= $item['name_of_user']?>" alt="">
                                                     <div class="overflow-h">
                                                            <strong class="color-red"><?= $item['type']?> <small class="pull-right"><em><?= $time?></em></small></strong>
                                                            <p><?= $item['text_od_noti']?> <a href="<?= $item['link']?>"><?= $item['link_name']?></a></p>
                                                     </div>
                                                </div>
                                            <?php }?>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!--End Alert-->
                        

                        
                    </div><!--/end row-->

                   
            </div>
            </div><!-- End Profile Content -->



    </div><!--/end row-->
    </div><!--/container-->
    <div class="modal fade zprava-odpoved" tabindex="-1" role="dialog" aria-labelledby="zprava-odpoved" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 id="myLargeModalLabel3" class="modal-title"><b>Tomáš Nimmerrichter</b></h4>
                                    </div>
                                    <div class="modal-body">
                                        
                            <div class="neprectena">
                                
                                <div id="scrollbar4" class="panel-body no-padding mCustomScrollbar" data-mcs-theme="minimal-dark">
                                  
                                     <div id="testimonials-2" class="testimonials testimonials-v1 prvni-zprava">
                                    
                                    <div class="odcas">
                                    <h2 class="pull-left popisek-datum-vy"><strong>Tomáš Nimmerrichter</strong></h2> <h2 class="pull-right popisek-jmeno-vy">12:37</h2>
                                     </div>
                                    <div class="item bublinapro">
                                    <p class="rounded bila" style="background-color:#008000">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium </p>
 
                                    </div>
                                     <div class="odcas">
                                     <h2 class="pull-right popisek-jmeno-ja"><strong>Vy</strong></h2><h2 class="pull-left popisek-datum-ja">12:37</strong></h2>
                                      </div>
                                    
                                    <div class="item bublinaode" >
                                    <p class="rounded bila" style="background-color:#000080;">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos </p>
                                   
                                        
                                    </div>
                                    <div class="item bublinaode" >
                                    <p class="rounded bila" style="background-color:#000080;">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos </p>
                                   
                                        
                                    </div>
                                    <div class="item bublinaode" >
                                    <p class="rounded bila" style="background-color:#000080;">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos </p>
                                   
                                        
                                    </div>
                                      <div class="odcas">
                                    <h2 class="pull-left popisek-datum-vy"><strong>Tomáš Nimmerrichter</strong></h2> <h2 class="pull-right popisek-jmeno-vy">12:35</h2>
                                     </div>
                                    <div class="item bublinapro">
                                    <p class="rounded bila" style="background-color:#008000">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium </p>
                                    </div>
                                    <div class="odcas">
                                     <h2 class="pull-right popisek-jmeno-ja"><strong>Vy</strong></h2><h2 class="pull-left popisek-datum-ja">12:35</strong></h2>
                                      </div>
                                    <div class="item bublinaode" >
                                    <p class="rounded bila" style="background-color:#000080;">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos </p>
                                   
                                        
                                    </div>
                                </div>  
                                </div>
                            </div>
                            
                             <form action="" method="post" id="sky-form3" class="sky-form" style="border:none; margin-top:20px;">
   <section>
                            <label class="textarea">
                                <i class="icon-append fa fa-comment"></i>
                                <textarea rows="4" name="message" id="message" placeholder="Napište zprávu..."></textarea>
                            </label>
                        </section>
                        
                        <button type="submit" class="btn-u" style="margin-left:43%; margin-bottom:10px;">Odeslat zprávu</button>
 </form>
                        
                    
                        <!--Alert-->
                                    </div>
                                    
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /Vyskakovací okno - zprava-odpoved -->
    
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 id="myLargeModalLabel3" class="modal-title"><b>Text-122</b></h4>
                                    </div>
                                    <div class="modal-body">
                                        
                            <div class="neprectena">
                                
                                <div id="scrollbar4" class="panel-body no-padding mCustomScrollbar" data-mcs-theme="minimal-dark">
                                  
                                     <div id="testimonials-2" class="testimonials testimonials-v1 prvni-zprava">
                                    
                                    <div class="odcas">
                                    <h2 class="pull-left popisek-datum-vy"><strong>Text-122</strong></h2> <h2 class="pull-right popisek-jmeno-vy">12:37</h2>
                                     </div>
                                    <div class="item bublinapro">
                                    <p class="rounded bila" style="background-color:#008000">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium </p>
 
                                    </div>
                                     <div class="odcas">
                                     <h2 class="pull-right popisek-jmeno-ja"><strong>Vy</strong></h2><h2 class="pull-left popisek-datum-ja">12:37</strong></h2>
                                      </div>
                                    
                                    <div class="item bublinaode" >
                                    <p class="rounded bila" style="background-color:#000080;">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos </p>
                                   
                                        
                                    </div>
                                    <div class="item bublinaode" >
                                    <p class="rounded bila" style="background-color:#000080;">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos </p>
                                   
                                        
                                    </div>
                                    <div class="item bublinaode" >
                                    <p class="rounded bila" style="background-color:#000080;">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos </p>
                                   
                                        
                                    </div>
                                      <div class="odcas">
                                    <h2 class="pull-left popisek-datum-vy"><strong>Text-122</strong></h2> <h2 class="pull-right popisek-jmeno-vy">12:35</h2>
                                     </div>
                                    <div class="item bublinapro">
                                    <p class="rounded bila" style="background-color:#008000">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium </p>
                                    </div>
                                    <div class="odcas">
                                     <h2 class="pull-right popisek-jmeno-ja"><strong>Vy</strong></h2><h2 class="pull-left popisek-datum-ja">12:35</strong></h2>
                                      </div>
                                    <div class="item bublinaode" >
                                    <p class="rounded bila" style="background-color:#000080;">Cras justo odio, dapibus ac facilisis into egestas. Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos </p>
                                   
                                        
                                    </div>
                                </div>  
                                </div>
                            </div>
                        
                           
                        <!--Alert-->
                                    </div>
                                    
                                    </form>
                                    </div>
                                </div>
                            </div>
                       

                        <!-- /Vyskakovací okno - zprava2 -->
    <!--=== End Profile ===-->
     <div class="footer-v1">
    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
						<p>
							2016 &copy; Byznys & Trade Solutions Point s. r. o.
						   <a href="#">Ochrana soukromí</a> | <a href="#">Podmínky užívání</a>
						</p>
					</div>

					<!-- Social Links -->
					<div class="col-md-5">
						<ul class="footer-socials list-inline">
							<li>
								<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
									<i class="fa fa-skype"></i>
								</a>
							</li>
							<li>
								<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
									<i class="fa fa-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- End Social Links -->
          <div class="col-md-1">
          <p><a href="#" ><b>Podpora</b></a> </p>
          </div>
				</div>
			</div> <!--/copyright-->
        </div>

</div>

<!--=== End Wrapper ===-->     

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript" src="assets/js/plugins/masking.js"></script>
<script type="text/javascript" src="assets/js/plugins/datepicker.js"></script>
<script type="text/javascript" src="assets/js/plugins/validation.js"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        Masking.initMasking();
        Datepicker.initDatepicker();
        Validation.initValidation();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->
<!--[if lt IE 10]>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->
</body>
</html>
