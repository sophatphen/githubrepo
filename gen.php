<?php

$number=$_POST['number'];
$arr_number = str_split($number);

$sum_number = 0;
foreach ($arr_number as $value){
	$sum_number += $value;
}
	
$result_sum_number = sumTwoDigit(str_split($sum_number));

if(count(str_split($result_sum_number)) == 1){

	result($result_sum_number);
}else{
	
	$another_tow_digit = sumTwoDigit(str_split($result_sum_number));
	result($another_tow_digit);
}

function result($result){
	
	if ((int)$result == 1){
		//echo 'Result: '.$result;
		echo '<br/><br/>';
		echo 'Very Poor!';
	}
	elseif ((int)$result == 2){

		//echo 'Result: '.$result;
		echo '<br/><br/>';
		echo 'Poor!';
	}
	elseif ((int)$result == 3){

		//echo 'Result: '.$result;
		echo '<br/><br/>';
		echo 'Bad!';
	}
	elseif ((int)$result == 4){

		//echo 'Result: '.$result;
		echo '<br/><br/>';
		echo 'Better!';
	}elseif ((int)$result == 5){

		//echo 'Result: '.$result;
		echo '<br/><br/>';
		echo 'Good!';
	}elseif ((int)$result == 6){

		//echo 'Result: '.$result;
		echo '<br/><br/>';
		echo 'Fair!';
	}elseif ((int)$result == 7){

		//echo 'Result: '.$result;
		echo '<br/><br/>';
		echo 'Fairly Good!';
	}elseif ((int)$result == 8){

		//echo 'Result: '.$result;
		echo '<br/><br/>';
		echo 'Very Good!';
	}elseif ((int)$result == 9){

		//echo 'Result: '.$result;
		echo '<br/><br/>';
		echo 'Perfect';
	}

}

function sumTwoDigit($arr){

	return $arr[0] + $arr[1];
}