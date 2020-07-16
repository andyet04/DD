<?php
	header("Content-type:text/html;charset=utf-8");
	$host='127.0.0.1'; //你資料庫的位置
	$name='root'; //帳號
	$pwd='QWE123ASD456ZXC789';//密碼
	$db='Lottery_analysis'; //資料庫名稱
	$number_1 = $_POST["number_1"];
	$number_2 = $_POST["number_2"];
	$number_3 = $_POST["number_3"];
	$number_4 = $_POST["number_4"];
	$number_5 = $_POST["number_5"];
	$number_6 = $_POST["number_6"];

	$con = mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	
	if (!$db_select) {
		die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	
	$sql = "INSERT INTO favorite_big_lottle(number_1, number_2, number_3, number_4, number_5, number_6 )
									VALUES('$number_1', '$number_2', '$number_3', '$number_4', '$number_5', '$number_6')";
	//$sql = "INSERT INTO favorite_big_lotto( number_1, number_2, number_3, number_4, number_5, number_6 )
									//VALUES( 1, 2, 3, 4, 5, 6 )";

	$result = mysqli_query( $con, $sql );
	
	if( !$result ){
		die( "Insert_Failed" . mysqli_error( $con ) );
	}
	echo "Insert_Successfully";
	
	mysqli_close( $con );
?>