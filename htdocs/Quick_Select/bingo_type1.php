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

	  $tmp = null;
	  $result=mysqli_query($con, "SELECT * from store_bingo_qucik_number where ID=1");
	  if (!$result) {
		 printf("Error: %s\n", mysqli_error($con));
		 exit();
		}
	  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$tmp[]=$row;
	  }
	  if($tmp!=null)
	  foreach(array($tmp)[0] as $key => $v)
	  {
		  echo $v["number_1"];
		  echo "<br>".$v["number_2"];
		  echo "<br>".$v["number_3"];
		  echo "<br>".$v["number_4"];
		  echo "<br>".$v["number_5"];
		  echo "<br>".$v["number_6"];
		  echo "<br>".$v["number_7"];
		  echo "<br>".$v["number_8"];
		  echo "<br>".$v["number_9"];
		  echo "<br>".$v["number_10"];
	  }
  
  mysqli_close($con);
?>













