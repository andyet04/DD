<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$data2 = $_POST["data2"];//財富運
$data1 = $_POST["data1"];//開運小秘方
$date = $_POST["date"];//查詢日期

$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con, "SELECT date, ".$data1.", ".$data2." FROM lucky_constellation where date = '".$date."' ");
	//變數前後要弄  => .$變數名稱. 
	//$result=mysqli_query($con, "SELECT date, ".$data1.", ".$data2." FROM lucky_constellation  where  date = ".$date."' order by date DESC");
  if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }	
  foreach (array($tmp)[0] as $key => $v){
    echo "WW";
	echo $v['date'];
	echo "WW";
	echo $v[$data1];
	echo "WW";
	echo $v[$data2];
  }
  mysqli_close($con);
?>