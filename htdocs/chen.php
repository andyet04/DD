<?php
header("Content-type:text/html;char=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$date2 = array();
$test1 = array();
$test2 = array();
$test1 = re1($test1);
$test2 = re1($test2);
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	
	mysqli_query($con,"SET NAMES 'utf8'");
	  $result=mysqli_query($con,"SELECT distinct Date FROM bingo_lottle order by date ASC ");//user=資料表
	  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	  $tmp[]=$row;
	  }
	  $a=0;
	  foreach (array($tmp)[0] as $key => $v){
		$date2[$a] = $v['Date'];
		$a++;
	  }
	  $result=mysqli_query($con,"SELECT count(Date)as A FROM count_bingo_hot_cold ");//user=資料表
	  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	  $tmp2[]=$row;
	  }
	  $b=0;
	  foreach (array($tmp2)[0] as $key => $v){
		$b=$v['A'];
	  }
	  for($i=$b-1;$i<$a;$i++)
	  {
		$d=$i-1;
        if($i==0)
	    $d=0;
		echo $date2[$i];
		echo "<br>";
		$tmp = null;
		$result=mysqli_query($con, "SELECT * FROM bingo_lottle where Date = '$date2[$i]'");
		  if (!$result) {
			 printf("Error: %s\n", mysqli_error($con));
			 exit();
			}
		  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$tmp[]=$row;
		  }
		  foreach (array($tmp)[0] as $key => $v){
				  $test1[$v['number_1']]++;
				  $test1[$v['number_2']]++;
				  $test1[$v['number_3']]++;
				  $test1[$v['number_4']]++;
				  $test1[$v['number_5']]++;
				  $test1[$v['number_6']]++;
				  $test1[$v['number_7']]++;
				  $test1[$v['number_8']]++;
				  $test1[$v['number_9']]++;
				  $test1[$v['number_10']]++;
				  $test1[$v['number_11']]++;
				  $test1[$v['number_12']]++;
				  $test1[$v['number_13']]++;
				  $test1[$v['number_14']]++;
				  $test1[$v['number_15']]++;
				  $test1[$v['number_16']]++;
				  $test1[$v['number_17']]++;
				  $test1[$v['number_18']]++;
				  $test1[$v['number_19']]++;
				  $test1[$v['number_20']]++;
				  if($v['guess_size']!='－'&& $v['guess_size']!=null)
				  {
					$test1[$v['guess_size']]++;
				  }
				  if($v['guess_double']!='－' && $v['guess_double']!=null)
				  $test1[$v['guess_double']]++;
		  }
		 $tmp = null;
		 //$date2[$d]
		$result=mysqli_query($con, "SELECT * FROM count_bingo_hot_cold where Date = '$date2[$d]' ");
		  if (!$result) {
			 printf("Error: %s\n", mysqli_error($con));
			 exit();
			}
		  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$tmp[]=$row;
		  }
		  foreach (array($tmp)[0] as $key => $v){
				  $test2[1]=$v['number_1'];$test2[2]=$v['number_2'];$test2[3]=$v['number_3'];$test2[4]=$v['number_4'];$test2[5]=$v['number_5'];$test2[6]=$v['number_6'];$test2[7]=$v['number_7'];$test2[8]=$v['number_8'];$test2[9]=$v['number_9'];$test2[10]=$v['number_10'];
				  $test2[11]=$v['number_11'];$test2[12]=$v['number_12'];$test2[13]=$v['number_13'];$test2[14]=$v['number_14'];$test2[15]=$v['number_15'];$test2[16]=$v['number_16'];$test2[17]=$v['number_17'];$test2[18]=$v['number_18'];$test2[19]=$v['number_19'];$test2[20]=$v['number_20'];
				  $test2[21]=$v['number_21'];$test2[22]=$v['number_22'];$test2[23]=$v['number_23'];$test2[24]=$v['number_24'];$test2[25]=$v['number_25'];$test2[26]=$v['number_26'];$test2[27]=$v['number_27'];$test2[28]=$v['number_28'];$test2[29]=$v['number_29'];$test2[30]=$v['number_30'];
				  $test2[31]=$v['number_31'];$test2[32]=$v['number_32'];$test2[33]=$v['number_33'];$test2[34]=$v['number_34'];$test2[35]=$v['number_35'];$test2[36]=$v['number_36'];$test2[37]=$v['number_37'];$test2[38]=$v['number_38'];$test2[39]=$v['number_39'];$test2[40]=$v['number_40'];
				  $test2[41]=$v['number_41'];$test2[42]=$v['number_42'];$test2[43]=$v['number_43'];$test2[44]=$v['number_44'];$test2[45]=$v['number_45'];$test2[46]=$v['number_46'];$test2[47]=$v['number_47'];$test2[48]=$v['number_48'];$test2[49]=$v['number_49'];$test2[50]=$v['number_50'];
				  $test2[51]=$v['number_51'];$test2[52]=$v['number_52'];$test2[53]=$v['number_53'];$test2[54]=$v['number_54'];$test2[55]=$v['number_55'];$test2[56]=$v['number_56'];$test2[57]=$v['number_57'];$test2[58]=$v['number_58'];$test2[59]=$v['number_59'];$test2[60]=$v['number_60'];
				  $test2[61]=$v['number_61'];$test2[62]=$v['number_62'];$test2[63]=$v['number_63'];$test2[64]=$v['number_64'];$test2[65]=$v['number_65'];$test2[66]=$v['number_66'];$test2[67]=$v['number_67'];$test2[68]=$v['number_68'];$test2[69]=$v['number_69'];$test2[70]=$v['number_70'];
				  $test2[71]=$v['number_71'];$test2[72]=$v['number_72'];$test2[73]=$v['number_73'];$test2[74]=$v['number_74'];$test2[75]=$v['number_75'];$test2[76]=$v['number_76'];$test2[77]=$v['number_77'];$test2[78]=$v['number_78'];$test2[79]=$v['number_79'];$test2[80]=$v['number_80'];
				  $test2['big']=$v['big'];
				  $test2['small']=$v['small'];
				  $test2['count_single']=$v['count_single'];
				  $test2['count_Double']=$v['count_Double'];
				  $test2['small_single']=$v['small_single'];
				  $test2['small_double']=$v['small_double'];
				  $test2['same']=$v['same'];
		  }
		$sql = "INSERT INTO count_bingo_hot_cold(Date,number_1,number_2,number_3,number_4,number_5,number_6,number_7,number_8,number_9
		,number_10,number_11,number_12,number_13,number_14,number_15,number_16,number_17,number_18,number_19
		,number_20,number_21,number_22,number_23,number_24,number_25,number_26,number_27,number_28,number_29
		,number_30,number_31,number_32,number_33,number_34,number_35,number_36,number_37,number_38,number_39
		,number_40,number_41,number_42,number_43,number_44,number_45,number_46,number_47,number_48,number_49
		,number_50,number_51,number_52,number_53,number_54,number_55,number_56,number_57,number_58,number_59
		,number_60,number_61,number_62,number_63,number_64,number_65,number_66,number_67,number_68,number_69
		,number_70,number_71,number_72,number_73,number_74,number_75,number_76,number_77,number_78,number_79
		,number_80,big,small,count_single,count_Double,small_single,small_double,same)
		SELECT '$date2[$i]',
		($test1[1]+$test2[1]),($test1[2]+$test2[2]),($test1[3]+$test2[3]),($test1[4]+$test2[4]),($test1[5]+$test2[5]),($test1[6]+$test2[6]),
		($test1[7]+$test2[7]),($test1[8]+$test2[8]),($test1[9]+$test2[9]),($test1[10]+$test2[10]),($test1[11]+$test2[11]),($test1[12]+$test2[12]),
		($test1[13]+$test2[13]),($test1[14]+$test2[14]),($test1[15]+$test2[15]),($test1[16]+$test2[16]),($test1[17]+$test2[17]),($test1[18]+$test2[18]),
		($test1[19]+$test2[19]),($test1[20]+$test2[20]),($test1[21]+$test2[21]),($test1[22]+$test2[22]),($test1[23]+$test2[23]),($test1[24]+$test2[24]),
		($test1[25]+$test2[25]),($test1[26]+$test2[26]),($test1[27]+$test2[27]),($test1[28]+$test2[28]),($test1[29]+$test2[29]),($test1[30]+$test2[30]),
		($test1[31]+$test2[31]),($test1[32]+$test2[32]),($test1[33]+$test2[33]),($test1[34]+$test2[34]),($test1[35]+$test2[35]),($test1[36]+$test2[36]),
		($test1[37]+$test2[37]),($test1[38]+$test2[38]),($test1[39]+$test2[39]),($test1[40]+$test2[40]),($test1[41]+$test2[41]),($test1[42]+$test2[42]),
		($test1[43]+$test2[43]),($test1[44]+$test2[44]),($test1[45]+$test2[45]),($test1[46]+$test2[46]),($test1[47]+$test2[47]),($test1[48]+$test2[48]),
		($test1[49]+$test2[49]),($test1[50]+$test2[50]),($test1[51]+$test2[51]),($test1[52]+$test2[52]),($test1[53]+$test2[53]),($test1[54]+$test2[54]),
		($test1[55]+$test2[55]),($test1[56]+$test2[56]),($test1[57]+$test2[57]),($test1[58]+$test2[58]),($test1[59]+$test2[59]),($test1[60]+$test2[60]),
		($test1[61]+$test2[61]),($test1[62]+$test2[62]),($test1[63]+$test2[63]),($test1[64]+$test2[64]),($test1[65]+$test2[65]),($test1[66]+$test2[66]),
		($test1[67]+$test2[67]),($test1[68]+$test2[68]),($test1[69]+$test2[69]),($test1[70]+$test2[70]),($test1[71]+$test2[71]),($test1[72]+$test2[72]),
		($test1[73]+$test2[73]),($test1[74]+$test2[74]),($test1[75]+$test2[75]),($test1[76]+$test2[76]),($test1[77]+$test2[77]),($test1[78]+$test2[78]),
		($test1[79]+$test2[79]),($test1[80]+$test2[80]),($test1[大]+$test2[big]),($test1[小]+$test2[small]),($test1[單]+$test2[count_single]),($test1[雙]+$test2[count_Double]),
		($test1[小單]+$test2[small_single]),($test1[小雙]+$test2[small_double]),($test1[和]+$test2[same])";
		$result=mysqli_query($con, $sql);//user=資料表
		  if (!$result) {
			 printf("Error: %s\n", mysqli_error($con));
			 exit();
			}
		$test1 = re1($test1);
		$test2 = re1($test2);
	  }
	  if($b-1 == $a)
	  {
		$c=$a-1;
		$d=$a-2;
		echo $date2[$c];
		echo "<br>";
		$tmp = null;
		$result=mysqli_query($con, "SELECT number_1,number_2,number_3,number_4,number_5,number_6,number_7,number_8
		,number_9,number_10,number_11,number_12,number_13,number_14,number_15,number_16,number_17,number_18,number_19,number_20,
		guess_size,guess_double FROM bingo_lottle where Date = '$date2[$c]'");
		  if (!$result) {
			 printf("Error: %s\n", mysqli_error($con));
			 exit();
			}
		  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$tmp[]=$row;
		  }
		  foreach (array($tmp)[0] as $key => $v){
				  $test1[$v['number_1']]++;
				  $test1[$v['number_2']]++;
				  $test1[$v['number_3']]++;
				  $test1[$v['number_4']]++;
				  $test1[$v['number_5']]++;
				  $test1[$v['number_6']]++;
				  $test1[$v['number_7']]++;
				  $test1[$v['number_8']]++;
				  $test1[$v['number_9']]++;
				  $test1[$v['number_10']]++;
				  $test1[$v['number_11']]++;
				  $test1[$v['number_12']]++;
				  $test1[$v['number_13']]++;
				  $test1[$v['number_14']]++;
				  $test1[$v['number_15']]++;
				  $test1[$v['number_16']]++;
				  $test1[$v['number_17']]++;
				  $test1[$v['number_18']]++;
				  $test1[$v['number_19']]++;
				  $test1[$v['number_20']]++;
				  if($v['guess_size']!='－'&& $v['guess_size']!=null)
				  $test1[$v['guess_size']]++;
				  if($v['guess_double']!='－' && $v['guess_double']!=null)
				  $test1[$v['guess_double']]++;
		  }
		 $tmp = null;
		$result=mysqli_query($con, "SELECT * FROM count_bingo_hot_cold where Date = '$date2[$d]'");
		  if (!$result) {
			 printf("Error: %s\n", mysqli_error($con));
			 exit();
			}
		  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$tmp[]=$row;
		  }
		  foreach (array($tmp)[0] as $key => $v){
				  $test2[1]=$v['number_1'];$test2[2]=$v['number_2'];$test2[3]=$v['number_3'];$test2[4]=$v['number_4'];$test2[5]=$v['number_5'];$test2[6]=$v['number_6'];$test2[7]=$v['number_7'];$test2[8]=$v['number_8'];$test2[9]=$v['number_9'];$test2[10]=$v['number_10'];
				  $test2[11]=$v['number_11'];$test2[12]=$v['number_12'];$test2[13]=$v['number_13'];$test2[14]=$v['number_14'];$test2[15]=$v['number_15'];$test2[16]=$v['number_16'];$test2[17]=$v['number_17'];$test2[18]=$v['number_18'];$test2[19]=$v['number_19'];$test2[20]=$v['number_20'];
				  $test2[21]=$v['number_21'];$test2[22]=$v['number_22'];$test2[23]=$v['number_23'];$test2[24]=$v['number_24'];$test2[25]=$v['number_25'];$test2[26]=$v['number_26'];$test2[27]=$v['number_27'];$test2[28]=$v['number_28'];$test2[29]=$v['number_29'];$test2[30]=$v['number_30'];
				  $test2[31]=$v['number_31'];$test2[32]=$v['number_32'];$test2[33]=$v['number_33'];$test2[34]=$v['number_34'];$test2[35]=$v['number_35'];$test2[36]=$v['number_36'];$test2[37]=$v['number_37'];$test2[38]=$v['number_38'];$test2[39]=$v['number_39'];$test2[40]=$v['number_40'];
				  $test2[41]=$v['number_41'];$test2[42]=$v['number_42'];$test2[43]=$v['number_43'];$test2[44]=$v['number_44'];$test2[45]=$v['number_45'];$test2[46]=$v['number_46'];$test2[47]=$v['number_47'];$test2[48]=$v['number_48'];$test2[49]=$v['number_49'];$test2[50]=$v['number_50'];
				  $test2[51]=$v['number_51'];$test2[52]=$v['number_52'];$test2[53]=$v['number_53'];$test2[54]=$v['number_54'];$test2[55]=$v['number_55'];$test2[56]=$v['number_56'];$test2[57]=$v['number_57'];$test2[58]=$v['number_58'];$test2[59]=$v['number_59'];$test2[60]=$v['number_60'];
				  $test2[61]=$v['number_61'];$test2[62]=$v['number_62'];$test2[63]=$v['number_63'];$test2[64]=$v['number_64'];$test2[65]=$v['number_65'];$test2[66]=$v['number_66'];$test2[67]=$v['number_67'];$test2[68]=$v['number_68'];$test2[69]=$v['number_69'];$test2[70]=$v['number_70'];
				  $test2[71]=$v['number_71'];$test2[72]=$v['number_72'];$test2[73]=$v['number_73'];$test2[74]=$v['number_74'];$test2[75]=$v['number_75'];$test2[76]=$v['number_76'];$test2[77]=$v['number_77'];$test2[78]=$v['number_78'];$test2[79]=$v['number_79'];$test2[80]=$v['number_80'];
				  $test2['big']=$v['big'];
				  $test2['small']=$v['small'];
				  $test2['count_single']=$v['count_single'];
				  $test2['count_Double']=$v['count_Double'];
				  $test2['small_single']=$v['small_single'];
				  $test2['small_double']=$v['small_double'];
				  $test2['same']=$v['same'];
		  }
		$sql = "UPDATE count_bingo_hot_cold
		 set number_1 = ($test1[1]+$test2[1]), number_2 = ($test1[2]+$test2[2]), number_3 = ($test1[3]+$test2[3]), number_4 = ($test1[4]+$test2[4])
		, number_5 = ($test1[5]+$test2[5]), number_6 = ($test1[6]+$test2[6]), number_7 = ($test1[7]+$test2[7]),  number_8 = ($test1[8]+$test2[8])
		, number_9 = ($test1[9]+$test2[9]), number_10 = ($test1[10]+$test2[10]), number_11 = ($test1[11]+$test2[11]), number_12 = ($test1[12]+$test2[12])
		, number_13 = ($test1[13]+$test2[13]), number_14 = ($test1[14]+$test2[14]), number_15 = ($test1[15]+$test2[15]), number_16 = ($test1[16]+$test2[16])
		, number_17 = ($test1[17]+$test2[17]), number_18 = ($test1[18]+$test2[18]), number_19 = ($test1[19]+$test2[19]), number_20 = ($test1[20]+$test2[20])
		, number_21 = ($test1[21]+$test2[21]), number_22 = ($test1[22]+$test2[22]), number_23 = ($test1[23]+$test2[23]), number_24 = ($test1[24]+$test2[24])
		, number_25 = ($test1[25]+$test2[25]), number_26 = ($test1[26]+$test2[26]), number_27 = ($test1[27]+$test2[27]), number_28 = ($test1[28]+$test2[28])
		, number_29 = ($test1[29]+$test2[29]), number_30 = ($test1[30]+$test2[30]), number_31 = ($test1[31]+$test2[31]), number_32 = ($test1[32]+$test2[32])
		, number_33 = ($test1[33]+$test2[33]), number_34 = ($test1[34]+$test2[34]), number_35 = ($test1[35]+$test2[35]), number_36 = ($test1[36]+$test2[36])
		, number_37 = ($test1[37]+$test2[37]), number_38 = ($test1[38]+$test2[38]), number_39 = ($test1[39]+$test2[39]), number_40 = ($test1[40]+$test2[40])
		, number_41 = ($test1[41]+$test2[41]), number_42 = ($test1[42]+$test2[42]), number_43 = ($test1[43]+$test2[43]), number_44 = ($test1[44]+$test2[44])
		, number_45 = ($test1[45]+$test2[45]), number_46 = ($test1[46]+$test2[46]), number_47 = ($test1[47]+$test2[47]), number_48 = ($test1[48]+$test2[48])
		, number_49 = ($test1[49]+$test2[49]), number_50 = ($test1[50]+$test2[50]), number_51 = ($test1[51]+$test2[51]), number_52 = ($test1[52]+$test2[52])
		, number_53 = ($test1[53]+$test2[53]), number_54 = ($test1[54]+$test2[54]), number_55 = ($test1[55]+$test2[55]), number_56 = ($test1[56]+$test2[56])
		, number_57 = ($test1[57]+$test2[57]), number_58 = ($test1[58]+$test2[58]), number_59 = ($test1[59]+$test2[59]), number_60 = ($test1[60]+$test2[60])
		, number_61 = ($test1[61]+$test2[61]), number_62 = ($test1[62]+$test2[62]), number_63 = ($test1[63]+$test2[63]), number_64 = ($test1[64]+$test2[64])
		, number_65 = ($test1[65]+$test2[65]), number_66 = ($test1[66]+$test2[66]), number_67 = ($test1[67]+$test2[67]), number_68 = ($test1[68]+$test2[68])
		, number_69 = ($test1[69]+$test2[69]), number_70 = ($test1[70]+$test2[70]), number_71 = ($test1[71]+$test2[71]), number_72 = ($test1[72]+$test2[72])
		, number_73 = ($test1[73]+$test2[73]), number_74 = ($test1[74]+$test2[74]), number_75 = ($test1[75]+$test2[75]), number_76 = ($test1[76]+$test2[76])
		, number_77 = ($test1[77]+$test2[77]), number_78 = ($test1[78]+$test2[78]), number_79 = ($test1[79]+$test2[79]), number_80 = ($test1[80]+$test2[80])
		, big = ($test1[大]+$test2[big]), small = ($test1[小]+$test2[small]), count_single = ($test1[單]+$test2[count_single])
		, count_Double = ($test1[雙]+$test2[count_Double]), small_single = ($test1[小單]+$test2[small_single]), small_double = ($test1[小雙]+$test2[small_double]), same = ($test1[和]+$test2[same])
		where Date = '$date2[$c]' ";
		$result=mysqli_query($con, $sql);//user=資料表
		  if (!$result) {
			 printf("Error: %s\n", mysqli_error($con));
			 exit();
			}
		$test1 = re1($test1);
		$test2 = re1($test2);
		$change = array(0,0);
		$co = 0;
		$sql = "select id from bingo_lottle ORDER by Period DESC LIMIT 2";
		$result=mysqli_query($con, $sql);//user=資料表
		  if (!$result) {
			 printf("Error: %s\n", mysqli_error($con));
			 exit();
			}
			$tmp =null;
		 while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$tmp[]=$row;
		  }
		  foreach (array($tmp)[0] as $key => $v){
			  $change[$co++] = $v['id'];
		  }
		  echo $change[0]."<br>".$change[1];
		
		$sql = "UPDATE bingo_lottle set id = ($change[1]+1) where id=$change[0]";
		$result=mysqli_query($con, $sql);//user=資料表
				  if (!$result) {
			 printf("Error: %s\n", mysqli_error($con));
			 exit();
			}
	  }
mysqli_close($con);
function re1($CC)
{
	for($i=1;$i<=80;$i++)
	{
		$CC[$i]=0;
	}
	$CC['大']=0;
	$CC['小']=0;
	$CC['小單']=0;
	$CC['小雙']=0;
	$CC['單']=0;
	$CC['雙']=0;
	$CC['和']=0;
	$CC['big']=0;
	$CC['small_single']=0;
	$CC['small_double']=0;
	$CC['count_single']=0;
	$CC['count_Double']=0;
	$CC['small']=0;
	return $CC;
}

?>
