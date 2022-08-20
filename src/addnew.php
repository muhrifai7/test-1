<?php
session_start();
if (!isset($_SESSION['token'])){
	header("location: signin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sign In :: w3layouts</title>
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
<link rel="stylesheet" type="text/css" href="css/example-styles.css">
    <link rel="stylesheet" type="text/css" href="css/demo-styles.css">
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
<script type="text/javascript" src="js/jquery.multi-select.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    function load(){
        document.getElementById('state').style.display="block";
        document.getElementById('error').innerHTML="y r out";
    }
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});


		});

                 $(function(){
                        $('#color').multiSelect();
                        $('#size').multiSelect();
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
					<ul>
						<li class="list">
						<a href="index.php">Home</a>
						</li>
						<li class="list">
						<a href="logout.php">Logout</a>
						</li>
					</ul>

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<?php include 'manu.php';?>
    </div>


	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
	 <div class="login-page-bottom">
          	</div>
		<div class="widget-shadow">
			<div class="alert alert-danger" role="alert" id="state" style="display:none">
					<strong id="error"></strong>
				</div>
                    	<div class="alert alert-success" role="alert" id="state1" style="display:none">
					<strong id="success"></strong>
				</div>
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">

                            <form method="post" action="" enctype="multipart/form-data">
                               Name: <input type="text" name="name" value="" placeholder="Nama">
                               Harga Beli: <input type="text" name="price_buy"  placeholder="Harga Beli" >
                               Harga Jual: <input type="text" name="price_sale"  placeholder="Harga Jual" >

                                 <table><tr><td>Image:&nbsp;&nbsp; &nbsp;</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr></table><br>

                                Description:<br><textarea name="discription" rows="4" cols="52"></textarea>
                                    <input type="submit" name="new" value="Add">

				</form>
			</div>
		</div>

	</div>
	<!--//login-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.html">Shopping</b></a></h4>
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

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>



<?php
echo "<script>document.getElementById(\"state\").style.display=\"none\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML=\" \";</script>";
?>
<?php
if(isset($_POST['new'])){
	extract($_POST);
	$name = $_POST["name"];
	$price_buy = $_POST["price_buy"];
	$price_sale = $_POST["price_sale"];
	$discription = $_POST["discription"];
	$target_dir = "images/";
	$filename=$_FILES["fileToUpload"]["name"];
	$tel=explode(".",$filename);
	$extension=end($tel);
	$newfilename=$tel[0].".".$extension;
	$target_file = $target_dir .$newfilename;

	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		// echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
	echo "<script>document.getElementById(\"error\").innerHTML=\" File is not an image.\";</script>";

		$uploadOk = 0;
	}
	if ($_FILES["fileToUpload"]["size"] > 1000000) {
		echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
	echo "<script>document.getElementById(\"error\").innerHTML+=\"Sorry, your file is too large.\";</script>";

	$uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
			echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
	echo "<script>document.getElementById(\"error\").innerHTML+=\"Sorry, only JPG, JPEG, PNG & GIF files are allowed.\";</script>";

	$uploadOk = 0;
	}
	if ($uploadOk == 0) {
			echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
			echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, your file was not uploaded.\";</script>";
	} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		// todo upload file
		$curl = curl_init();
		// $url= "https://nutech-test1.herokuapp.com/v1";
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://nutech-test1.herokuapp.com/v1/product",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS =>'{
				"name":"' . $name . '",
				"description":"' . $description . '",
				"price_buy":"' . $price_buy . '",
				"price_sale":"' . $price_sale . '",
				"file_name":"' . $newfilename . '"
			}',
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json',
				'hris-token: ' . $_SESSION['token']
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$result = json_decode($response,true);
		if($result["status"] == 200){
			echo "<script>document.getElementById(\"state1\").style.display=\"block\";</script>";
			echo "<script>document.getElementById(\"success\").innerHTML+=\" product added successfuly.\";</script>";
		}else{
			echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
			echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, there was an error uploading your file.\";</script>";
		}
}}
}
?>
