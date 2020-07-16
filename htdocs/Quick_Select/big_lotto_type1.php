<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$first = array();
$Date = array();
$test = array();
$count = 0;
for($i=0;$i<=49;$i++)
	$test[$i]=0;
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con, "SELECT Date FROM big_lottle order by Date DESC");
	
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
  foreach(array($tmp)[0] as $key => $v)
  {
	  $Date[$count++] = $v['Date'];
  }  
	$result=mysqli_query($con, "SELECT number_1,number_2,number_3,number_4,number_5,number_6,surprise_number FROM big_lottle where Date = '$Date[0]' ");
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
	  $first[6] = $v['surprise_number'];
  }
  $count--;
  for($j=0;$j<7;$j++)
  {
	  $tmp = null;
	  $result=mysqli_query($con, "SELECT * FROM big_lottle where id in
	  (
	  select id+1
	  from big_lottle 
	  where (number_1 = $first[$j] or number_2 = $first[$j] 
	  or number_3 = $first[$j] or number_4 = $first[$j] or number_5 = $first[$j]
	   or number_6 = $first[$j] or surprise_number = $first[$j]) and Date between '$Date[$count]' and '$Date[1]'
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
		  $test[$v['surprise_number']]++;
	  }
  }
  $count=0;
  arsort($test,1);
  foreach ($test as $key => $value)
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
?>