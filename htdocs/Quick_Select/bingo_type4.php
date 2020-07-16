<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$CC=array();
$CC = reset2($CC);
$count=0;
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con, "SELECT * FROM bingo_lottle ORDER BY Period DESC limit 5000");
  if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
 
  foreach (array($tmp)[0] as $key => $v){
		  $CC[$v['number_1']]++;
		  if(check($CC))break;
		  $CC[$v['number_2']]++;
		  if(check($CC))break;
		  $CC[$v['number_3']]++;
		  if(check($CC))break;
		  $CC[$v['number_4']]++;
		  if(check($CC))break;
		  $CC[$v['number_5']]++;
		  if(check($CC))break;
		  $CC[$v['number_6']]++;
		  if(check($CC))break;
		  $CC[$v['number_7']]++;
		  if(check($CC))break;
		  $CC[$v['number_8']]++;
		  if(check($CC))break;
		  $CC[$v['number_9']]++;
		  if(check($CC))break;
		  $CC[$v['number_10']]++;
		  if(check($CC))break;
		  $CC[$v['number_11']]++;
		  if(check($CC))break;
		  $CC[$v['number_12']]++;
		  if(check($CC))break;
		  $CC[$v['number_13']]++;
		  if(check($CC))break;
		  $CC[$v['number_14']]++;
		  if(check($CC))break;
		  $CC[$v['number_15']]++;
		  if(check($CC))break;
		  $CC[$v['number_16']]++;
		  if(check($CC))break;
		  $CC[$v['number_17']]++;
		  if(check($CC))break;
		  $CC[$v['number_18']]++;
		  if(check($CC))break;
		  $CC[$v['number_19']]++;
		  if(check($CC))break;
		  $CC[$v['number_20']]++;
		  if(check($CC))break;
  }
  $count=0;
  asort($CC,1);
  foreach ($CC as $key => $value)
  {
	  if($count==10)
		  break;
    $var_key = $key;
    $var_value = $value;
    echo $var_key;
	echo '<br>';
	$count++;
  }
  mysqli_close($con);
function reset2($CC)
{
	for($i=1;$i<=80;$i++)
	{
		$CC[$i]=0;
	}
	return $CC;
}
function check($CC)
{
	$count=0;
	for($i=1;$i<=80;$i++)
	{
		if($CC[$i]>=1)
			$count++;
		if($count==70)
			return 1;
	}
	return 0;
}
?>