<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$game_name = $_POST["game_name"];//資料表名
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con, "SELECT distinct(Date) FROM $game_name order by Period DESC");
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
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "big_bless_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "bingo_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "double_win_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "five_three_nine_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "four_nine_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "four_star_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "power_color_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "three_eight_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "three_nine_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  else if($game_name == "three_star_lottle")
  {
	  foreach (array($tmp)[0] as $key => $v){
		echo "WW";echo $v['Date'];
	  }
  }
  mysqli_close($con);
?>