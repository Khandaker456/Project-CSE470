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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
	<title>Gimmick - about us page</title>
</head>
<body>
	<?php include 'components/header.php';  ?>
	<div class="main">
		<div class="banner">
			<h1>about us</h1>
		</div>
		<div class="title2">
			<a href="home.php">home</a><span>about us</span>
		</div>
		<div class="about-category">
			<div class="box">
				<img src="image/new-banner.webp">
				<div class="detail">
					<span>Mouse</span>
					<h1>black and green</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="image/Pc2.jpg">
				<div class="detail">
					<span>Mouse</span>
					<h1>black and green</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="image/Pc2.jpg">
				<div class="detail">
					<span>Mouse</span>
					<h1>black and green</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="image/Pc.jpg">
				<div class="detail">
					<span>Mouse</span>
					<h1>black and green</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</div>
		<section class="services">
			<div class="title">
				<img src="image/download.png" class="logo">
				<h1>why choose us</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod

							......</p>
			</div>
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
	<div class="about">
		<div class="row">
			<div class="img-box">
				<img src="image/V1.jpg">
			</div>
			<div class="detail">
				<h1>visit our showroom</h1>
				<p>our..........
						...........
						..........
					..........
					..........</p>
					<a href="view_products.php" class="btn">shop now</a>
			</div>
		</div>
	</div>
	<div class="testimonial-container">
		<div class="title">
			<img src="image/download.png" class="logo">
			<h1>what people say about us</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod
							.......
			</p>
		</div>	
			<div class="container">
				<div class="testimonial-item active">
					<img src="image/M1.jpg">
					<h1>abcde</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod
					saasfjadjhkhfihaihdfihasofhioehiohd
					dsahdjihiqwehisahfiohojojad
					aifhcahdoojojoj.</p>
				</div>
				<div class="testimonial-item">
					<img src="image/M1.jpg">
					<h1>abcde</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod
					saasfjadjhkhfihaihdfihasofhioehiohd
					dsahdjihiqwehisahfiohojojad
					aifhcahdoojojoj.</p>
				</div>
				<div class="testimonial-item">
					<img src="image/Pc3.jpg">
					<h1>abcde</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at sapien ut tortor dictum euismod
					saasfjadjhkhfihaihdfihasofhioehiohd
					dsahdjihiqwehisahfiohojojad
					aifhcahdoojojoj.</p>
				</div>
				<div class="left-arrow" onclick="nextSlide()"> <i class="bx bxs-left-arrow-alt"></i> </div>
				<div class="right-arrow" onclick="prevSlide()"> <i class="bx bxs-right-arrow-alt"></i> </div>
			</div>					
	</div>
		<?php include 'components/footer.php'; ?>
	</div>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		let slides = document.querySelectorAll('.testimonial-item');
		let index = 0;

		function nextSlide(){
				slides[index].classList.remove('active');
				index = (index + 1) % slides.length;
				slides[index].classList.add('active');
		}
		function prevSlide(){
				slides[index].classList.remove('active');
				index = (index - 1 + slides.length) % slides.length;
				slides[index].classList.add('active');
		}		
	</script>
	<?php include 'components/alert.php';  ?>
</body>
</html>