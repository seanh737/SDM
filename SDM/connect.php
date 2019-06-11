<?php
$con = new mysqli("localhost", "root", "miia2019"); //連接伺服器
mysqli_select_db($con, "sdm"); //選擇欲讀取的資料庫名稱
mysqli_query($con, "set character set utf8");
if(!result)
{
    echo ("Error: ".mysqli_error($connect));
    exit();
}
//mysqli_query($con, "set collation_connection = 'utf8_general_ci'");
/*$dep = mysqli_query($con, "select * from dep"); //執行SQL查詢
$rs_dep = mysqli_fetch_row($dep); //讀取該資料表中列的資料，回傳的是一列資料。
echo $rs_dep[0].$rs_dep[1];
echo "<br>";

$survey = mysqli_query($con, "select * from survey"); //執行SQL查詢
for($i = 0 ; $i <= 25 ; $i++){
    $rs_survey = mysqli_fetch_row($survey); //讀取該資料表中列的資料，回傳的是一列資料。
    echo $rs_survey[1] . str_pad($rs_survey[2], 2, "0", STR_PAD_LEFT) . "<br>";
}*/