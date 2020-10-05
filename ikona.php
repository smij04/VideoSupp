<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Ikona na stránkách - Videosupp</title>

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
                    <li><a data-skins="default active-switcher-btn handle-skins-btn" href="">Denní mód</a></li>
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
                    <li class="list-group-item">
                        <a href="zpravy.php"><i class="fa fa-comments"></i> Zprávy a upozornění</a>
                    </li>
                    <li class="list-group-item active">
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
                    
                    <div class="col-sm-6">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left vetsi"><i class="fa fa-circle" style="color:rgb(0, 128, 0);"></i> Online ikona</h2>

                                </div>
                                  <img class="img-responsive profile-img margin-bottom-20" src="assets/img/team/img32-md.jpg" alt="">

                    <form action="#" class="sky-form">
                                                                     
                        <section>
                            <label class="label">Umístění ikony na stránkách</label>
                            <label class="select">
                                <select name="selectOnline">
                                    <option value="0">Pravý dolní roh</option>
                                    <option value="1">Pravý horní roh</option>
                                    <option value="2">Levý dolní roh</option>
                                    <option value="3">Levý horní roh</option>
                                    <option value="4">Střed stránky</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                        <section>
                            <label class="label">Foto</label>
                            <label for="file" class="input input-file">
                                <div class="button"><input id="file" onchange="this.parentNode.nextSibling.value = this.value" type="file">Nahrát foto</div><input readonly="" type="text">
                            </label>
                        </section>
                        <section>
                            <label class="label">Jméno</label>
                            <label class="input input-file">
                                <div class="button">Uložit</div><input type="text">
                            </label>
                        </section>
                        <section>
                            <label class="label">Funkce</label>
                            <label class="input input-file">
                                <div class="button">Uložit</div><input type="text">
                            </label>
                        </section>

                   </form>
                            </div>
                        </div>
                    
                        <!--Alert-->
                        <div class="col-sm-6 sm-margin-bottom-30">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-circle" style="color:rgb(161, 15, 43);"></i> Offline ikona</h2>
  
                                                                
                                </div>
                                <img class="img-responsive profile-img margin-bottom-20" src="assets/img/team/img32-md.jpg" alt="">
                                
                                                                     <form action="#" class="sky-form">
                                                                                                   <section>
                            <label class="label">Umístění ikony na stránkách</label>
                            <label class="select">
                                <select name="selectOnline" onchange="onlineSelectFunc()">
                                    <option value="0">Pravý dolní roh</option>
                                    <option value="1">Pravý horní roh</option>
                                    <option value="2">Levý dolní roh</option>
                                    <option value="3">Levý horní roh</option>
                                    <option value="4">Střed stránky</option>
                                </select>
                                <script>
//                                    function onlineSelectFunc(){
//                                        var x = document.getElementById("selectOnline").value;
//                                    }
                                </script>
                                <i></i>
                            </label>
                                </section>   
                                       <section>
                            <label class="label">Foto</label>
                            <label for="file" class="input input-file">
                                <div class="button"><input id="file" onchange="this.parentNode.nextSibling.value = this.value" type="file">Nahrát foto</div><input readonly="" type="text">
                            </label>
                        </section>
                        
                         <section>
                            <label class="label">Offline text</label>
                            <label class="input input-file">
                                <div class="button">Uložit</div><input type="text">
                            </label>
                        </section>
                        
                        </form>

                                </div>
                            </div>
                        </div>
                        <!--/end row-->

                         <div class="row"> 
                         
                         
                         <div class="col-sm-6">
                            <div class="panel panel-profile">
     

                                  
                              <form action="#" class="sky-form">  
                            

                              <section>
                            <label class="label">Barva textu</label>
                            <label class="select">
                                <select>
                                    <option value="0">Bílá</option>
                                    <option value="1">Černá</option>
                                    <option value="2">Zelená</option>
                                    <option value="3">Červená</option>
                                    <option value="4">Modrá</option>
                                    <option value="5">Růžová</option>
                                    <option value="6">Fialová</option>
                                    <option value="7">Žlutá</option>
                                    <option value="8">Indigová</option>
                                    <option value="9">Hnědá</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                        <section>
                            <label class="label">Barva pozadí</label>
                            <label class="select">
                                <select>
                                    <option value="0">Bílá</option>
                                    <option value="1">Černá</option>
                                    <option value="2">Zelená</option>
                                    <option value="3">Červená</option>
                                    <option value="4">Modrá</option>
                                    <option value="5">Růžová</option>
                                    <option value="6">Fialová</option>
                                    <option value="7">Žlutá</option>
                                    <option value="8">Indigová</option>
                                    <option value="9">Hnědá</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                        <section>
                            <label class="label">Barva okraje</label>
                            <label class="select">
                                <select>
                                    <option value="0">Bílá</option>
                                    <option value="1">Černá</option>
                                    <option value="2">Zelená</option>
                                    <option value="3">Červená</option>
                                    <option value="4">Modrá</option>
                                    <option value="5">Růžová</option>
                                    <option value="6">Fialová</option>
                                    <option value="7">Žlutá</option>
                                    <option value="8">Indigová</option>
                                    <option value="9">Hnědá</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                        
                        </form>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-profile">
     

                                  
                                                                     <form action="#" class="sky-form">
                                                                                               
                            
<section>
                            <label class="label">Barva textu</label>
                            <label class="select">
                                <select>
                                    <option value="0">Bílá</option>
                                    <option value="1">Černá</option>
                                    <option value="2">Zelená</option>
                                    <option value="3">Červená</option>
                                    <option value="4">Modrá</option>
                                    <option value="5">Růžová</option>
                                    <option value="6">Fialová</option>
                                    <option value="7">Žlutá</option>
                                    <option value="8">Indigová</option>
                                    <option value="9">Hnědá</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                        <section>
                            <label class="label">Barva pozadí</label>
                            <label class="select">
                                <select>
                                    <option value="0">Bílá</option>
                                    <option value="1">Černá</option>
                                    <option value="2">Zelená</option>
                                    <option value="3">Červená</option>
                                    <option value="4">Modrá</option>
                                    <option value="5">Růžová</option>
                                    <option value="6">Fialová</option>
                                    <option value="7">Žlutá</option>
                                    <option value="8">Indigová</option>
                                    <option value="9">Hnědá</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                        <section>
                            <label class="label">Barva okraje</label>
                            <label class="select">
                                <select>
                                    <option value="0">Bílá</option>
                                    <option value="1">Černá</option>
                                    <option value="2">Zelená</option>
                                    <option value="3">Červená</option>
                                    <option value="4">Modrá</option>
                                    <option value="5">Růžová</option>
                                    <option value="6">Fialová</option>
                                    <option value="7">Žlutá</option>
                                    <option value="8">Indigová</option>
                                    <option value="9">Hnědá</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                       
                        </form>
                            </div>
                        </div>   
                    </div>   
                    </div>

                    </div>
                    
                   

                   
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

</div>

<!--=== End Wrapper ===-->     

<!-- JS Global Compulsory -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="assets/plugins/back-to-top.js"></script>
<script src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>

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
