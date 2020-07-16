<?php
header("Content-type:text/html;charset=utf-8");
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱
$date1 = $_POST["date1"];//最新日期
$date2 = $_POST["date2"];//較舊日期
$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	$sql = "SELECT 
		((select number_1 from count_bingo_hot_cold where date = '".$date1."')- (select number_1 from count_bingo_hot_cold where date = '".$date2."')) as number_1,
		((select number_2 from count_bingo_hot_cold where date = '".$date1."')- (select number_2 from count_bingo_hot_cold where date = '".$date2."')) as number_2,
		((select number_3 from count_bingo_hot_cold where date = '".$date1."')- (select number_3 from count_bingo_hot_cold where date = '".$date2."')) as number_3,
		((select number_4 from count_bingo_hot_cold where date = '".$date1."')- (select number_4 from count_bingo_hot_cold where date = '".$date2."')) as number_4,
		((select number_5 from count_bingo_hot_cold where date = '".$date1."')- (select number_5 from count_bingo_hot_cold where date = '".$date2."')) as number_5,
		((select number_6 from count_bingo_hot_cold where date = '".$date1."')- (select number_6 from count_bingo_hot_cold where date = '".$date2."')) as number_6,
		((select number_7 from count_bingo_hot_cold where date = '".$date1."')- (select number_7 from count_bingo_hot_cold where date = '".$date2."')) as number_7,
		((select number_8 from count_bingo_hot_cold where date = '".$date1."')- (select number_8 from count_bingo_hot_cold where date = '".$date2."')) as number_8,
		((select number_9 from count_bingo_hot_cold where date = '".$date1."')- (select number_9 from count_bingo_hot_cold where date = '".$date2."')) as number_9,
		((select number_10 from count_bingo_hot_cold where date = '".$date1."')- (select number_10 from count_bingo_hot_cold where date = '".$date2."')) as number_10,
		((select number_11 from count_bingo_hot_cold where date = '".$date1."')- (select number_11 from count_bingo_hot_cold where date = '".$date2."')) as number_11,
		((select number_12 from count_bingo_hot_cold where date = '".$date1."')- (select number_12 from count_bingo_hot_cold where date = '".$date2."')) as number_12,
		((select number_13 from count_bingo_hot_cold where date = '".$date1."')- (select number_13 from count_bingo_hot_cold where date = '".$date2."')) as number_13,
		((select number_14 from count_bingo_hot_cold where date = '".$date1."')- (select number_14 from count_bingo_hot_cold where date = '".$date2."')) as number_14,
		((select number_15 from count_bingo_hot_cold where date = '".$date1."')- (select number_15 from count_bingo_hot_cold where date = '".$date2."')) as number_15,
		((select number_16 from count_bingo_hot_cold where date = '".$date1."')- (select number_16 from count_bingo_hot_cold where date = '".$date2."')) as number_16,
		((select number_17 from count_bingo_hot_cold where date = '".$date1."')- (select number_17 from count_bingo_hot_cold where date = '".$date2."')) as number_17,
		((select number_18 from count_bingo_hot_cold where date = '".$date1."')- (select number_18 from count_bingo_hot_cold where date = '".$date2."')) as number_18,
		((select number_19 from count_bingo_hot_cold where date = '".$date1."')- (select number_19 from count_bingo_hot_cold where date = '".$date2."')) as number_19,
		((select number_20 from count_bingo_hot_cold where date = '".$date1."')- (select number_20 from count_bingo_hot_cold where date = '".$date2."')) as number_20,
		((select number_21 from count_bingo_hot_cold where date = '".$date1."')- (select number_21 from count_bingo_hot_cold where date = '".$date2."')) as number_21,
		((select number_22 from count_bingo_hot_cold where date = '".$date1."')- (select number_22 from count_bingo_hot_cold where date = '".$date2."')) as number_22,
		((select number_23 from count_bingo_hot_cold where date = '".$date1."')- (select number_23 from count_bingo_hot_cold where date = '".$date2."')) as number_23,
		((select number_24 from count_bingo_hot_cold where date = '".$date1."')- (select number_24 from count_bingo_hot_cold where date = '".$date2."')) as number_24,
		((select number_25 from count_bingo_hot_cold where date = '".$date1."')- (select number_25 from count_bingo_hot_cold where date = '".$date2."')) as number_25,
		((select number_26 from count_bingo_hot_cold where date = '".$date1."')- (select number_26 from count_bingo_hot_cold where date = '".$date2."')) as number_26,
		((select number_27 from count_bingo_hot_cold where date = '".$date1."')- (select number_27 from count_bingo_hot_cold where date = '".$date2."')) as number_27,
		((select number_28 from count_bingo_hot_cold where date = '".$date1."')- (select number_28 from count_bingo_hot_cold where date = '".$date2."')) as number_28,
		((select number_29 from count_bingo_hot_cold where date = '".$date1."')- (select number_29 from count_bingo_hot_cold where date = '".$date2."')) as number_29,
		((select number_30 from count_bingo_hot_cold where date = '".$date1."')- (select number_30 from count_bingo_hot_cold where date = '".$date2."')) as number_30,
		((select number_31 from count_bingo_hot_cold where date = '".$date1."')- (select number_31 from count_bingo_hot_cold where date = '".$date2."')) as number_31,
		((select number_32 from count_bingo_hot_cold where date = '".$date1."')- (select number_32 from count_bingo_hot_cold where date = '".$date2."')) as number_32,
		((select number_33 from count_bingo_hot_cold where date = '".$date1."')- (select number_33 from count_bingo_hot_cold where date = '".$date2."')) as number_33,
		((select number_34 from count_bingo_hot_cold where date = '".$date1."')- (select number_34 from count_bingo_hot_cold where date = '".$date2."')) as number_34,
		((select number_35 from count_bingo_hot_cold where date = '".$date1."')- (select number_35 from count_bingo_hot_cold where date = '".$date2."')) as number_35,
		((select number_36 from count_bingo_hot_cold where date = '".$date1."')- (select number_36 from count_bingo_hot_cold where date = '".$date2."')) as number_36,
		((select number_37 from count_bingo_hot_cold where date = '".$date1."')- (select number_37 from count_bingo_hot_cold where date = '".$date2."')) as number_37,
		((select number_38 from count_bingo_hot_cold where date = '".$date1."')- (select number_38 from count_bingo_hot_cold where date = '".$date2."')) as number_38,
		((select number_39 from count_bingo_hot_cold where date = '".$date1."')- (select number_39 from count_bingo_hot_cold where date = '".$date2."')) as number_39,
		((select number_40 from count_bingo_hot_cold where date = '".$date1."')- (select number_40 from count_bingo_hot_cold where date = '".$date2."')) as number_40,
		((select number_41 from count_bingo_hot_cold where date = '".$date1."')- (select number_41 from count_bingo_hot_cold where date = '".$date2."')) as number_41,
		((select number_42 from count_bingo_hot_cold where date = '".$date1."')- (select number_42 from count_bingo_hot_cold where date = '".$date2."')) as number_42,
		((select number_43 from count_bingo_hot_cold where date = '".$date1."')- (select number_43 from count_bingo_hot_cold where date = '".$date2."')) as number_43,
		((select number_44 from count_bingo_hot_cold where date = '".$date1."')- (select number_44 from count_bingo_hot_cold where date = '".$date2."')) as number_44,
		((select number_45 from count_bingo_hot_cold where date = '".$date1."')- (select number_45 from count_bingo_hot_cold where date = '".$date2."')) as number_45,
		((select number_46 from count_bingo_hot_cold where date = '".$date1."')- (select number_46 from count_bingo_hot_cold where date = '".$date2."')) as number_46,
		((select number_47 from count_bingo_hot_cold where date = '".$date1."')- (select number_47 from count_bingo_hot_cold where date = '".$date2."')) as number_47,
		((select number_48 from count_bingo_hot_cold where date = '".$date1."')- (select number_48 from count_bingo_hot_cold where date = '".$date2."')) as number_48,
		((select number_49 from count_bingo_hot_cold where date = '".$date1."')- (select number_49 from count_bingo_hot_cold where date = '".$date2."')) as number_49,
		((select number_50 from count_bingo_hot_cold where date = '".$date1."')- (select number_50 from count_bingo_hot_cold where date = '".$date2."')) as number_50,
		((select number_51 from count_bingo_hot_cold where date = '".$date1."')- (select number_51 from count_bingo_hot_cold where date = '".$date2."')) as number_51,
		((select number_52 from count_bingo_hot_cold where date = '".$date1."')- (select number_52 from count_bingo_hot_cold where date = '".$date2."')) as number_52,
		((select number_53 from count_bingo_hot_cold where date = '".$date1."')- (select number_53 from count_bingo_hot_cold where date = '".$date2."')) as number_53,
		((select number_54 from count_bingo_hot_cold where date = '".$date1."')- (select number_54 from count_bingo_hot_cold where date = '".$date2."')) as number_54,
		((select number_55 from count_bingo_hot_cold where date = '".$date1."')- (select number_55 from count_bingo_hot_cold where date = '".$date2."')) as number_55,
		((select number_56 from count_bingo_hot_cold where date = '".$date1."')- (select number_56 from count_bingo_hot_cold where date = '".$date2."')) as number_56,
		((select number_57 from count_bingo_hot_cold where date = '".$date1."')- (select number_57 from count_bingo_hot_cold where date = '".$date2."')) as number_57,
		((select number_58 from count_bingo_hot_cold where date = '".$date1."')- (select number_58 from count_bingo_hot_cold where date = '".$date2."')) as number_58,
		((select number_59 from count_bingo_hot_cold where date = '".$date1."')- (select number_59 from count_bingo_hot_cold where date = '".$date2."')) as number_59,
		((select number_60 from count_bingo_hot_cold where date = '".$date1."')- (select number_60 from count_bingo_hot_cold where date = '".$date2."')) as number_60,
		((select number_61 from count_bingo_hot_cold where date = '".$date1."')- (select number_61 from count_bingo_hot_cold where date = '".$date2."')) as number_61,
		((select number_62 from count_bingo_hot_cold where date = '".$date1."')- (select number_62 from count_bingo_hot_cold where date = '".$date2."')) as number_62,
		((select number_63 from count_bingo_hot_cold where date = '".$date1."')- (select number_63 from count_bingo_hot_cold where date = '".$date2."')) as number_63,
		((select number_64 from count_bingo_hot_cold where date = '".$date1."')- (select number_64 from count_bingo_hot_cold where date = '".$date2."')) as number_64,
		((select number_65 from count_bingo_hot_cold where date = '".$date1."')- (select number_65 from count_bingo_hot_cold where date = '".$date2."')) as number_65,
		((select number_66 from count_bingo_hot_cold where date = '".$date1."')- (select number_66 from count_bingo_hot_cold where date = '".$date2."')) as number_66,
		((select number_67 from count_bingo_hot_cold where date = '".$date1."')- (select number_67 from count_bingo_hot_cold where date = '".$date2."')) as number_67,
		((select number_68 from count_bingo_hot_cold where date = '".$date1."')- (select number_68 from count_bingo_hot_cold where date = '".$date2."')) as number_68,
		((select number_69 from count_bingo_hot_cold where date = '".$date1."')- (select number_69 from count_bingo_hot_cold where date = '".$date2."')) as number_69,
		((select number_70 from count_bingo_hot_cold where date = '".$date1."')- (select number_70 from count_bingo_hot_cold where date = '".$date2."')) as number_70,
		((select number_71 from count_bingo_hot_cold where date = '".$date1."')- (select number_71 from count_bingo_hot_cold where date = '".$date2."')) as number_71,
		((select number_72 from count_bingo_hot_cold where date = '".$date1."')- (select number_72 from count_bingo_hot_cold where date = '".$date2."')) as number_72,
		((select number_73 from count_bingo_hot_cold where date = '".$date1."')- (select number_73 from count_bingo_hot_cold where date = '".$date2."')) as number_73,
		((select number_74 from count_bingo_hot_cold where date = '".$date1."')- (select number_74 from count_bingo_hot_cold where date = '".$date2."')) as number_74,
		((select number_75 from count_bingo_hot_cold where date = '".$date1."')- (select number_75 from count_bingo_hot_cold where date = '".$date2."')) as number_75,
		((select number_76 from count_bingo_hot_cold where date = '".$date1."')- (select number_76 from count_bingo_hot_cold where date = '".$date2."')) as number_76,
		((select number_77 from count_bingo_hot_cold where date = '".$date1."')- (select number_77 from count_bingo_hot_cold where date = '".$date2."')) as number_77,
		((select number_78 from count_bingo_hot_cold where date = '".$date1."')- (select number_78 from count_bingo_hot_cold where date = '".$date2."')) as number_78,
		((select number_79 from count_bingo_hot_cold where date = '".$date1."')- (select number_79 from count_bingo_hot_cold where date = '".$date2."')) as number_79,
		((select number_80 from count_bingo_hot_cold where date = '".$date1."')- (select number_80 from count_bingo_hot_cold where date = '".$date2."')) as number_80,
		((SELECT big FROM count_bingo_hot_cold Where date = '".$date1."') - (select big from count_bingo_hot_cold where date = '".$date2."')) as big,
		((SELECT small FROM count_bingo_hot_cold Where date = '".$date1."') - (select small from count_bingo_hot_cold where date = '".$date2."')) as small,
		((SELECT count_single FROM count_bingo_hot_cold Where date = '".$date1."') - (select count_single from count_bingo_hot_cold where date = '".$date2."')) as count_single,
		((SELECT count_double FROM count_bingo_hot_cold Where date = '".$date1."') - (select count_double from count_bingo_hot_cold where date = '".$date2."')) as count_double,
		((SELECT small_single FROM count_bingo_hot_cold Where date = '".$date1."') - (select small_single from count_bingo_hot_cold where date = '".$date2."')) as small_single,
		((SELECT small_double FROM count_bingo_hot_cold Where date = '".$date1."') - (select small_double from count_bingo_hot_cold where date = '".$date2."')) as small_double,
		((SELECT same FROM count_bingo_hot_cold Where date = '".$date1."') - (select same from count_bingo_hot_cold where date = '".$date2."')) as same";
	mysqli_query($con,"SET NAMES 'utf8'");
	$result=mysqli_query($con,$sql);//user=資料表
  if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$tmp[]=$row;
  }
	foreach (array($tmp)[0] as $key => $v){
	echo "WW";echo $v['number_1'];echo "WW";echo $v['number_2'];echo "WW";echo $v['number_3'];echo "WW";echo $v['number_4'];echo "WW";echo $v['number_5'];
	echo "WW";echo $v['number_6'];echo "WW";echo $v['number_7'];echo "WW";echo $v['number_8'];echo "WW";echo $v['number_9'];echo "WW";echo $v['number_10'];
	echo "WW";echo $v['number_11'];echo "WW";echo $v['number_12'];echo "WW";echo $v['number_13'];echo "WW";echo $v['number_14'];echo "WW";echo $v['number_15'];
	echo "WW";echo $v['number_16'];echo "WW";echo $v['number_17'];echo "WW";echo $v['number_18'];echo "WW";echo $v['number_19'];echo "WW";echo $v['number_20'];
	echo "WW";echo $v['number_21'];echo "WW";echo $v['number_22'];echo "WW";echo $v['number_23'];echo "WW";echo $v['number_24'];echo "WW";echo $v['number_25'];
	echo "WW";echo $v['number_26'];echo "WW";echo $v['number_27'];echo "WW";echo $v['number_28'];echo "WW";echo $v['number_29'];echo "WW";echo $v['number_30'];
	echo "WW";echo $v['number_31'];echo "WW";echo $v['number_32'];echo "WW";echo $v['number_33'];echo "WW";echo $v['number_34'];echo "WW";echo $v['number_35'];
	echo "WW";echo $v['number_36'];echo "WW";echo $v['number_37'];echo "WW";echo $v['number_38'];echo "WW";echo $v['number_39'];echo "WW";echo $v['number_40'];
	echo "WW";echo $v['number_41'];echo "WW";echo $v['number_42'];echo "WW";echo $v['number_43'];echo "WW";echo $v['number_44'];echo "WW";echo $v['number_45'];
	echo "WW";echo $v['number_46'];echo "WW";echo $v['number_47'];echo "WW";echo $v['number_48'];echo "WW";echo $v['number_49'];echo "WW";echo $v['number_50'];
	echo "WW";echo $v['number_51'];echo "WW";echo $v['number_52'];echo "WW";echo $v['number_53'];echo "WW";echo $v['number_54'];echo "WW";echo $v['number_55'];
	echo "WW";echo $v['number_56'];echo "WW";echo $v['number_57'];echo "WW";echo $v['number_58'];echo "WW";echo $v['number_59'];echo "WW";echo $v['number_60'];
	echo "WW";echo $v['number_61'];echo "WW";echo $v['number_62'];echo "WW";echo $v['number_63'];echo "WW";echo $v['number_64'];echo "WW";echo $v['number_65'];
	echo "WW";echo $v['number_66'];echo "WW";echo $v['number_67'];echo "WW";echo $v['number_68'];echo "WW";echo $v['number_69'];echo "WW";echo $v['number_70'];
	echo "WW";echo $v['number_71'];echo "WW";echo $v['number_72'];echo "WW";echo $v['number_73'];echo "WW";echo $v['number_74'];echo "WW";echo $v['number_75'];
	echo "WW";echo $v['number_76'];echo "WW";echo $v['number_77'];echo "WW";echo $v['number_78'];echo "WW";echo $v['number_79'];echo "WW";echo $v['number_80'];
	echo "WW";echo $v['big'];echo "WW";echo $v['small'];echo "WW";
	echo $v['count_single'];echo "WW";echo $v['count_double'];echo "WW";echo $v['small_single'];echo "WW";echo $v['small_double'];echo "WW";echo $v['same'];
  }
  mysqli_close($con);
?>



