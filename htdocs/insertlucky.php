<?php
$host='127.0.0.1'; //你資料庫的位置
$name='root'; //帳號
$pwd='QWE123ASD456ZXC789';//密碼
$db='Lottery_analysis'; //資料庫名稱

$con=mysqli_connect($host,$name,$pwd , $db) or die("connection failed");

	$db_select = mysqli_select_db($con, $db);
	if (!$db_select) {
    die("Database selection failed: " . mysqli_connect_error());
	};
	//$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die('Error with MySQL connection');
	mysqli_query($con,"SET NAMES 'utf8'");
	
	$date = $_POST["date"];
	$aries_secret_recipe = $_POST["aries_secret_recipe"];//牡羊aries
	$aries_wealth = $_POST["aries_wealth"];
	$taurus_secret_recipe = $_POST["taurus_secret_recipe"];	//金牛Taurus
	$taurus_wealth = $_POST["taurus_wealth"];
	$gemini_secret_recipe = $_POST["gemini_secret_recipe"];//雙子gemini
	$gemini_wealth = $_POST["gemini_wealth"];
	$cancer_secret_recipe = $_POST["cancer_secret_recipe"];//巨蟹cancer
	$cancer_wealth = $_POST["cancer_wealth"];
	$leo_secret_recipe = $_POST["leo_secret_recipe"];	//獅子leo
	$leo_wealth = $_POST["leo_wealth"];
	$virgo_secret_recipe = $_POST["virgo_secret_recipe"];	//處女virgo
	$virgo_wealth = $_POST["virgo_wealth"];
	$libra_secret_recipe = $_POST["libra_secret_recipe"];	//天秤libra
	$libra_wealth = $_POST["libra_wealth"];
	$scorpio_secret_recipe = $_POST["scorpio_secret_recipe"];	//天蠍scorpio
	$scorpio_wealth = $_POST["scorpio_wealth"];
	$sagittarius_secret_recipe = $_POST["sagittarius_secret_recipe"];	//射手sagittarius
	$sagittarius_wealth = $_POST["sagittarius_wealth"];
	$capricorn_secret_recipe = $_POST["capricorn_secret_recipe"];	//摩羯capricorn
	$capricorn_wealth = $_POST["capricorn_wealth"];
	$aquarius_secret_recipe = $_POST["aquarius_secret_recipe"];	//水瓶aquarius
	$aquarius_wealth = $_POST["aquarius_wealth"];
	$pisces_secret_recipe = $_POST["pisces_secret_recipe"];	//雙魚pisces
	$pisces_wealth = $_POST["pisces_wealth"];
	$sql = "INSERT INTO lucky_constellation(date,aries_secret_recipe,aries_wealth,taurus_secret_recipe,taurus_wealth
	,gemini_secret_recipe,gemini_wealth,cancer_secret_recipe,cancer_wealth,leo_secret_recipe,leo_wealth,
	virgo_secret_recipe,virgo_wealth,libra_secret_recipe,libra_wealth,scorpio_secret_recipe,scorpio_wealth,
	sagittarius_secret_recipe,sagittarius_wealth,capricorn_secret_recipe,capricorn_wealth,aquarius_secret_recipe,aquarius_wealth,
	pisces_secret_recipe,pisces_wealth) VALUES('$date','$aries_secret_recipe','$aries_wealth',
	'$taurus_secret_recipe','$taurus_wealth','$gemini_secret_recipe','$gemini_wealth',
	'$cancer_secret_recipe','$cancer_wealth','$leo_secret_recipe','$leo_wealth','$virgo_secret_recipe','$virgo_wealth',
	'$libra_secret_recipe','$libra_wealth','$scorpio_secret_recipe','$scorpio_wealth','$sagittarius_secret_recipe','$sagittarius_wealth'
	,'$capricorn_secret_recipe','$capricorn_wealth','$aquarius_secret_recipe','$aquarius_wealth','$pisces_secret_recipe','$pisces_wealth')";
	mysqli_query($con,$sql);
?>