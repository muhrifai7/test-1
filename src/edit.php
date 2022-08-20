<?php
session_start();
if (!isset($_SESSION['token'])){
	header("location: signin.php");
}
function callAPI($method, $url, $data){
	$curl = curl_init();
	switch ($method){
	   case "POST":
		  curl_setopt($curl, CURLOPT_POST, 1);
		  if ($data)
			 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		  break;
	   case "PUT":
		  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
		  if ($data)
			 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		  break;
	   default:
		  if ($data)
			 $url = sprintf("%s?%s", $url, http_build_query($data));
	}
	// OPTIONS:
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'hris-token: ' . $_SESSION['token']
	));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	// EXECUTE:
	$result = curl_exec($curl);
	if(!$result){die("Connection Failure");}
	curl_close($curl);
	return $result;
 }

$id = $_POST["nama_barang"];
$curl = curl_init();
$response = array();
if($id){
	$get_data = callAPI('GET', "https://nutech-test1.herokuapp.com/v1/product/".$id, false);
	$response = json_decode($get_data, true);
}

$res = array(
	"id" => $response["data"]["id"],
	"name" => $response["data"]["name"],
	"file_name" => $response["data"]["file_name"],
	"description" => $response["data"]["description"],
	"price_buy" => $response["data"]["price_buy"],
	"price_sale" => $response["data"]["price_sale"]
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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

<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.multi-select.js"></script>
<!--//js-->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
  //alert( this.value );
});

 $(function(){
             $('#color').multiSelect();
             $('#size').multiSelect();
 });

function load(){
}


</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
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
		});

		$('#pro').on('change', function() {
			console.log(this.value,"sdadasd")
                if(this.value=='logout'){$.post("users.php", { action: "logout" },
                  function(data) {
						window.location.href ="signin.php";
                  }
               );}else if(this.value=='account'){
       				window.location.href ="account.php";
               	}else if(this.value=='add'){
					window.location.href ="addnew.php";
				}else if(this.value=='all'){
					window.location.href ="index.php";
               }

			});

</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<?php if(!isset($_SESSION['token']))   include 'head/alert.php'; ?>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mail@example.com</a></li>
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.php">Shooping</a></h1>
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
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php include 'manu.php';?>
	<!--//header-->
	<!--breadcrumbs-->
<div id="error"></div>
<div id="state"></div>
<div class="alert alert-danger" role="alert" id="state" style="display:none">
	<strong id="error"></strong>
</div>
<div class="alert alert-success" role="alert" id="state1" style="display:none">
	<strong id="success"></strong>
</div>
	<div class="single">
		<div class="container">
			<div class="single-info">
				<div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/s1.jpg">
								<div class="thumb-image"> <img src=<?php echo "images/".$res["file_name"] ?> data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
                                    <form method="post" action="" enctype="multipart/form-data" onsubmit="return load()">
					<h3><input type="text" name="name" size="37" value="<?php echo $res['name'];?>"></h3>
                                        <div class="single-rating">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5" checked>
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
						<p><?php echo $str['rate'];?> out of 5</p>
						<a href="#">Add Your Review</a>
					</div>
                                        <table><tr><td><font color="orange" size="4">Price Buy (&#8377) :  </font></td>
                                                <td><h6 class="item_price">&nbsp;<input type="text" name="price_buy" value="<?php echo $res['price_buy'];?>"></h6></td></tr></table>
												<table><tr><td><font color="orange" size="4">Price Sale (&#8377) :  </font></td>
                                                <td><h6 class="item_price">&nbsp;<input type="text" name="price_sale" value="<?php echo $res['price_sale'];?>"></h6></td></tr></table>
					<br>


					<div class="clearfix"> </div><br>
                                         <table><tr><td valign="top"><br><font color="orange" size="4">Description :  </font></td>
                                                  <td valign="top"><p>&nbsp;<textarea  cols="37" rows="3" name="description"><?php echo $res['description'];?></textarea> </p></td></tr></table>
					<table><tr><td><font color="orange" size="4">Images :  </font></td><td><input id="fileupload" class="image" type="file" name="fileToUpload" id="fileToUpload"></td></tr></table><br>

					<input type="text" hidden name="id" value="<?php echo $res['id'];?>">
                                            <input type="submit" name="update" value="Update">
					</form>

				</div>
			   <div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!--//single-page-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.php"><b>Shopping</b></a></h4>
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
if(isset($_POST['update'])){
	extract($_POST);
	$id = $_POST["id"];
	$name = $_POST["name"];
	$price_buy = $_POST["price_buy"];
	$price_sale = $_POST["price_sale"];
	$description = $_POST["description"];

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

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://nutech-test1.herokuapp.com/v1/product/'.$id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PATCH',
			CURLOPT_POSTFIELDS =>'{
				"name":"' . $name . '",
				"description":"' . $description . '",
				"price_buy":"' . $price_buy . '",
				"price_sale":"' . $price_sale . '",
				"file_name":"' . $newfilename . '"
			}',
			CURLOPT_HTTPHEADER => array(
				'hris-token: ' . $_SESSION['token'],
				'Content-Type: application/json'
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			$res = json_decode($response,true);

			if($res["status"] == 200){
				echo "<script>document.getElementById(\"state1\").style.display=\"block\";</script>";
			echo "<script>document.getElementById(\"success\").innerHTML+=\" product Update successfuly.\";</script>";
			}else{
				echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
				echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, there was an error uploading your file.\";</script>";
			}
	}}
	}
?>
