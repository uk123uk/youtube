<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Home</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="strape/boot.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="jquery/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="jquery/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery/bootstrap.js"></script>
	<script type="text/javascript" src="jquery/tt_slideshow.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#barbtn1').click(function(){
				$('#navMoblie').slideDown();
				$(this).hide();
				$('#barbtn2').show();
				$('.searchsection').slideUp(1000).hide();
			})
			$('#barbtn2').click(function(){
				$('#navMoblie').slideUp();
				$(this).hide();
				$('#barbtn1').show();
				$('.searchsection').slideDown(1000).show();
			})
			$('.showsearch').click(function(){
				$(this).hide();
				$('.search_area').fadeIn(1000).show();
			})
		
		})
	</script>

</head>
<body>
	<section class="main">
		<div class="toppicture">
			<nav class="navbar navbar-expand-md  navbar-dark">
				<div class="container">
				<a href="" style="text-shadow: 2px 0px 2px darkorange;filter:brightness(1.50);" class="navbar-brand text-primary font-weight-bold">KING TECH.COM</a>

				<button id="barbtn1" data-target="" class="navbar-toggler" type="button" data-toggle="collapse">
					<span id=""  class="navbar-toggler-icon"></span>
				</button>

				<button id="barbtn2" data-target="" class="navbar-toggler" type="button" data-toggle="collapse">
					<span id=""  class="navbar-toggler-icon"></span>
				</button>

				<div id="navbarmenu" class="navbarmenu collapse text-center font-weight-italic  navbar-collapse " 
				>

					<ul class="navbar-nav ml-auto p-2 text-uppercase">
						<li class="nav-item" >
							<a href="index.php"  class="active menu nav-link " >Home</a>
						</li>
						<li class="nav-item">
							<a href="sourceCode.php.#calculatorcode" class="menu nav-link ">SourceCode</a>
						</li>
			
						<li class="nav-item">
							<a href="about.php.#aboutHome" class=" menu nav-link ">About</a>
						</li>
						<li class="nav-item">
							<a href="contact.php.#contacthome" class=" menu nav-link ">Contact</a>
						</li>
						<li class="nav-item">
							<a href="signin.php.#signin-div" class=" menu nav-link ">Sign in</a>
						</li>
						
						
					</ul>
				</div>

				

				</div>
			</nav>
	
			<div id="navMoblie" class="font-weight-italic text-center">

					<ul class="navbar-nav ml-auto p-2 text-uppercase">
						<li class="nav-item" >
							<a href="index.php" class="menu active nav-link text-white" >Home</a>
						</li>
						
						<li class="nav-item">
							<a href="sourceCode.php.#calculatorcode" class="menu nav-link ">SourceCode</a>
						</li>
															
						<li class="nav-item">
							<a href="about.php.#aboutHome" class="menu nav-link">About</a>
						</li>
						<li class="nav-item">
							<a href="contact.php.#contacthome" class="menu nav-link">Contact</a>
						</li>
						<li class="nav-item">
							<a href="signin.php.#signin-div" class="menu nav-link">Sign in</a>
						</li>
	
					</ul>
				</div>
				<div class="welcome_div">
				<h4  class="welcome-text text-uppercase  font-weight-bold">welcome To KING TECH.COM</h4>
				<br><br><br><br><br><br><br>
				<button class="subscribe btn"><a href="#" style="text-decoration: none;" class="text-dark">SUBCRIBE</a></button>
				&nbsp;
				<a href="signin.php.#signin-div" class="text-white"><button class="signi btn-sm text-white">SIGN IN</button></a>
				
				</div>

		</div><br><hr><hr><br>
		<div class="signfirst">
			<p>For using this website you must Sign in now!!!!!</p>
			<a class="signrequired" href="signin.php.#signin-div">Go to Signin page</a>
		</div>
		<div id="calculatorcode"  class="source Code">

				<h2 class="sourcecodeHeding text-center font-weight-bold">SourceCode</h2>
				<div class="detailCoding container">
					<h3>Calculator SourceCode</h3>
					<p>
						ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<div id="demo" class="carousel slide" data-ride="carousel">
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						</ul>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
											<img src="icon_img/Calculator33.png" class="codeimg">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
											<img src="icon_img/Calculator1.png" class="codeimg">
									</div>
								</div>
							</div>
							<div class="carousel-item">
							<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="icon_img/Calculator33.png" class="codeimg">
									</div>
								</div>
							</div>
						</div>

						<a href="#demo" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>

						<a href="#demo" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon "></span>
						</a>

					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<p>
								 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<p>
								 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>

					<center>
					<h5 class="font-weight-bold text-warning">Free Download Calculator SourceCode</h5>
					<br>
					<a href="file/Calculator.rar" style="text-decoration: none;" class="download_btn">Free Download</a>
					</center>

					
		</div>
		<br><br><br><br><br><br>
				<div class="relatedPost container">
					<h3 class="text-center font-weight-bold text-primary">Related Code</h3>
					<hr>
					<br>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-6">
							<div class="box relatedimage" style="border:solid 5px black;margin-bottom: 10px;">
								<a style="text-decoration: none;" href="cargame.php.#sourcecode"><img src="icon_img/car2.png" class="img-fluid img-thumbnail">
								<h6  id="relatedname">Free Car Game</h6></a>
							</div>
						</div>

							<div class="col-lg-3 col-md-3 col-sm-3 col-6">
							<div class="box relatedimage" style="border:solid 5px black;margin-bottom: 10px;">
								<a style="text-decoration: none;" href="cargame.php.#sourcecode"><img src="icon_img/car2.png" class="img-fluid img-thumbnail">
								<h6  id="relatedname">Free Car Game</h6></a>
							</div>
						</div>

							<div class="col-lg-3 col-md-3 col-sm-3 col-6">
							<div class="box relatedimage" style="border:solid 5px black;margin-bottom: 10px;">
								<a style="text-decoration: none;" href="cargame.php.#sourcecode"><img src="icon_img/car2.png" class="img-fluid img-thumbnail">
								<h6  id="relatedname">Free Car Game</h6></a>
							</div>
						</div>

							<div class="col-lg-3 col-md-3 col-sm-3 col-6">
							<div class="box relatedimage" style="border:solid 5px black;margin-bottom: 10px;">
								<a style="text-decoration: none;" href="cargame.php.#sourcecode"><img src="icon_img/car2.png" class="img-fluid img-thumbnail">
								<h6  id="relatedname">Free Car Game</h6></a>
							</div>
						</div>
						
					</div>
					<hr>
				</div>
			</div>
