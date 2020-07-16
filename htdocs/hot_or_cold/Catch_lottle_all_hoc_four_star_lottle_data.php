<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$date1 = $_POST["date1"];//最新日期
$date2 = $_POST["date2"];//較舊日期
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con,"SELECT number_1, number_2,number_3,number_4 FROM four_star_lottle where date between  '".$date2."' and '".$date1."' ");//user=資料表
  if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
	foreach (array($tmp)[0] as $key => $v){
	echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];
  }
  mysqli_close($con);
?>



