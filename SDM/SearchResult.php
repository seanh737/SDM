<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

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
	<style>
	
        .fancytable{border:1px solid #cccccc; width:400px;border-collapse:collapse;}
        .fancytable td{border:1px solid #cccccc; color:#555555;line-height:28px;}
        .fancytable1{border:1px solid #cccccc; width:400px;border-collapse:collapse;}
        .fancytable1 td{border:1px solid #cccccc; color:#555555;text-align:center;line-height:28px;}
        .headerrow{ background-color:#ffa482;}
        .headerrow td{ color:000000; text-align:center;}
        .datarowodd{background-color:#ffffff;}
        .dataroweven{ background-color:#efefef;}
        .datarowodd td{background-color:#ffffff;}
        .dataroweven td{ background-color:#efefef;}
        .sexyborder{
             border:1px solid #0066cc; padding:5px;
             -webkit-border-radius: 5px;
             -moz-border-radius: 5px;
             border-radius: 5px;
        }
	</style>
	<!-- css files -->
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
<?php 
$con = new mysqli("localhost", "root", "miia2019"); //連接伺服器
mysqli_select_db($con, "sdm"); //選擇欲讀取的資料庫名稱
$sequence=$_GET['sequence'];
$check=mysqli_query($con,"select * from ans where ans_no ='$sequence'");
$test=mysqli_fetch_row($check);
if (empty($test[0])) {
    echo "<script>alert('警告：輸入序號有誤'); history.go(-1);</script>";
    exit();
}
//顯示圖
define('CHINESE_TTF_FONT','mingliu.ttc');
require_once ('jpgraph-4.2.7/src/jpgraph.php');
require_once ('jpgraph-4.2.7/src/jpgraph_bar.php');
//資料庫
$ans=mysqli_query($con,"select * from ans where ans_no like '%$sequence%'");
$ques=mysqli_query($con,"SELECT question FROM ques WHERE survey_seq = (select survey_seq from ans where ans_no like '%$sequence%')");
//問題
$rs=mysqli_fetch_row($ques);
$ques1 = $rs[0];
$rs=mysqli_fetch_row($ques);
$ques2 = $rs[0];
$rs=mysqli_fetch_row($ques);
$ques3 = $rs[0];
$rs=mysqli_fetch_row($ques);
$ques4 = $rs[0];
//答案
$a=mysqli_fetch_row($ans);
switch ($a[3]){
    case "非常重要":
        $a[3] = 5;
        break;
    case "重要":
        $a[3] = 4;
        break;
    case "普通":
        $a[3] = 3;
        break;
    case "不重要":
        $a[3] = 2;
        break;
    case "非常不重要":
        $a[3] = 1;
        break;
}
switch ($a[4]){
    case "非常重要":
        $a[4] = 5;
        break;
    case "重要":
        $a[4] = 4;
        break;
    case "普通":
        $a[4] = 3;
        break;
    case "不重要":
        $a[4] = 2;
        break;
    case "非常不重要":
        $a[4] = 1;
        break;
}
switch ($a[5]){
    case "非常重要":
        $a[5] = 5;
        break;
    case "重要":
        $a[5] = 4;
        break;
    case "普通":
        $a[5] = 3;
        break;
    case "不重要":
        $a[5] = 2;
        break;
    case "非常不重要":
        $a[5] = 1;
        break;
}
switch ($a[6]){
    case "非常重要":
        $a[6] = 5;
        break;
    case "重要":
        $a[6] = 4;
        break;
    case "普通":
        $a[6] = 3;
        break;
    case "不重要":
        $a[6] = 2;
        break;
    case "非常不重要":
        $a[6] = 1;
        break;
}

$datay=array($a[3],$a[4],$a[5],$a[6]);

// 畫布大小,刻度顯示
$graph = new Graph(1000,500,'auto');
$graph->SetScale("textint");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->Set90AndMargin(190,40,40,30);//設定統計圖邊距 左、右、上、下
$graph->img->SetAngle(90);//設定圖形在影象中的角度

// set major and minor tick positions manually
$graph->SetBox(false);

//設定中文字
$graph->xaxis->SetFont(FF_CHINESE, FS_NORMAL);
$graph->yaxis->SetFont(FF_CHINESE, FS_NORMAL);
$graph->legend->SetFont(FF_CHINESE, FS_NORMAL);
$graph->subtitle->SetFont(FF_CHINESE, FS_NORMAL);
$graph->subsubtitle->SetFont(FF_CHINESE, FS_NORMAL);
$graph->tabtitle->SetFont(FF_CHINESE, FS_NORMAL);
//內容
$graph->ygrid->Show(false);
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array($ques1,$ques2,$ques3,$ques4));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// 背景色
//$graph->SetBackgroundGradient('#00CED1', '#FFFFFF', GRAD_HOR, BGRAD_PLOT);

// Create the bar plots
$b1plot = new BarPlot($datay);

// 將柱形圖添加到圖像中
$graph->Add($b1plot);

$b1plot->SetWeight(0);
//長條圖顏色(深,淺)
//$b1plot->SetFillGradient("#FF3D60","#FFA3A3",GRAD_HOR);
$b1plot->SetFillGradient("#FF3258","#FF9E9E",GRAD_HOR);
$b1plot->SetWidth(45); //粗度

// Display the graph
@unlink("pic/sdm.png");
$graph_name = "pic/sdm.png";
$graph->Stroke($graph_name);
?>

<!-- top header -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<ul class="d-lg-flex header-w3_pvt">
					<li class="mr-lg-3 "></li>
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
				<li class="active"><a href="index.php"><img src="images/home.png" class="img-fluid" alt="" style="max-width:20px;"/>首頁</a></li>
				<li class=""><a href="about.php"><img src="images/pharmacy.png" class="img-fluid" alt="" style="max-width:20px;"/>SDM 簡介</a></li>
				<li class=""><a href="services.php"><img src="images/wrench.png" class="img-fluid" alt="" style="max-width:20px;"/>輔助工具</a></li>
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

<!-- about -->
<section class="about py-5">
	<div class="layer">
		<h2 class="heading text-center mb-sm-5">查詢結果 </h2>
		<h4 class="heading text-center mb-sm-5">問卷序號：<?php echo $sequence?> </h4>
		<div class="row offer-grids">
			<div class="col-lg-2 col-md-6">
			</div>
			<div class="col-lg-8 col-md-6 mt-md-0 mt-4">
				<div class="ser2">
					<div class="bg-layer">
						<h4 class="">詢問傾向</h4>
						<img src="pic/sdm.png"> 
						
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
			</div>
		</div>
		<br>
		<div class="row offer-grids">
			<div class="col-lg-2 col-md-6">
			</div>
			<div class="col-lg-8 col-md-6 mt-md-0 mt-4">
				<div class="ser2">
					<div class="bg-layer">
						<h4 class="">認知</h4>
						<br>
						<table border="1"  class="sexyborder">
                        <tr>
                        <td valign="top">
                        
                        <table class="fancytable" border="1">
                           <tr class="headerrow">
                            <td >問題</td>
                          </tr>
                        <?php
                        require("connect.php");
                        $sequence=$_GET['sequence'];
                        $ans=mysqli_query($con,"select * from ans where ans_no like '%$sequence%'");
                        $ques=mysqli_query($con,"SELECT question FROM ques WHERE survey_seq = (select survey_seq from ans where ans_no like '%$sequence%')");
                        for($j=1;$j<=4;$j++){
                            $rs=mysqli_fetch_row($ques);
                        }
                        for($i=1;$i<=4;$i++){
                        $rs=mysqli_fetch_row($ques);
                        ?>
                          <tr class="datarowodd">
                            <td><?php echo $rs[0]?></td>
                          </tr>
                           
                          
                          <?php
                        }
                        ?>
                        </table>
                        
                        </td>
                        <td valign="top">
                        <table class="fancytable1" border="1">
                           <tr class="headerrow">
                            <td >您的回答</td>
                          </tr>
                        <?php
                        for($i=1;$i<=mysqli_num_rows($ans);$i++){
                        $rs2=mysqli_fetch_row($ans);
                        ?>
                            <tr class="datarowodd">
                            <td><?php echo $rs2[7]?></td>
                            </tr>
                              <tr class="">
                            <td><?php echo $rs2[8]?></td>
                            </tr>
                              <tr class="datarowodd">
                            <td><?php echo $rs2[9]?></td>
                            </tr>
                              <tr class="">
                            <td><?php echo $rs2[10]?></td>
                            </tr>
                          <?php
                        }
                        ?>
                        </table>
                        </td>
                        </tr>
                        </table>
                        
						<div class="row offer-grids">
						<div class="col-lg-4 col-md-6 mt-md-0 mt-4"></div>
						<div class="col-lg-4 col-md-6 mt-md-0 mt-4"></div>
						<div class="col-lg-4 col-md-6 mt-md-0 mt-4"></div>
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
			</div>
		</div>
		<br>
		<div class="row offer-grids">
			<div class="col-lg-2 col-md-6">
			</div>
			<div class="col-lg-8 col-md-6 mt-md-0 mt-4">
				<div class="ser2">
					<div class="bg-layer">
						<h4 class="mt-3">最終抉擇</h4>
						<br>
					<?php
                        $rs=mysqli_fetch_row($ques);
                        echo $rs[0].'<br>';
                        echo $rs2[11].'<br>';
                       
                        ?>
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
			</div>
		</div>
		<br>
		<div class="row offer-grids">
			<div class="col-lg-2 col-md-6">
			</div>
			<div class="col-lg-8 col-md-6 mt-md-0 mt-4">
				<div class="ser2">
					<div class="bg-layer">
						<h4 class="">與醫生討論</h4>
						<br>
						<?php 
						$rs=mysqli_fetch_row($ques);
						echo $rs[0].'<br>';
						echo $rs2[12].'<br>';
						?>
						<div class="row offer-grids">
						<div class="col-lg-4 col-md-6 mt-md-0 mt-4"></div>
						<div class="col-lg-4 col-md-6 mt-md-0 mt-4"></div>
						<div class="col-lg-4 col-md-6 mt-md-0 mt-4"></div>
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
			</div>
		</div>
</section>
<!-- //about -->
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
					$c=file("searchresult.txt");
					$c[0]++;
					echo $c[0];
					$f_id=fopen("searchresult.txt","w");
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