<!-- 
/////////////////////////////////////////////////////////////abouthome///////////////////
 -->	
			<div class="aboutHome container">
						<br><br>
						<h2 class="abouthomeHeading">About Us</h2>
						<br><br>
			<br>
			<div class="row">
				<div class="col-lg-6 col-sm-12 col-md-6 col-12">
					<h5 class="font-weight-bold">Our Mission</h5>
					<p style="text-align: justify;">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<br>
				<div class="col-lg-6 col-sm-12 col-md-6 col-12">
					<h5 class="font-weight-bold">Our Vission</h5>
					<p style="text-align: justify;">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
			<br><br>
			<h4 class="aboutteamtext">TEAM MEMBERS</h4>
			
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-6">
					<div class="card mt-5">
						<img src="icon_img/myabout.png" class="img-fluid">
						<div class="card-body bg-info">
							<h5 class="text-warning text-uppercase text-center">Umair King</h5>
							<p style="font-size: 13px;font-weight: bold; text-align: center;">I am the web Developer</p>
						</div>
					</div>
				</div>

			<div class="col-lg-3 col-md-3 col-sm-4 col-6">
					<div class="card mt-5">
						<img src="icon_img/myabout.png" class="img-fluid">
						<div class="card-body bg-info">
							<h5 class="text-warning text-uppercase text-center">Umair King</h5>
							<p style="font-size: 13px;font-weight: bold; text-align: center;">I am the web Developer</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 col-6">
					<div class="card mt-5">
						<img src="icon_img/myabout.png" class="img-fluid">
						<div class="card-body bg-info">
						<h5 class="text-warning text-uppercase text-center">Umair King</h5>
							<p style="font-size: 13px;font-weight: bold; text-align: center;">I am the web Developer</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-4 col-6">
					<div class="card mt-5">
						<img src="icon_img/myabout.png" class="img-fluid">
						<div class="card-body bg-info">
						<h5 class="text-warning text-uppercase text-center">Umair King</h5>
							<p style="font-size: 13px;font-weight: bold; text-align: center;">I am the web Developer</p>
						</div>
					</div>
				</div>
			
			</div><br><br>
			<div class="experience-div">
				<div class="row ">
					
					<h4 class="OurExperience text-center">Our Experience</h4>
								
								<div class="col-sm-12 col-lg-12 col-12 col-md-12">
									<br><br>
									
									<b>Html</b>
									<div class="progress w-100">

										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%;height: 20px;">
												95%
										</div>	
									</div>
								</div>
									<div class="col-sm-12 col-lg-12 col-12 col-md-12">
									<br><br>
									
									<b>Css</b>
									<div class="progress w-100">

										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;height: 20px;">
												100%
										</div>	
									</div>
								</div>
									<div class="col-sm-12 col-lg-12 col-12 col-md-12">
									<br><br>
									
									<b>JavaScript</b>
									<div class="progress w-100">

										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%;height: 20px;">
												75%
										</div>	
									</div>
								</div>
									<div class="col-sm-12 col-lg-12 col-12 col-md-12">
									<br><br>
									
									<b>Php</b>
									<div class="progress w-100">

										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%;height: 20px;">
												60%
										</div>	
									</div>
								</div>
								<div class="col-sm-12 col-lg-12 col-12 col-md-12">
									<br><br>
									
									<b>Jquery</b>
									<div class="progress w-100">

										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 85%;height: 20px;">
												85%
										</div>	
									</div>
								</div>
								<div class="col-sm-12 col-lg-12 col-12 col-md-12">
									<br><br>
									
									<b>MediaQuery</b>
									<div class="progress w-100">

										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:90%;height: 20px;">
												90%
										</div>	
									</div>
								</div>
				</div>
			</div>
		
			</div>
			<hr><hr><br><br>
			<div class="contacthome container">
				<h2 class="contacthomeheading">Contact Us</h2><br><br>
				<form >
					<label>Name</label><input type="text" name="contacter-name" placeholder="..." class="form-control"><br>
					<label>Email*</label><input type="email" name="contacter-email" placeholder="..." class="form-control"><br>
					<label>Subject</label><input type="text" name="contacter-subject" placeholder="..." class="form-control"><br>
				<label>Messege</label><textarea class="form-control" name="contacter-messege" placeholder="..."></textarea><br><br>
				<input type="button" id="submit-contact" name="submit-contact" value="Send messege" class="btn bg-primary text-dark"><br><br>
				</form>

			</div>
			<hr><hr>
			<div class="footer">
				<div class="container">
					<div class="row">

						<div class="col-lg-4 col-md-4 col-sm-12  col-12">
							<br><br>
							<h6>KING TECH.COM!</h6>
							<p>It's a best website for bigenire to learn game development website designing and website hosting etc,we are the website developer and game builder if you want learn so subsribe first. </p>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12  col-12">
							<br><br>
							<div class="aboutfooter">
							<h6>Our About</h6>
							<span><img src="icon_img/instagram.png"><h5>Instagram</h5></span>
							<img src="icon_img/facebook.png"><h5>Facebook</h5>
							<img src="icon_img/twitter.png"><h5>Twitter</h5>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12  col-12">
							<br><br>
							<div class="footerAddress">
									<h6>Address</h6>
									<p>Mohallah Shegah Dhok Tordher Swabi Pakistan Near Gt Road<br><br>
										<b>Phone Nummber :</b>0301-1487633<br><br>
										<b>Email :</b>umairkhan123king@gmail.com
									</p>

							</div>
						</div>
						
					</div>
					</div>

			</div>






	<!-- 	<div class="progress w-100">
					
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 40%;height: 20px;">
						100%
					</div>	
		</div> -->
<a href=""></a>
</section>	
</body>
</html>
<?php
	
	

?>