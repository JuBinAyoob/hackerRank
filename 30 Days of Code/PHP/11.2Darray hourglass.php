<?php

$handle = fopen ("php://stdin","r");
$arr = array();
for($arr_i = 0; $arr_i < 6; $arr_i++) {
   $arr_temp = fgets($handle);
   $arr[] = explode(" ",$arr_temp);
  array_walk($arr[$arr_i],'intval');
}


for($i=1;$i<5;$i++)
	for($j=1;$j<5;$j++)
	{
		$temp=$arr[$i-1][$j-1]+$arr[$i-1][$j]+$arr[$i-1][$j+1]+$arr[$i][$j]+$arr[$i+1][$j-1]+$arr[$i+1][$j]+$arr[$i+1][$j+1];
		if(!isset($sum))
			$sum=$temp;
		else if($temp>$sum)
			$sum=$temp;
	}
	
	
	echo $sum;

?>
