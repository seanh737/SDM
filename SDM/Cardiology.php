<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
require 'connect.php';
$survey = mysqli_query($con, "select * from survey"); //執行SQL查詢
for($i = 1 ; $i <= 9 ; $i++){
    $rs_survey = mysqli_fetch_row($survey);
}
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
<title>醫病共享決策平台－恩主公醫院</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dental Health Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="/jquery/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		$("#inD").click(function(){
		$("#inDD").toggle();
			});
			});

		$(document).ready(function(){
			$("#outD").click(function(){
			$("#outDD").toggle();
			});
			});

		$(document).ready(function(){
			$("#otherD").click(function(){
			$("#otherDD").toggle();
			});
			});
	</script>
	
	<!-- css files -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all"><!-- slider css -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
</head>

<body>

<!-- top header -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<ul class="d-lg-flex header-w3_pvt">
					<li class="mr-lg-3"></li>
					<li></li>
				</ul>
			</div>
			<div class="col-sm-10 header-right-w3_pvt">
				<ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
				<li class="mr-lg-3 mt-2">
					
					</li>
				<li class="mr-lg-3 mt-2">
				
						<h5 class=""><img src="images/find2.jpg" class="img-fluid" alt="" style="max-width:33px;"/>&nbsp;查詢結果：</h5>
					</li>
					<li class="row footer-grids">
						<form id="form1" name="form1" method="get" action="SearchResult.php"  style="width:400px">
						<input type="text" id="sequence" name="sequence" placeholder="請輸入問卷序號" value="<?php echo $sequence?>"/>
						<button type="submit" name="button" id="button" class="btn">搜尋</button>
					</form>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //top header -->

<!-- //header -->
<header class="py-3">
	<div class="container">
			<div id="logo">
				<h1> <a href="index.php"><span class="fa fa-stethoscope" aria-hidden="true"></span>醫病共享決策平台－</a><a href="http://www.eck.org.tw/">恩主公醫院</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class="active"><a href="index.php">首頁</a></li>
				<li class=""><a href="about.php">SDM 簡介</a></li>
				<li class=""><a href="services.php">輔助工具</a></li>
			</ul>	
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer"></div>
</div>
<!-- //banner -->

<section class="about py-5">
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<h3 class="heading text-center mb-sm-5 mb-4">輔助工具</h3>
			<div class="row offer-grids">
				<div class="col-lg-2 col-md-12">
					<div >
						<div class="bg-layer">
						<button class="btn btn-banner my-sm-1 mb-5" style="width: 137px;" id="inD"><b>內科部</b></button>
						<div id="inDD" style="display: none;">
						<a href="Gastroenterology.php" class="btn btn-banner mb-1" style="width: 137px;">胃腸肝膽科</a>
						<a href="Cardiology.php" class="btn btn-banner mb-1" style="width: 137px; background:#67C9CE;">心 臟 內 科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">神 經 內 科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">皮　膚　科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">家　醫　科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">內 分 泌 科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">腎　臟　科</a>
						</div>
						
						<button class="btn btn-banner my-sm-1 mb-5" style="width: 137px;"id="outD"><b>外科部</b></button>
						<div id="outDD" style="display: none;">
						<a href="Urology.php" class="btn btn-banner mb-1" style="width: 137pxx;">泌　尿　科</a>
						<a href="Orthopedics.php" class="btn btn-banner mb-1" style="width: 137px;">骨　　科</a>
						<a href="CardiologySurgery.php" class="btn btn-banner mb-1" style="width: 137px;">心 臟 外 科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">神 經 外 科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">大腸直腸科</a>
						</div>
						
						<button class="btn btn-banner my-sm-1 mb-5" style="width: 137px;" id="otherD"><b>其他科別</b></button>
						<div  id="otherDD" style="display: none;">
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">精　神　科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">胸　腔　科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">復　健　科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">急診醫學科</a>
						<a href="#" class="btn btn-banner mb-1" style="width: 137px;">婦　產　科</a>
						</div>
						
						</div>
					</div>
				</div>
			<div class="col-lg-10 col-md-12 mt-md-0 mt-4">
				<div class="ser2">
					<div class="bg-layer">
						<h4 class="">心臟內科</h4>
						<p class="mt-3">主題一：<a href="#">
						<?php 
						$rs_survey = mysqli_fetch_row($survey);
						echo $rs_survey[3];?>
						</a></p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</section>

<!-- about bottom -->
<section >
	<div >
		
	</div>
</section>
<!-- //about bottom -->

<!-- about bottom -->
<section >
	<div >
		
	</div>
</section>
<!-- //about bottom -->

<!-- testimonials -->
<section class="feedback" id="testimonials">
	<div class="feedback-layer py-5">
		<div class="container py-lg-5">
		
		</div>
	</div>
</section>
<!-- //testimonials -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-sm-3">
		<div class="row footer-grids">
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-sm-4 mb-3"><span class="fa fa-stethoscope"></span>醫病共享決策平台</h4>
			</div>
			
			<div class="col-lg-4 col-sm-6">
				<h4 class="mb-sm-4 mb-3">行天宮醫療志業醫療財團法人恩主公醫院</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>237<span>新北市三峽區復興路399號</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span>(02)2672-3456</p>
			</div>
			
			<div class="col-lg-4 col-sm-6">
					<h4 class="mb-sm-4 mb-3">瀏覽人次： 
					<?php 
					$c=file("service.txt");
					$c[0]++;
					echo $c[0];
					//echo $rs_survey[1] . str_pad($rs_survey[2], 2, "0", STR_PAD_LEFT) . str_pad($c[0], 4, "0", STR_PAD_LEFT);
					$f_id=fopen("service.txt","w");
					fputs($f_id, $c[0]);
					fclose($f_id);
					?></h4>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright">
	<div class="container py-4">
		<div class="text-center">
			<p>© 2019 醫病共享決策平台 | Design by 輔大醫資學程</p>
		</div>
	</div>
</div>
<!-- //copyright -->
		
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>