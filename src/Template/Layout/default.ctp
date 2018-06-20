<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>one2one music school</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Fonts
		============================================ -->		
       	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500italic,500,400italic,700italic,900,100,300' rel='stylesheet' type='text/css'>
	   	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,900' rel='stylesheet' type='text/css'>



        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('font-awesome.min.css') ?>
        <?= $this->Html->css('owl.carousel.css') ?>
        <?= $this->Html->css('owl.theme.css') ?>
        <?= $this->Html->css('owl.transitions.css') ?>
        <?= $this->Html->css('nivo-slider.css') ?>
        <?= $this->Html->css('preview.css') ?>
        <?= $this->Html->css('jquery-ui.css') ?>
        <?= $this->Html->css('meanmenu.min.css') ?>
        <?= $this->Html->css('animate.css') ?>
        <?= $this->Html->css('normalize.css') ?>
        <?= $this->Html->css('main.css') ?>
        <?= $this->Html->css('color-one.css') ?>
        <?= $this->Html->css('shortcodes/shortcodes.css') ?>
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->css('responsive.css') ?>
        
        <?= $this->Html->script('vendor/modernizr-2.8.3.min.js') ?>

		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


        

</head>
<body style="padding-right: 0 !important;">
    

    	<!-- Start Header Area -->
			<header id="header" class="solid-bg-header clear">
				<div class="header-v1">
					<!-- Start Header Top -->
					<div class="header-top clear">
						<div class="container">
							<div class="row">
								<div class="col-md-7 hidden-sm hidden-xs">
									<div class="header-top-left header-top-info">
									<?php 
										if(isset($current_user)) {
											?>
											<p>
												<a href="<?php echo $this->Url->build(array('controller'=>'usuario','action'=>'index')) ?>"><i class="fa fa-user"></i>Mi Cuenta </a>
											</p>
											<p>
												<a href="<?php echo $this->Url->build(array('controller'=>'usuario','action'=>'logout')) ?>"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
											</p>
											<?php
										}
										else {
											?>
											<p>
												<a href="<?php echo $this->Url->build(array('controller'=>'usuario','action'=>'login')) ?>"><i class="fa fa-lock"></i>Login </a>
											</p>
											<p>
												<a href="<?php echo $this->Url->build(array('controller'=>'usuario','action'=>'registro')) ?>"><i class="fas fa-clipboard-list"></i> Registro</a>
											</p>
										<?php	
										}

									?>
										
										<p>
											<a href="mailto:info@one2onemusic.com"><i class="fa fa-envelope"></i>info@one2onemusic.com</a>
										</p>  
									</div>
								</div>
								<div class="col-md-5">
									<div class="header-top-right pull-right">
										<ul>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Header Top -->
					<!-- Start Header Bottom -->
					<div class="header-bottom">
						<div class="container">
							<div class="row hidden-sm hidden-xs">
								<!-- Start Logo -->
								<div class="col-md-3">
									<div class="header-logo">
										<?= 
											$this->Html->image(
												"logo/1.png", 
												["alt" => "one 2 one music school",
												"style" => "width: 75%;",
												"url" => ["controller" => "pages", "action" => "home"]]
											);
										?>
									</div>
								</div>
								<!-- End Logo -->
								<!-- Start Main Menu -->
                                <div class="col-md-9">
                                    <div class="menu-wrap pull-right">
                                        <nav class="primary-menu">
										    <ul>
                                                <li><a href="list">Profesores Online </a></li>
                                                <li><a href="about-us.html">Como Funciona </a></li>   
										        <li><a href="team.html">Cursos</a></li> 
										    </ul>
										</nav>
                                    </div>
                                </div>
                                <!-- End Main Menu -->
							</div>
							
							</div>
						</div>
					</div>
					<!-- End Header Bottom -->
				</div>
			</header>
			<!-- End Header Area -->



      <?= $this->Flash->render() ?>
    
        <?= $this->fetch('content') ?>
			<!-- Start  Footer  Area -->	
			<footer id="footer-area">
				<!-- Start Footer Top Area -->	
				<div class="footer-top-area bg-1 overlay-bg padding50">
					<div class="container">
						<div class="row">
							<div class="newsletter">
								<div class="col-md-6 col-md-offset-3 text-center">
									<div class="footer-logo">
										<?= 
											$this->Html->image(
												"logo/1.png", 
												["alt" => "one 2 one music school",
												"url" => ["controller" => "pages", "action" => "home"]]
											);
										?>
									</div>
									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-4">
								<div class="footer-top-menu">
									<h3 class="widget-title">QUIENES SOMOS</h3>
									<div class="fo-aboutus-container">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sem quis lacinia faucibus.</p>
										<address>
											<p><strong>Direccion :</strong> 12345 Random Str., Random State,
											Random City, Random Country.</p>
											<p><strong>Email : </strong><a href="mailto:admin@bootexperts.com ">admin@bootexperts.com </a></p>
											<p><strong>Telefono : </strong><a href="tel:+8801973833508">(01) 123 456 - (01) 659 786</a></p>
										</address>
										<div class="footer-social-bookmark">
											<ul>
												<li><a target="_blank" href="#" class="facebook"><i class="fa fa-facebook-square"></i></a></li>
												<li><a target="_blank" href="#" class="twitter"><i class="fa fa-twitter-square"></i></a></li>
												<li><a target="_blank" href="#" class="google-plus"><i class="fa fa-google-plus-square"></i></a></li>
												<li><a target="_blank" href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
												<li><a target="_blank" href="#" class="behance"><i class="fa fa-behance-square"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="footer-top-menu">
									<h3 class="widget-title">Ultimos Cursos</h3>
									<div class="fo-course-container">
										<ul>
											<li>
												<a href="#">Curso 001</a>
												<p class="date">Dec 18, 2018</p>
											</li>
											<li>
												<a href="#">Curso 002</a>
												<p class="date">Dec 18, 2018</p>
											</li>
											<li>
												<a href="#">Curso 003</a>
												<p class="date">Dec 18, 2018</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-3 hidden-sm">
								<div class="footer-top-menu">
									<h3 class="widget-title">twitter</h3>
									<div class="fo-twitter-feed-container">
										<ul>
											<li>
												<a href="#" class="user-name">@John Doe</a>
												<p>Aliquam nec elementum odio, non loare congue ligula curabitur. Nulla venenatis malesuada diam volutpat vulputate. Suspendisse et tortor mauris.</p>
											</li>
											<li>
												<a href="#" class="user-name">@John Doe</a>
												<p>Duis id nulla sodales, dapibus enim sed. Vestibulum lobortis sed sit amet gravida.</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="footer-top-menu">
									<h3 class="widget-title">SIGUENOS @ INSTAGRAM</h3>
									<div class="blog-flickr">
										<ul>
											<li>
												<?= 
													$this->Html->image(
													"blog/flickr/1.jpg", 
													["alt" => "one 2 one music school",
													"url" => ["controller" => "pages", "action" => "home"]]
													);
												?>
											</li>
											<li>
												<?= 
													$this->Html->image(
													"blog/flickr/2.jpg", 
													["alt" => "one 2 one music school",
													"url" => ["controller" => "pages", "action" => "home"]]
													);
												?>
											</li>
											<li>
												<?= 
													$this->Html->image(
													"blog/flickr/3.jpg", 
													["alt" => "one 2 one music school",
													"url" => ["controller" => "pages", "action" => "home"]]
													);
												?>
											</li>
											<li>
												<?= 
													$this->Html->image(
													"blog/flickr/4.jpg", 
													["alt" => "one 2 one music school",
													"url" => ["controller" => "pages", "action" => "home"]]
													);
												?>
											</li>
											<li>
												<?= 
													$this->Html->image(
													"blog/flickr/5.jpg", 
													["alt" => "one 2 one music school",
													"url" => ["controller" => "pages", "action" => "home"]]
													);
												?>
											</li>
											<li>
												<?= 
													$this->Html->image(
													"blog/flickr/6.jpg", 
													["alt" => "one 2 one music school",
													"url" => ["controller" => "pages", "action" => "home"]]
													);
												?>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Footer Top Area -->	
				<!-- Start Footer Bottom Area -->	
				<div class="footer-bottom-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="copyright-wrap text-center">
									<p>&copy; 2018 ONE2ONEMUSIC All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Footer Bottom Area -->	
			</footer>
			<!-- End Footer  Area -->	



    <!-- jquery
		============================================ -->	
        <?= $this->Html->script('vendor/jquery-1.11.3.min.js') ?>	
		<!-- mixitup JS
		============================================ -->		
        <?= $this->Html->script('jquery.mixitup.js') ?>	
		<!-- bootstrap JS
		============================================ -->
        <?= $this->Html->script('bootstrap.min.js') ?>

        <?= $this->Html->script('bootstrap-select.min.js') ?>		
        
		<!-- wow JS
		============================================ -->		
        <?= $this->Html->script('wow.min.js') ?>
		<!-- price-slider JS
		============================================ -->		
        <?= $this->Html->script('jquery-price-slider.js') ?>		
		<!-- meanmenu JS
		============================================ -->		
        <?= $this->Html->script('jquery.meanmenu.js') ?>
		<!-- owl.carousel JS
		============================================ -->
        <?= $this->Html->script('owl.carousel.min.js') ?>		
		<!-- counterup JS
		============================================ -->
        <?= $this->Html->script('jquery.counterup.min.js') ?>		

		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- sliphover JS
		============================================ -->		
        <?= $this->Html->script('jquery.sliphover.min.js') ?>
		<!-- Nivo slider js
		============================================ --> 	
        <?= $this->Html->script('jquery.nivo.slider.js') ?>

        <?= $this->Html->script('home.js') ?>	
		
		<!-- scrollUp JS
		============================================ -->		
        <?= $this->Html->script('jquery.scrollUp.min.js') ?>
        <!-- bxslider JS
		============================================ -->	
        <?= $this->Html->script('jquery.bxslider.min.js') ?>	
		<!-- masonry JS
		============================================ -->		
        <?= $this->Html->script('masonry.pkgd.min.js') ?>
		<!-- plugins JS
		============================================ -->
        <?= $this->Html->script('plugins.js') ?>		
		<!-- main JS
		============================================ -->
        <?= $this->Html->script('main.js') ?>		
        
</body>
</html>
