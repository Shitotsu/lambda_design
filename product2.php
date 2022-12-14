<?php
	include'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>LambdaDesign - Terima Jasa Design Grafis</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<link rel="icon" type="image/png" size="16x16" href="foto/logotab.png">
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/mainstyle.css"/>

        <!-- Chat CSS -->
        <link type="text/css" rel="stylesheet" href="chat.css"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	<!-- HEADER -->
	<header>
<!-- TOP HEADER -->
<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="https://api.whatsapp.com/send?phone=6285157497110&text=Hallo%20saya%20ada%20kendala"><i class="fa fa-phone"></i> +62-851-5749-7110</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> lambdagibran@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Cimahi</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="login.php"><i class="fa fa-user-o"></i> LOGIN ADMIN</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

<!-- MAIN HEADER -->
<div id="header">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- LOGO -->
		
			<div class="col-md-3">
				<div class="header-logo">
					<a href="halaman1.php" class="logo">
						<img src="foto/LOGO3.png" align="center" width="350" height="70" alt="LambdaDesign.id">
					</a>
				</div>
			</div>
			
			<!-- ACCOUNT -->
			<div class="col-md-3 clearfix">
				<div class="header-ctn">

				</div>
					<!-- /Wishlist -->
				</div>
			</div>
			<!-- /ACCOUNT -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</div>
<!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
<!-- NAVIGATION -->
<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="halaman1.php">Home</a></li>
						<li><a href="product.php">>Product</a></li>
			
					</ul>

					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="./foto/banner.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./foto/geming.png" alt="">
							</div>
                            
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
                        <div class="product-preview">
								<img src="./foto/banner.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./foto/geming.png" alt="">
							</div>
                           
						</div>
					</div>
					<!-- /Product thumb imgs -->
					<?php
								$k = mysqli_query($koneksi, "SELECT jasa, harga, Deskripsi FROM produk WHERE id='1'");
								while($row = mysqli_fetch_array($k)){
							?>
					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
                            <h1><?php echo $row['jasa']?></h1>
                            <br>
                            <h4 >Harga</h4>
							<div>
                                <h3 class="product-price"><?php echo $row['harga']?></h3>
								<span class="product-available">±</span>
                            </div>
							
							<p><b>Deskripsi Produk</b></p>
                            <p><?php echo $row['Deskripsi']?></P>
							<div class="product-options">
							<?php }?>

							<div class="add-to-cart">
								<div class="qty-label">
                                </div>
                                <br>

        </form>
		<a href="https://api.whatsapp.com/send?phone=6285157497110&text=Hallo%20Saya%20ingin%20memesan%20jasa%20desain%20logo/banner" target="_blank">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Pesan</button></a>
								<a href="halaman1.php"><br><br>
								<button class="primary-btn"> Kembali</button>
                            </form>                            
                            
</div>
                            </div>

						</div>
					</div>
					<!-- /Product details -->
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

				

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
					<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Contact</h3>
								<ul class="footer-links">
                                <li><a href="https://api.whatsapp.com/send?phone=6285157497110&text=Hallo%20saya%20ada%20kendala"><i class="fa fa-phone"></i> +62-851-5749-7110</a></li><br>
								<li><i class="fa fa-envelope-o"></i> lambdagibran@gmail.com</a></li>
								<li><i class="fa fa-map-marker"></i> Cimahi</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lambda Design adalah perusahaan yang menjual jasa desain digital seperti desain website, logo, dan banner. Lambda Design memiliki tenaga kerja yang handal sehingga dapat memuaskan para pelanggan dan juga terpercaya.</p>
								
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">INFORMATION</h3>
								<p>Cara memesan jasa dengan mengklik tombol PESAN pada website dan akan ditujukan pada aplikasi whatsapp dan klien dapat berbincang dengan admin desain apa yang akan dibuat. Untuk pembayaran dapat menggunakan GO-PAY dan OVO. Lambda Design belum mendukung pembayaran lain selain pembayaran lewat GO-PAY dan OVO.</p>
								
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Payment</h3>
								<p>OVO : 082126586266</p>
								<p>GO-PAY : 082126586266</p>
								
							</div>
						</div>

						<div class="clearfix visible-xs"></div>


							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">

							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | LambdaDesign</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>
        <script src="chat.js"></script>

	</body>
</html>
