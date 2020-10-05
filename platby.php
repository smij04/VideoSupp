<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Platby - Videosupp</title>

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
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>

                
                
                <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                    <li class="list-group-item">
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
                        <div class="service-block-v3 service-block-u" style="margin: 15px 15px 15px 15px">
                               
                                <span class="service-heading">Účet</span>
                                <span class="counter">FLEXIBLE</span>

                                <div class="clearfix" style="margin-bottom:22px"></div>

                                 <div class="row margin-bottom-20">
                                    <div class="col-xs-4  service-in">
                                        <small>Počet poradců</small>
                                        <h4 class="counter">3</h4>
                                    </div>
                                    <div class="col-xs-4 service-in" style="text-align:center;">
                                        <small>Platba</small>
                                        <h4 class="counter">1 470 Kč</h4>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-xs-4 service-in text-right">
                                        <small>Platnost</small>
                                        <h4 class="counter">21. 6. 2016</h4>
                                    </div>
                                </div>
                                
                               
                                
                                    <form class="sky-form">
                                    <section>
                            <div class="row" style="margin: 0px 5% 0px 5%;">
                                <div class="col col-4">
                                    <label class="radio bila"><input name="radio" checked="" type="radio"><i class="rounded-x"></i>1 měsíc</label>
                                </div>
                                <div class="col col-4">
                                    <label class="radio bila"><input name="radio" type="radio"><i class="rounded-x"></i>6 měsíců - sleva 10%</label>
                                </div>
                                <div class="col col-4">
                                    <label class="radio pull-right bila"><input name="radio" type="radio"><i class="rounded-x"></i>12 měsíců - sleva 20%</label>
                                    </div>
                            </div>
                        </section>
                        </form>
                                  <div class="title-v1" style="margin-bottom:5px;margin-top:20px;">
          <div class="btn btn-default rounded tlac-bila tlazvyraz"><a href="platba-2.php"><b>Zaplatit</b></a></div>
          </div>
                            
                                 
                                   <div class="statistics">  
                                    <a href="nastaveni .php"><small>Kód na stránky naleznete v nastavení</small></a><a href="#.php" class="pull-right"><small>Pokračováním souhlasíte s Podmínkami užívání</small></a>
                                </div>
                               
                               </div>
                        
                        
                            <div class="profile-edit" style="margin: 15px 15px 15px 15px;">
                              
                                <br>
                                <dl class="dl-horizontal">
                                    <dt><strong>Firma </strong></dt>
                                    <dd>
                                        Na Magnet s. r. o.
                                        <span>
                                            <a class="pull-right" href="#">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </span>
                                    </dd>
                                    <hr>
                                    <dt><strong>Fakturační adresa </strong></dt>
                                    <dd>
                                        Pod zadnicí 13
                                        <span>
                                            <a class="pull-right" href="#">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </span>
                                    </dd>
                                    <hr>
                                    <dt><strong>Město </strong></dt>
                                    <dd>
                                        Praha 1
                                        <span>
                                            <a class="pull-right" href="#">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </span>
                                    </dd>
                                    <hr>
                                    <dt><strong>PSČ </strong></dt>
                                    <dd>
                                        110 00
                                        <span>
                                            <a class="pull-right" href="#">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </span>
                                    </dd>
                                    <hr>
                                    <dt><strong>IČ </strong></dt>
                                    <dd>
                                        1234567890
                                        <span>
                                            <a class="pull-right" href="#">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </span>
                                    </dd>
                                    <hr>
                                    <dt><strong>DIČ </strong></dt>
                                    <dd>
                                        CZ1234567890
                                        <span>
                                            <a class="pull-right" href="#">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </span>
                                    </dd>
                                    <hr>
                                    </dl>
                                <button type="button" class="btn-u btn-u-default">Zrušit</button>
                                <button type="button" class="btn-u">Uložit</button>
                                
                            
                            
                    </div><!--/end row-->
                    <!--End Service Block v3-->
                    
                       <div class="row profile" style="margin:15px 15px 10px 15px;">        <!--tabulka-->
                    
                        <div class="panel  margin-bottom-40">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-files-o"></i> Dokumenty <a href data-toggle="modal" data-target=".bs-example-modal-sm"><i class="icon-calendar pull-right"></i></a></h3>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Číslo</th>
                                        <th>Typ</th>
                                        <th>Částka</th>
                                        <th>Datum</th>
                                        <th>Stav</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1610390</td>
                                        <td>Proforma</td>
                                        <td>1470 Kč</td>
                                        <td>21. 5. 2016</td>
                                        <td>Čeká na zaplacení</td>
                                        <td><button class="btn btn-danger btn-xs"><i class="fa fa-cloud-download"></i> PDF</button></td>
                                    </tr>
                                    <tr>
                                        <td>1616389</td>
                                        <td>Faktura</td>
                                        <td>1470 Kč</td>
                                        <td>21. 4. 2016</td>
                                        <td>Zaplaceno</td>
                                        <td><button class="btn btn-danger btn-xs"><i class="fa fa-cloud-download"></i> PDF</button></td>
                                    </tr>
                                    <tr>
                                        <td>1616388</td>
                                        <td>Doklad o zaplacení</td>
                                        <td>1470 Kč</td>
                                        <td>21. 4. 2016</td>
                                        <td>Zaplaceno</td>
                                        <td><button class="btn btn-danger btn-xs"><i class="fa fa-cloud-download"></i> PDF</button></td>
                                    </tr>
                                    <tr>
                                        <td>1616387</td>
                                        <td>Proforma</td>
                                        <td>1470 Kč</td>
                                        <td>18. 4. 2016</td>
                                        <td>Zaplaceno</td>
                                        <td><button class="btn btn-danger btn-xs"><i class="fa fa-cloud-download"></i> PDF</button></td>
                                    </tr>
                                </tbody>
                                </table>
                    </div>
                    <!--Konec tabulky--> 

                    

                   
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

 <!--Vyskakovací okno - datum-->

               
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 id="myLargeModalLabel3" class="modal-title">Zadejte datum</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="sky-form">
                                    
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input">
                                                <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="start" id="start" placeholder="Od">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="input">
                                                <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="finish" id="finish" placeholder="Do">
                                            </label>
                                        </section>
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn-u" style="margin-left:43%; margin-bottom:10px;">Potvrdit výběr</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /Vyskakovací okno - datum -->

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
<![endif]-->
</body>
</html>
