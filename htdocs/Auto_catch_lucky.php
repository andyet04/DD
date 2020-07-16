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
	mysqli_query($con,"SET NAMES 'utf8'");
//----- 定義要擷取的網頁地址
$url1 = "https://m.click108.com.tw/astro/index.php?astroNum=1";  
$url2 = "https://m.click108.com.tw/astro/index.php?astroNum=2";  
$url3 = "https://m.click108.com.tw/astro/index.php?astroNum=3";  
$url4 = "https://m.click108.com.tw/astro/index.php?astroNum=4";  
$url5 = "https://m.click108.com.tw/astro/index.php?astroNum=5";  
$url6 = "https://m.click108.com.tw/astro/index.php?astroNum=6";  
$url7 = "https://m.click108.com.tw/astro/index.php?astroNum=7";  
$url8 = "https://m.click108.com.tw/astro/index.php?astroNum=8";  
$url9 = "https://m.click108.com.tw/astro/index.php?astroNum=9";  
$url10 = "https://m.click108.com.tw/astro/index.php?astroNum=10";  
$url11 = "https://m.click108.com.tw/astro/index.php?astroNum=11";  
$url12 = "https://m.click108.com.tw/astro/index.php?astroNum=12"; 
//----- 讀取網頁源始碼
$fp = file_get_contents($url1);  
preg_match('/<select[^>]*id="astroDailySelectDay"[^>]*>(.*?) <\/select>/si',$fp,$match);     
//數值
$date = array();
$url = array($url1,$url2,$url3,$url4,$url5,$url6,$url7,$url8,$url9,$url10,$url11,$url12);
$secret_recipe = array(array());
$vip = array(array());
$daily_num = array(array());
$daily_timecolor = array(array());
$daily_dir = array(array());
//拿日期
$date = mb_split('</option>', $match[1]);
$date = str_replace(' ','',$date);
$date = str_replace('optionvalue','',$date);
$date = str_replace('<="0"selected="ture">','',$date);
$date = str_replace('<="1">','',$date);
$date = str_replace('<="2">','',$date);
$date = str_replace('<="3">','',$date);
$date = str_replace('<="4">','',$date);
$date = str_replace('<="5">','',$date);
$date = str_replace('<="6">','',$date);
$date[0] = substr($date[0],2,19);
//拿星座的值
for($i=0;$i<12;$i++)
{
	$secret_recipe[$i] = (getValue($url[$i])['a']);
	$vip[$i] = (getValue($url[$i])['b']);
	$daily_num[$i] = (getValue($url[$i])['c']);
	$daily_timecolor[$i] = (getValue($url[$i])['d']);
	$daily_dir[$i] = (getValue($url[$i])['e']);
}
//die;
for($i=6;$i<7;$i++)
{
	$sql = "INSERT INTO lucky_constellation(date,aries_secret_recipe,aries_wealth,taurus_secret_recipe,taurus_wealth
	,gemini_secret_recipe,gemini_wealth,cancer_secret_recipe,cancer_wealth,leo_secret_recipe,leo_wealth,
	virgo_secret_recipe,virgo_wealth,libra_secret_recipe,libra_wealth,scorpio_secret_recipe,scorpio_wealth,                                                                                                                            
	sagittarius_secret_recipe,sagittarius_wealth,capricorn_secret_recipe,capricorn_wealth,aquarius_secret_recipe,aquarius_wealth,
	pisces_secret_recipe,pisces_wealth) VALUES('$date[$i]','".(string)$secret_recipe[0][$i]."',
	'".(string)$vip[0][$i]."\n".(string)$daily_num[0][$i]."\n".(string)$daily_timecolor[0][$i]."\n".(string)$daily_dir[0][$i]."',
	'".(string)$secret_recipe[1][$i]."','".(string)$vip[1][$i]."\n".(string)$daily_num[1][$i]."\n".(string)$daily_timecolor[1][$i]."\n".(string)$daily_dir[1][$i]."',
	'".(string)$secret_recipe[2][$i]."','".(string)$vip[2][$i]."\n".(string)$daily_num[2][$i]."\n".(string)$daily_timecolor[2][$i]."\n".(string)$daily_dir[2][$i]."',
	'".(string)$secret_recipe[3][$i]."','".(string)$vip[3][$i]."\n".(string)$daily_num[3][$i]."\n".(string)$daily_timecolor[3][$i]."\n".(string)$daily_dir[3][$i]."',
	'".(string)$secret_recipe[4][$i]."','".(string)$vip[4][$i]."\n".(string)$daily_num[4][$i]."\n".(string)$daily_timecolor[4][$i]."\n".(string)$daily_dir[4][$i]."',
	'".(string)$secret_recipe[5][$i]."','".(string)$vip[5][$i]."\n".(string)$daily_num[5][$i]."\n".(string)$daily_timecolor[5][$i]."\n".(string)$daily_dir[5][$i]."',
	'".(string)$secret_recipe[6][$i]."','".(string)$vip[6][$i]."\n".(string)$daily_num[6][$i]."\n".(string)$daily_timecolor[6][$i]."\n".(string)$daily_dir[6][$i]."',
	'".(string)$secret_recipe[7][$i]."','".(string)$vip[7][$i]."\n".(string)$daily_num[7][$i]."\n".(string)$daily_timecolor[7][$i]."\n".(string)$daily_dir[7][$i]."',
	'".(string)$secret_recipe[8][$i]."','".(string)$vip[8][$i]."\n".(string)$daily_num[8][$i]."\n".(string)$daily_timecolor[8][$i]."\n".(string)$daily_dir[8][$i]."',
	'".(string)$secret_recipe[9][$i]."','".(string)$vip[9][$i]."\n".(string)$daily_num[9][$i]."\n".(string)$daily_timecolor[9][$i]."\n".(string)$daily_dir[9][$i]."',
	'".(string)$secret_recipe[10][$i]."','".(string)$vip[10][$i]."\n".(string)$daily_num[10][$i]."\n".(string)$daily_timecolor[10][$i]."\n".(string)$daily_dir[10][$i]."',
	'".(string)$secret_recipe[11][$i]."','".(string)$vip[11][$i]."\n".(string)$daily_num[11][$i]."\n".(string)$daily_timecolor[11][$i]."\n".(string)$daily_dir[11][$i]."')";
	mysqli_query($con,$sql);
}
//做功能
function getValue($url) 
{
	$a = array();
	$b = array();
	$c = array();
	$d = array();
	$e = array();
	$count_a = 0;
	$count_b = 0;
	$count_c = 0;
	$count_d = 0;
	$count_e = 0;
	$fp = file_get_contents($url);  
	preg_match_all('/sData[^>]0[^>](.*)/si', $fp,$match2);     
	$match2[0][0] = str_replace("&nbsp;"," ",$match2[0][0]);
	$match2 = explode(";", $match2[0][0]);
	foreach ($match2 as $k => $v) 
	{
		$TryStrpos=strpos($match2[$k],'daily_Money');
		$TryStrpos2=strpos($match2[$k],'daily_vip');
		$TryStrpos3=strpos($match2[$k],'daily_num');
		$TryStrpos4=strpos($match2[$k],'daily_timecolor');
		$TryStrpos5=strpos($match2[$k],'daily_dir');
		if($TryStrpos === false){
		}else{
			$v = mb_split('"',$v);
			if( count($v)>=3 && $count_a<7)
			{
				$a[$count_a] = $v[1];
				$count_a++;
			}
		}
		if($TryStrpos2 === false){
		}else{
			$v2 = mb_split('"',$v);
			if( count($v2)>=3 && $count_b<7)
			{
				$b[$count_b] = $v2[1];
				$count_b++;
			}
		}
		if($TryStrpos3 === false){
		}else{
			$v3 = mb_split('"',$v);
			if( count($v3)>=3 && $count_c<7)
			{
				$c[$count_c] = $v3[1];
				$count_c++;
			}
		}
		if($TryStrpos4 === false){
		}else{
			$v4 = mb_split('"',$v);
			if( count($v4)>=2 && $count_d<7)
			{
				$d[$count_d] = $v4[1];
				$count_d++;
			}
		}
		if($TryStrpos5 === false){
		}else{
			$v5 = mb_split('"',$v);
			if( count($v5)>=3 && $count_e<7)
			{
				$e[$count_e] = $v5[1];
				$count_e++;
			}
		}
	}	
	$array_ab = array (
		"a" => $a,
		"b" => $b,
		"c" => $c,
		"d" => $d,
		"e" => $e,
	);
	return $array_ab;
}
?>

 