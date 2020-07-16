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
	$number_7 = $_POST["number_7"];
	$number_8 = $_POST["number_8"];
	$number_9 = $_POST["number_9"];
	$number_10 = $_POST["number_10"];
	$guess_size = $_POST["guess_size"];
	$guess_double = $_POST["guess_double"];

	$con = mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	
	if (!$db_select) {
		die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	
	$sql = "INSERT INTO favorite_bingo_lottle( number_1, number_2, number_3, number_4, number_5, number_6, number_7, number_8, number_9, number_10, guess_size, guess_double )
									VALUES( '$number_1', '$number_2', '$number_3','$number_4', '$number_5', '$number_6', '$number_7', 
									'$number_8', '$number_9', '$number_10', '$guess_size', '$guess_double' )";
	//$sql = "INSERT INTO favorite_bingo_lotto( number_1, number_2, number_3, number_4, number_5, number_6, number_7, number_8, number_9, number_10, guess_size, guess_double )
									//VALUES( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '大', '雙' )";

	$result = mysqli_query( $con, $sql );
	
	if( !$result ){
		die( "Insert_Failed" . mysqli_error( $con ) );
	}
	echo "Insert_Successfully";
	
	mysqli_close( $con );
?>