<?php

include 'db.php';
$db->query("use tmp_firm");
date_default_timezone_set('Europe/Prague');
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Nástěnka - Videosupp</title>

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
                    <li><a href="platby.php">Platby</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href="index.php">Logout</a></li>
                    </ul>                                
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
            <a href="signal.php" target="_blank"><span class="onoffswitch-inner"></span>  </a>
            <span class="onoffswitch-switch"></span> 
        </label>
    </div>

                
                
                <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                    <li class="list-group-item active">
                        <a href="profil.php"><i class="fa fa-bar-chart-o"></i> Nástěnka</a>
                    </li>
                    <li class="list-group-item">
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
                <ul class="list-unstyled " data-mcs-theme="minimal-dark">
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

                              
            </div>
            <!--End Left Sidebar-->

            <!-- Profile Content -->
            <div class="col-md-9">
                <div class="profile-body" style="padding-bottom:20px;">
                    <!--Service Block v3-->
                    <div class="row margin-bottom-10">
                    <div class="alert alert-warning fade in" style="margin-left:15px;margin-right:15px;">
                                <strong>Varování:</strong> Dokud nepotvrdíte Váš e-mail, nemůžete začít VideoSupp používat. <a href="#" class="alert-link pull-right">Znovu zaslat verifikační e-mail</a>
                            </div>
                        <div class="col-sm-6 sm-margin-bottom-20">
                            <div class="service-block-v3 service-block-u">
                               <i class="icon-pie-chart"></i>
                                <span class="service-heading">Dnes chatů</span>
                                <span class="counter">200</span>

                                <div class="clearfix"></div>

                                <div class="statistics">
                                <h3 class="heading-xs">Video chat - <b>110</b> <span class="pull-right">55%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 55%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" role="progressbar" class="progress-bar progress-bar-light">
                                        </div>
                                    </div>
                                </div><div class="statistics">
                                <h3 class="heading-xs">Hlasový chat - <b>64</b> <span class="pull-right">32%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 32%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="32" role="progressbar" class="progress-bar progress-bar-light">
                                        </div>
                                    </div>
                                </div>
                                <div class="statistics">
                                <h3 class="heading-xs">Textový chat - <b>26</b> <span class="pull-right">13%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 13%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="13" role="progressbar" class="progress-bar progress-bar-light">
                                        </div>
                                    </div>
                                    <a href="statistiky.php"><small>Všechny statistiky</small></a>
                                </div> 
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="service-block-v3 service-block-blue">
                            <i class="icon-screen-desktop"></i>
                                <span class="service-heading">Dnešní přehled</span>
                                

                                <div class="clearfix" style="margin-bottom:22px"></div>

                                <div class="row margin-bottom-20">
                                    <div class="col-xs-6 service-in">
                                        <small>Nyní na webu</small>
                                        <h4 class="counter">1 385</h4>
                                    </div>
                                    <div class="col-xs-6 text-right service-in">
                                        <small>Dnes celkem</small>
                                        <h4 class="counter">6 048</h4>
                                    </div>
                                </div>
                                <div class="statistics">
                                <h3 class="heading-xs">Stav vyplnění profilu <span class="pull-right">67%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 67%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="67" role="progressbar" class="progress-bar progress-bar-light">
                                        </div>
                                    </div>
                                    <a href="ikona.php"><small>Nastavení ikony <strong></strong></small></a><a href="automat.php" class="pull-right"><small>Nastavení automatických zpráv <strong></strong></small></a>
                                </div>
                                
                            </div>
                        </div>
                    </div><!--/end row-->
                    <!--End Service Block v3-->

                    <div class="row">
                    
                    <div class="col-sm-7">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments-o"></i> Nepřečtené zprávy</h2>
                                    <a href="zpravy.php" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-xs pull-right">Zobrazit vše</a>
                                </div>
                                <div id="scrollbar4" class="panel-body no-padding mCustomScrollbar" data-mcs-theme="minimal-dark">
                                    <?php
                                    $tmp = $db->prepare("SELECT * FROM messages WHERE prectena = 0;");
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

                                    <div class="comment">
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
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    
                        <!--Alert-->
                        <div class="col-sm-5 sm-margin-bottom-30">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-bell-o"></i> Upozornění</h2>
                                     <a href="zpravy.php" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-xs pull-right">Zobrazit vše</a>
                                </div>
                                <div id="scrollbar3" class="panel-body no-padding mCustomScrollbar" data-mcs-theme="minimal-dark">
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

</div>


<!--=== End Wrapper ===-->     

<!-- JS Global Compulsory -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="assets/plugins/back-to-top.js"></script>
<script src="assets/plugins/smoothScroll.js"></script>

<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- JS Page Level -->
<script src="assets/js/app.js"></script>
<script>
jQuery(document).ready(function() {
    App.init();
});
</script>

<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>
</html>
