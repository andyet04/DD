<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$CC=array();
$test2=array();
$CC = reset2($CC);
$count=0;
$RD=rand(2,4);
$RD++;
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con, "SELECT number_1,number_2,number_3,number_4,number_5,number_6,number_7,number_8
,number_9,number_10,number_11,number_12,number_13,number_14,number_15,number_16,number_17,number_18,number_19,number_20	FROM bingo_lottle order by rand() limit 10000");
  if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
 $row=null;
  foreach (array($tmp)[0] as $key => $v){
	  if($count%$RD==0)
	  {
		  $CC[--$v['number_1']]++;
		  $CC[--$v['number_2']]++;
		  $CC[--$v['number_3']]++;
		  $CC[--$v['number_4']]++;
		  $CC[--$v['number_5']]++;
		  $CC[--$v['number_6']]++;
		  $CC[--$v['number_7']]++;
		  $CC[--$v['number_8']]++;
		  $CC[--$v['number_9']]++;
		  $CC[--$v['number_10']]++;
		  $CC[--$v['number_11']]++;
		  $CC[--$v['number_12']]++;
		  $CC[--$v['number_13']]++;
		  $CC[--$v['number_14']]++;
		  $CC[--$v['number_15']]++;
		  $CC[--$v['number_16']]++;
		  $CC[--$v['number_17']]++;
		  $CC[--$v['number_18']]++;
		  $CC[--$v['number_19']]++;
		  $CC[--$v['number_20']]++;
	  }
	  $count++;
  }
  $count=0;
  arsort($CC,1);
  foreach ($CC as $key => $value)
  {
	  if($count==10)
		  break;
    $var_key = $key;
    $var_value = $value;
    echo "WW".($var_key+1);
	$test2[$count++] = ++$var_key;
  }
  $result=mysqli_query($con, "update store_bingo_qucik_number SET number_1= $test2[0], number_2= $test2[1], number_3= $test2[2], number_4= $test2[3], number_5= $test2[4], number_6= $test2[5], number_7= $test2[6], number_8= $test2[7], number_9= $test2[8], number_10= $test2[9] where ID=2");
  $result=null;
  mysqli_close($con);
function reset2($CC)
{
	for($i=0;$i<80;$i++)
	{
		$CC[$i]=0;
	}
	return $CC;
}
?>