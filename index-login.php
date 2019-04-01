<!DOCTYPE html>
<html>
<head>
	<title>Setelah LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/config.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<!--- Header Start -->
	<header>
		<div class="head-bottom2">
				<ul class="nav">
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">CONTACT</a></li>
					<li><a href="#">SITEMAP</a></li>
					<li><div class="lil-bar"></div></li>
					<li>
							<div class="dropdown">
								<button class="btndrop2">
									<i class="fa fa-shopping-cart badge-notif" data-badge="2"></i>
								</button>
									<div class="dropdown-content">
										<a href="#">Kategori</a>
									    <a href="#">Kategori</a>
									    <a href="#">Kategori</a>
									</div>		
							</div>
						</li>
				</ul> 
				<a href="index.html"><img src="images/logo.png" width="250"></a>
		</div>

		<div class="head-top2">
				
				<div class="dropdown pull-left toright"> 
					<button class="btndrop">
						<i class="fa fa-bars"></i>
							Categories
					</button>
						<div class="dropdown-content">
							<a href="#">Kategori</a>
							<a href="#">Kategori</a>
							<a href="#">Kategori</a>
						    <a href="#">Kategori</a>
						    <a href="#">Kategori</a>
						</div>		
				</div>

				<div class="dropdown pull-right toleft">
					<button class="btndrop">
						<span class="fa fa-cog"></span>
							My Account
					</button>
							<div class="dropdown-content">
								<a href="#">Link 1</a>
							    <a href="#">Link 2</a>
							    <a href="#">Link 3</a>
							</div>
				</div>

				<div class="dropdown pull-right">
					<button class="btndrop ">
						<span class="fa fa-bell-o"></span>
							Notifikasi
					</button>
						<div class="dropdown-content">
							<a href="#">Link 1</a>
						    <a href="#">Link 2</a>
						    <a href="#">Link 3</a>
						</div>							
				</div>
		</div>
	</header>
<!--- Header End -->
<body>
	<div class="wrapper">
		<form action="#" enctype="">
				<div class="one-four">
					<input type="text" name="search" placeholder="Cari..."><i class="fa fa-search"></i>
				</div>
				<div class="one-four">
					<select>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
					</select>
				</div>
				<div class="one-four">
					<select>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
					</select>
				</div>
				<div class="one-four">
					<select>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
					</select>


				</div>
				<button class="search-icon"><i class="fa fa-search"></i></button>
		</form>
	<div class="clearfix"></div>
<div class="container">
			<div class="left-side">
					<div class="top-cate">Quick Sell</div>
							<div class="category">
								<form method="post" action="#">
									<input type="text" name="nama_item" class="input-sell pull-left" placeholder="Nama Item...">
									<input type="text" name="price" class="input-sell pull-left" placeholder="Harga...">
									<textarea placeholder="Deskripsi" style="max-width: 95%;
									min-width: 95%; margin: 3px; max-height: 130px; width: 95%;" rows="10"></textarea>

									<input type="file" name="image" class="file-image">
									<input type="submit" name="submit" value="Upload" class="submit">

								</form>
							</div>
			</div>

		<div class="sidebar">
			<img src="images/banner/2-min.jpg" width="100%" class="mySlides">
			<img src="images/banner/3-min.jpg" width="100%" class="mySlides">
			<img src="images/banner/4-min.jpg" width="100%" class="mySlides">
			
		</div>
			<script>
				var myIndex = 0;
				carousel();

				function carousel() {
				    var i;
				    var x = document.getElementsByClassName("mySlides");
				    for (i = 0; i < x.length; i++) {
				       x[i].style.display = "none";  
				    }
				    myIndex++;
				    if (myIndex > x.length) {myIndex = 1}    
				    x[myIndex-1].style.display = "block";  
				    setTimeout(carousel, 2000); // Change image every 2 seconds
				}
				
			</script>
</div>
		
		<div class="clearfix"></div>

			<!-- ITEM START -->
			<div class="item-wrap">
				<p class="item-title">News Item</p>

					<div class="four-item">
						<img src="images/items/Acer_AIO_AZC-105a-120x120.jpg" width="100%">
						<p class="item-name">ACER PC</p>
						<p class="item-price">Rp. 2.000.000</p>
						<a href="#" ><div class="item-button">Beli Sekarang</div></a>
					</div>

					<div class="four-item">
						<img src="images/items/Acer_AIO_AZC-105a-120x120.jpg" width="100%">
						<p class="item-name">ACER PC</p>
						<p class="item-price">Rp. 2.000.000</p>
						<a href="#" ><div class="item-button">Beli Sekarang</div></a>
					</div>

					<div class="four-item">
						<img src="images/items/Acer_AIO_AZC-105a-120x120.jpg" width="100%">
						<p class="item-name">ACER PC</p>
						<p class="item-price">Rp. 2.000.000</p>
						<a href="#" ><div class="item-button">Beli Sekarang</div></a>
					</div>


					<div class="four-item">
						<img src="images/items/Acer_AIO_AZC-105a-120x120.jpg" width="100%">
						<p class="item-name">ACER PC</p>
						<p class="item-price">Rp. 2.000.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
					</div>
			</div>
			<!-- ITEM END -->

			<!-- ITEM(Best Seller) START -->
			<div class="item-wrap">
				<p class="item-title">News Item</p>

					<div class="four-item">
						<img src="images/items/Acer_AIO_AZC-105a-120x120.jpg" width="100%">
						<p class="item-name">ACER PC</p>
						<p class="item-price">Rp. 2.000.000</p>
						<a href="#" ><div class="item-button">Beli Sekarang</div></a>
					</div>

					<div class="four-item">
						<img src="images/items/Acer_AIO_AZC-105a-120x120.jpg" width="100%">
						<p class="item-name">ACER PC</p>
						<p class="item-price">Rp. 2.000.000</p>
						<a href="#" ><div class="item-button">Beli Sekarang</div></a>
					</div>

					<div class="four-item">
						<img src="images/items/Acer_AIO_AZC-105a-120x120.jpg" width="100%">
						<p class="item-name">ACER PC</p>
						<p class="item-price">Rp. 2.000.000</p>
						<a href="#" ><div class="item-button">Beli Sekarang</div></a>
					</div>


					<div class="four-item">
						<img src="images/items/Acer_AIO_AZC-105a-120x120.jpg" width="100%">
						<p class="item-name">ACER PC</p>
						<p class="item-price">Rp. 2.000.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
					</div>
			</div>
			<!-- ITEM END -->

</div>
<!--- Content End -->








	</div>


<!--- Footer Start -->
<footer>
	<div class="one-half">
		<div class="title-list">CATEGORIES</div>
				<ul class="footer-cate">
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>	
				</ul>
	</div>

	<div class="one-half">
		<div class="title-list">CATEGORIES</div>
				<ul class="footer-cate">
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>	
				</ul>
	</div>

	<div class="image-footer-wrap">
		<a href="index.html"><img src="images/logo-footer.png" width="80%"></a>
	</div>

	<div class="service-wrap">
		<p class="service"> Costumer Service 7x24 hour<br>(021) 5000 2017</p>

	</div>
</footer>
<footer class="sec-footer"> Copyright&copy; Rifky</footer>	
 <!--- Footer End -->
</body>
</html>