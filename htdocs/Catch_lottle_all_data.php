<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$game_name = $_POST["game_name"];//資料表名
$date1 = $_POST["date1"];//最新日期
$date2 = $_POST["date2"];//較舊日期
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con, "SELECT DISTINCT * FROM $game_name where  date between  '".$date2."' and '".$date1."' order by Period DESC");
  if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
  if($game_name == "big_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];echo "WW";echo $v['number_6'];echo "WW";echo $v['surprise_number'];
	  }
  }
  else if($game_name == "big_bless_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];echo "WW";echo $v['number_6'];echo "WW";echo $v['number_7'];echo "WW";echo $v['surprise_number'];
	  }
  }
  else if($game_name == "bingo_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];echo "WW";echo $v['number_6'];echo "WW";echo $v['number_7'];echo "WW";echo $v['number_8'];echo "WW";echo $v['number_9'];echo "WW";echo $v['number_10'];
		echo "WW";echo $v['number_11'];echo "WW";echo $v['number_12'];echo "WW";echo $v['number_13'];echo "WW";echo $v['number_14'];echo "WW";echo $v['number_15'];echo "WW";echo $v['number_16'];echo "WW";echo $v['number_17'];echo "WW";echo $v['number_18'];echo "WW";echo $v['number_19'];echo "WW";echo $v['number_20'];echo "WW";echo $v['surprise_number'];
		echo "WW";echo $v['guess_size'];echo "WW";echo $v['guess_double'];
		if($v['guess_double']==null)echo '－';
	  }
  }
  else if($game_name == "double_win_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];echo "WW";echo $v['number_6'];echo "WW";echo $v['number_7'];echo "WW";echo $v['number_8'];echo "WW";echo $v['number_9'];echo "WW";echo $v['number_10'];
		echo "WW";echo $v['number_11'];echo "WW";echo $v['number_12'];
	  }
  }
  else if($game_name == "five_three_nine_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];
	  }
  }
  else if($game_name == "four_nine_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];echo "WW";echo $v['number_6'];
	  }
  }
  else if($game_name == "four_star_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];
	  }
  }
  else if($game_name == "power_color_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];echo "WW";echo $v['number_6'];echo "WW";echo $v['second_district'];
	  }
  }
  else if($game_name == "three_eight_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];echo "WW";echo $v['number_6'];
	  }
  }
  else if($game_name == "three_nine_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];
	  }
  }
  else if($game_name == "three_star_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Period'];echo "WW";echo $v['Date'];echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];
	  }
  }
  mysqli_close($con);
?>