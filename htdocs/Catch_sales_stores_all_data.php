<?php
	header("Content-type:text/html;charset=utf-8");
	$host='127.0.0.1'; //你資料庫的位置
	$name='root'; //帳號
	$pwd='QWE123ASD456ZXC789';//密碼
	$db='Lottery_analysis'; //資料庫名稱
	$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");
	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
		die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query( $con, "SELECT sell_address, Store_Name , longitude, latitude FROM sales_stores where sell_address like '%".$_POST['sell_address']."%' ");
	//$result=mysqli_query( $con, "SELECT Address,Store_Name FROM sales_stores address Like '".$Area."' ");
	if (!$result) {
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}
	while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$tmp[]=$row;
	}
	foreach (array($tmp)[0] as $key => $v){
		echo "WW";
		echo $v['Store_Name'];
		echo "WW";
		echo $v['sell_address'];
		echo "WW";
		echo $v['latitude'];
		echo "WW";
		echo $v['longitude'];
	}
	mysqli_close($con);
?>