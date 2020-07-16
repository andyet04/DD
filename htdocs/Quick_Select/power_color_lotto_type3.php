<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$CC=array();
$second_district=array();
$CC = reset2($CC);
$second_district = reset1($second_district);
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con, "SELECT * FROM favorite_power_color_lottle ");
  if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
 
  foreach (array($tmp)[0] as $key => $v){
		  $CC[$v['number_1']]++;
		  $CC[$v['number_2']]++;
		  $CC[$v['number_3']]++;
		  $CC[$v['number_4']]++;
		  $CC[$v['number_5']]++;
		  $CC[$v['number_6']]++;
		  $second_district[$v['second_district']]++;
  }
  $count=0;
  arsort($CC,1);
  arsort($second_district,1);
  foreach ($CC as $key => $value)
  {
	  if($count==6)
		  break;
    $var_key = $key;
    $var_value = $value;
    echo $var_key;
	echo '<br>';
	$count++;
  }
  foreach ($second_district as $key => $value)
  {
    $var_key = $key;
    $var_value = $value;
    echo $var_key;
	echo '<br>';
	break;
  }
  mysqli_close($con);
function reset2($CC)
{
	for($i=1;$i<=38;$i++)
	{
		$CC[$i]=0;
	}
	return $CC;
}
function reset1($CC)
{
	for($i=1;$i<=8;$i++)
	{
		$CC[$i]=0;
	}
	return $CC;
}
?>