<?php
	header("Content-type:text/html;charset=utf-8");
	$host='127.0.0.1'; //你資料庫的位置
	$name='root'; //帳號
	$pwd='QWE123ASD456ZXC789';//密碼
	$db='Lottery_analysis'; //資料庫名稱
	$longitude = $_POST["longitude"];
	$latitude = $_POST["latitude"];
	$sell_address = $_POST["sell_address"];

	$con = mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	
	if (!$db_select) {
		die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	
	$sql = "Update store_lottle SET longitude = '$longitude', latitude = '$latitude' WHERE sell_address = '$sell_address' ";
	$result = mysqli_query( $con, $sql );
	
	if( !$result ){
		die( "Update_Failed" . mysqli_error( $con ) );
	}
	echo "Update_Successfully";
	
	mysqli_close( $con );
?>