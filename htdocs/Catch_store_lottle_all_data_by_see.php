<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$Game_name = $_POST["Game_name"];//資料表名
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con, "SELECT * FROM store_lottle where  Game_name = '".$Game_name."' ");
  if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
  if($tmp!=null)
  foreach (array($tmp)[0] as $key => $v){
	echo "WW";
	echo $v['Game_name'];
	echo "WW";
	echo $v['Period'];
	echo "WW";
	echo $v['Date'];
	echo "WW";
	echo $v['sell_name'];
	echo "WW";
	echo $v['sell_address'];
	echo "WW";
	echo $v['latitude'];
	echo "WW";
	echo $v['longitude'];
  }
  mysqli_close($con);
?>