<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$first = array();
$Period = array();
$test = array();
$test2 = array();
$second = array();
$Date = array();
$count = 0;
for($i=0;$i<=80;$i++)
{
	$test[$i]=0;
	$test2[$i]=0;
	$second[$i]=0;
}
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");

	$result=mysqli_query($con, "SELECT * FROM bingo_lottle order by Period DESC LIMIT 1");
	$tmp = null;
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
  foreach(array($tmp)[0] as $key => $v)
  {
	  $first[0] = $v['number_1'];
	  $first[1] = $v['number_2'];
	  $first[2] = $v['number_3'];
	  $first[3] = $v['number_4'];
	  $first[4] = $v['number_5'];
	  $first[5] = $v['number_6'];
	  $first[6] = $v['number_7'];
	  $first[7] = $v['number_8'];
	  $first[8] = $v['number_9'];
	  $first[9] = $v['number_10'];
	  $first[10] = $v['number_11'];
	  $first[11] = $v['number_12'];
	  $first[12] = $v['number_13'];
	  $first[13] = $v['number_14'];
	  $first[14] = $v['number_15'];
	  $first[15] = $v['number_16'];
	  $first[16] = $v['number_17'];
	  $first[17] = $v['number_18'];
	  $first[18] = $v['number_19'];
	  $first[19] = $v['number_20'];
  }
  $result=mysqli_query($con, "SELECT DISTINCT Date FROM bingo_lottle order by Date desc");
	$tmp = null;
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
  $count=0;
  foreach(array($tmp)[0] as $key => $v)
  {
	  $Date[$count++] = $v['Date'];
  }
  $count--;
  for($j=0;$j<20;$j++)
  {
	  $tmp = null;
	  $result=mysqli_query($con, "SELECT number_1,number_2,number_3,number_4,number_5,number_6,number_7,number_8,number_9,number_10,number_11,number_12,number_13,number_14
		,number_15,number_16,number_17,number_18,number_19,number_20 FROM bingo_lottle where id in
	  (
		  select id+1
		  from bingo_lottle 
		  where (number_1 = $first[$j] or number_2 = $first[$j] 
		  or number_3 = $first[$j] or number_4 = $first[$j] or number_5 = $first[$j]
		  or number_6 = $first[$j] or number_7 = $first[$j] or number_8 = $first[$j] or number_9 = $first[$j] or number_10 = $first[$j]
		  or number_11 = $first[$j] or number_12 = $first[$j] or number_13 = $first[$j] or number_14 = $first[$j] or number_15 = $first[$j]
		  or number_16 = $first[$j] or number_17 = $first[$j] or number_18 = $first[$j] or number_19 = $first[$j] or number_20 = $first[$j])and Date between '$Date[$count]' and '$Date[2]'
	   )");
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
		  $test[$v['number_1']]++;
		  $test[$v['number_2']]++;
		  $test[$v['number_3']]++;
		  $test[$v['number_4']]++;
		  $test[$v['number_5']]++;
		  $test[$v['number_6']]++;
		  $test[$v['number_7']]++;
		  $test[$v['number_8']]++;
		  $test[$v['number_9']]++;
		  $test[$v['number_10']]++;
		  $test[$v['number_11']]++;
		  $test[$v['number_12']]++;
		  $test[$v['number_13']]++;
		  $test[$v['number_14']]++;
		  $test[$v['number_15']]++;
		  $test[$v['number_16']]++;
		  $test[$v['number_17']]++;
		  $test[$v['number_18']]++;
		  $test[$v['number_19']]++;
		  $test[$v['number_20']]++;
	  }
  }
  arsort($test,1);
  $count=0;
  foreach ($test as $key => $value)
  {
	  if($count==10)
	  break;
    $var_key = $key;
    $var_value = $value;
	$test2[$count++]=$var_key;
  }
  	$result=mysqli_query($con, "SELECT * FROM bingo_lottle where Date='$Date[0]' ");
	$tmp = null;
	  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$tmp[]=$row;
	  }
	  foreach(array($tmp)[0] as $key => $v)
	  {
		  $second[$v['number_1']]++;
		  $second[$v['number_2']]++;
		  $second[$v['number_3']]++;
		  $second[$v['number_4']]++;
		  $second[$v['number_5']]++;
		  $second[$v['number_6']]++;
		  $second[$v['number_7']]++;
		  $second[$v['number_8']]++;
		  $second[$v['number_9']]++;
		  $second[$v['number_10']]++;
		  $second[$v['number_11']]++;
		  $second[$v['number_12']]++;
		  $second[$v['number_13']]++;
		  $second[$v['number_14']]++;
		  $second[$v['number_15']]++;
		  $second[$v['number_16']]++;
		  $second[$v['number_17']]++;
		  $second[$v['number_18']]++;
		  $second[$v['number_19']]++;
		  $second[$v['number_20']]++;
		  $how_many=0;
		  for($i=0;$i<10;$i++)
		  {
			  if($second[$test2[$i]] == 1)
			  {
				  $how_many++;
			  }
		  }
		  echo $how_many."<br>";
		  $second = reset2($second);
	  }
  mysqli_close($con);
  function reset2($tset)
  {
	  
	for($i=0;$i<=80;$i++)
	{
		$test[$i]=0;
	}
	return $test;
  }
?>













