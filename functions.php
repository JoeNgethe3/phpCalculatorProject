<?php
function myCalculator($num01, $oper, $num02){
	$sum;
	switch($oper) {
		case "add":
			$sum = $num01 + $num02;
			break;
		case "sub":
			$sum = $num01 - $num02;
			break;
		/*case "mul":
			$sum = $num01 * $num02;*/
		default:
			$sum = "There was an error!";
			break;
	}
	return $sum;
}
$num01 = $_POST["num01"];
$oper = $_POST["oper"];
$num02 = $_POST["num02"];

echo "Value: " .myCalculator($num01, $oper, $num02);
?>