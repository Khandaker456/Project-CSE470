<?php 
  include 'components/connection.php';
  session_start();
  if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	}else{
		$user_id = '';
	}
	if (isset($_POST['logout'])) {
	  	session_destroy();
	  	header("location: login.php");
	  }  
?>
<style type="text/css">
	<?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
	<title>Gimmick - home page</title>
</head>
<body>
	<?php include 'components/header.php';  ?>
	<div class="main">
		
		<section class="home-section">
				<div class="slider">
			<div class="slider__slider slide1">
				<div class="overlay"></div>
				<div class="slide-detail">
					<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod. Proin commodo pellentesque lorem, ac feugiat purus bibendum quis.</p>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			<!-- slide end -->
			<div class="slider__slider slide2">
				<div class="overlay"></div>
				<div class="slide-detail">
					<h1>welcome to the store.</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod. Proin commodo pellentesque lorem, ac feugiat purus bibendum quis.</p>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			<!-- slide end -->
			<div class="slider__slider slide3">
				<div class="overlay"></div>
				<div class="slide-detail">
					<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod. Proin commodo pellentesque lorem, ac feugiat purus bibendum quis.</p>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			<!-- slide end -->
			<div class="slider__slider slide4">
				<div class="overlay"></div>
				<div class="slide-detail">
					<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod. Proin commodo pellentesque lorem, ac feugiat purus bibendum quis.</p>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			<!-- slide end -->
			<div class="slider__slider slide5">
				<div class="overlay"></div>
				<div class="slide-detail">
					<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod. Proin commodo pellentesque lorem, ac feugiat purus bibendum quis.</p>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			<!-- slide end -->
			<div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
			<div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
		</div>	
	</section>
		<!-- home slide end -->
		<section class="thumb">
			<div class="box-container">
				<div class="box">
					<img src="image/Caa.png">
					<h3>laptop</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="image/Caa.png">
					<h3>ps4</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="image/Caa.png">
					<h3>headphone</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="image/Caa.png">
					<h3>mouse</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
			</div>
		</section>
		<section class="container">
			<div class="box-container">
				<div class="box">
					<img src="image/gpu.jpg">
				</div>
				<div class="box">
					<img src="image/download.png">
					<span>Good Stuff</span>
					<h1>save up to 50% off</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod.</p>					
				</div>				
			</div>
		</section>
		<section class="shop">
			<div class="title">
				<img src="image/download.png">
				<h1>Trending products</h1>
			</div>
			<div class="row">
				<img src="image/gpu.jpg">
				<div class="row-detail">
					<img src="image/download.png">
					<div class="top-footer">
						<h1>a cup of tea</h1>
					</div>
				</div>
			</div>
			<div class="box-container">
				<div class="box">
					<img src="image/download.png">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/download.png">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/download.png">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/download.png">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/download.png">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/download.png">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</section>
		<section class="shop-category">
			<div class="box-container">
				<div class="box">
					<img src="image/M1.jpg">
					<div class="detail">
						<span>Big offers</span>
						<h1>Extra 15% off</h1>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				</div>
				<div class="box">
					<img src="image/CH1.jpg">
					<div class="detail">
						<span>new upcomming</span>
						<h1>Extra 15% off</h1>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				</div>
			</div>
		</section>
		<section class="services">
			<div class="box-container">
				<div class="box">
					<img src="image/gpu.jpg">
					<div class="detail">
						<h3>great saving</h3>
						<p> save big in every order</p>
					</div>
				</div>
				<div class="box">
					<img src="image/gpu.jpg">
					<div class="detail">
						<h3>great saving</h3>
						<p> save big in every order</p>
					</div>
				</div>
				<div class="box">
					<img src="image/gpu.jpg">
					<div class="detail">
						<h3>great saving</h3>
						<p> save big in every order</p>
					</div>
				</div>
				<div class="box">
					<img src="image/gpu.jpg">
					<div class="detail">
						<h3>great saving</h3>
						<p> save big in every order</p>
					</div>
				</div>
			</div>
		</section>
		<section class="brand">
			<div class="box-container">
				<div class="box">
					<img src="image/M1.jpg">
				</div>
				<div class="box">
					<img src="image/gpu.jpg">
				</div>
				<div class="box">
					<img src="image/gpu.jpg">
				</div>
				<div class="box">
					<img src="image/gpu.jpg">
				</div>
				<div class="box">
					<img src="image/gpu.jpg">
				</div>
			</div>			
		</section>
		<?php include 'components/footer.php';  ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php';  ?>
</body>
</html>