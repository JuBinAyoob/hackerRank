<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%f",$mealCost);
fscanf($_fp,"%d",$tip_per);
fscanf($_fp,"%f",$tax_per);

$tip=$mealCost*$tip_per/100;
$tax=$mealCost*$tax_per/100;

$totalCost=$mealCost+$tip+$tax;

echo 'The total meal cost is '.round($totalCost).' dollars.';
?>