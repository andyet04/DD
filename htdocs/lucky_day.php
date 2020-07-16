<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱

$con=mysqli_connect($host,$name,$pwd) or die("connection failed");

$selected = mysqli_select_db($con,$db)  
or die("Could not select examples");  

mysqli_query( $con, "SET NAMES 'utf8'");
  $result=mysqli_query($con,"SELECT date FROM lucky_constellation order by date DESC ");//user=資料表
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
  $tmp[]=$row;
  }
  foreach (array($tmp)[0] as $key => $v){
    echo "WW";
	echo $v['date'];
  }
  mysqli_close($con);
?>
