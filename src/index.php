<?php
session_start();
if (!isset($_SESSION['token'])){
	header("location: signin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});

             $('#pro').on('change', function() {
                if(this.value=='logout'){$.post("users.php", { action: "logout" },
                  function(data) {
						window.location.href ="signin.php";
                  }
               );}else if(this.value=='account'){
       				window.location.href ="account.php";
               	}else if(this.value=='add'){
					window.location.href ="addnew.php";
				}else if(this.value=='all'){
					window.location.href ="uproducts.php";
               }

			});
		});


</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mail@example.com</a></li>
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.php">Modern <b>Shoppe</b><span class="tag">Everything for Kids world </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
                                      <?php include 'head/select2.php'; ?>

					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="checkout.php">
								<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)
						</a></h4>
						<div class="cart-box">
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<?php include 'manu.php';?>
    </div>
	<!--//header-->

	<!--new-->
	<div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">New <span>Products</span></h3>

			</div>
			<div class="new-info">
				<div id="product_area" style="display: none"></div>
				<div id="skeleton_area"></div>
				<div class="clearfix"> </div>
				<br>
				<br>
				<div id="pagination_area" style="text-align: center" class="mt-2 mb-5">
				<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-end">
							<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#" id="p_1">1</a></li>
							<li class="page-item"><a class="page-link" href="#" id="p_2">2</a></li>
							<li class="page-item">
							<a class="page-link" href="#">Next</a>
							</li>
						</ul>
				</nav>
				</div>
			</div>
		</div>
	</div>
	<!--//new-->

	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.php">Modern <b>Shopping</b></h4>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {

			function $(selector) {
    			return document.querySelector(selector);
  			}

			var p_2 = document.getElementById('p_2');
			p_2.addEventListener('click', function() {
				load_product(2,'')
			});

			var p_1 = document.getElementById('p_1');
			p_1.addEventListener('click', function() {
				load_product(1,'')
			});

			var page = 1;
			var search= "";
			var element = document.getElementById('searching');
			element.addEventListener('input', function() {
			setTimeout(() => {
				load_product(1,element.value)
			}, 2000);
			});
			var keyword = search ? search : "";
			load_product(1, "");
			function load_product(page = 1,query = keyword){
				$("#product_area").style.display = "none";
				$("#skeleton_area").style.display = "block";
				$("#skeleton_area").innerHTML = make_skeleton();
				let url_dev = "http://localhost:4001/v1/";
				let url_prod = "https://nutech-test1.herokuapp.com/v1/";

				fetch(url_prod+`product?keyword=${query}&page=${page}`)
				.then(function(response){
					return response.json();
				})
				.then(function(responseData) {
        			if (responseData.status == 200) {
						let {data} = responseData;
						if (data.total_data > 0) {
						var output = '<div class="row">';
						for (var i = 0; i < data.data.length; i++) {
							output += '<div class="col-md-3 mb-3 p-4" style="margin-bottom:25px;text-align: center;">';
							output +=
							'<img src = "images/' +
							data.data[i].file_name +
							'" class="img-thumbnail text-center" style="height:200px;" />';
							output +=
								'<div class="mb-2 bg-info text-center" style="height:200px;">' +
								'<p>Nama Produk :' +
								data.data[i].name
								'</p>';
								output +=
								'<p> Deskripsi :' +
								data.data[i].description
								'</p>';
								output +=
								'<h5> Harga Beli :' +
								data.data[i].price_buy
								'</h5>';
								output +=
								'<h5> Harga Jual :' +
								data.data[i].price_sale
								'</h5>';

							output += '<div>'
							output += '<p style="backround-color: red;"><a class="item_add" href=""> Add to cart</a></p>'
							output += '</div>'
							output += '<div>'
							output += `<div><form action="edit.php" method="post">
											<input type="text" name="nama_barang" hidden value=${data.data[i].id}>
											<input type="submit" value="edit">
									</form></div>`
							output += '</div>'
							output += '<div>'
							output += `<div><form action="delete.php" method="post">
											<input type="text" name="nama_barang" hidden value=${data.data[i].id}>
											<input type="submit" value="delete">
									</form></div>`
							output += '</div>'
							output +=
								'<div class="mb-2 bg-light text-dark" style="height:50px;"></div>';
							output +=
								'<div class="mb-2 bg-light text-dark" style="height:25px;"></div>';
							output += "</div>";
							output += "</div>";
							}
							output += "</div>";
						$("#product_area").innerHTML = output;

						} else {
							$("#product_area").innerHTML = '<p class="h6">No Product Found</p>';
						}
					}

					setTimeout(function () {
					$("#product_area").style.display = "block";

					$("#skeleton_area").style.display = "none";
					}, 2000);
				})

			}

			function make_skeleton() {
				var output = '<div class="row">';
				for (var count = 0; count < 8; count++) {
				output += '<div class="col-md-3 mb-3 p-4">';
				output +=
					'<div class="mb-2 bg-info text-dark" style="height:240px;"></div>';
				output +=
					'<div class="mb-2 bg-light text-dark" style="height:50px;"></div>';
				output +=
					'<div class="mb-2 bg-light text-dark" style="height:25px;"></div>';
				output += "</div>";
				}
				output += "</div>";
				return output;
			}

			function updateRow (){
				console.log("okee");
			}

		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
