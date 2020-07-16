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
	$result=mysqli_query($con, "SELECT * FROM big_lottle ORDER BY Period DESC");
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
		  $CC[$v['surprise_number']]++;
		  if(check($CC))break;
  }
  $count=0;
  asort($CC,1);
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
  mysqli_close($con);
function reset2($CC)
{
	for($i=1;$i<=49;$i++)
	{
		$CC[$i]=0;
		//echo $CC[$i]." ";
	}
	return $CC;
}
function check($CC)
{
	$count=0;
	for($i=1;$i<=49;$i++)
	{
		if($CC[$i]>=1)
			$count++;
		if($count==43)
			return 1;
	}
	return 0;
}
?>