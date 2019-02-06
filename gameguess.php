<!DOCTYPE html>
<html>
<head>
	<title>Guess your phone number</title>
</head>
<body>

 	Enter your phone number:
	<form>
		<p><input type="number" name="number" min="010000000" max="999999999" style="width: 200px"></p> 
		<p><input type="submit" name='submit' value="Guess!"></p>
	</form>
	
<?php 
if (isset($_GET['number'])) {
 	$final_result = '';
    $number = $_GET['number'];
   

	$arr_number = str_split($number);

	$sum_number = 0;
	foreach ($arr_number as $value){
		$sum_number += $value;
	}
		
	$result_sum_number = sumTwoDigit(str_split($sum_number));

	if(count(str_split($result_sum_number)) == 1){

		$final_result = result($result_sum_number);
	}else{
		
		$another_tow_digit = sumTwoDigit(str_split($result_sum_number));
		$final_result = result($another_tow_digit);
	}
}

function result($result){
	
	if ((int)$result == 1){
		//echo 'Result: '.$result;
		// echo '<br/><br/>';
		return 'Very Poor!';
	}
	elseif ((int)$result == 2){

		//echo 'Result: '.$result;
		// echo '<br/><br/>';
		return 'Poor!';
	}
	elseif ((int)$result == 3){

		//echo 'Result: '.$result;
		// echo '<br/><br/>';
		return 'Bad!';
	}
	elseif ((int)$result == 4){

		//echo 'Result: '.$result;
		// echo '<br/><br/>';
		return 'Better!';
	}elseif ((int)$result == 5){

		//echo 'Result: '.$result;
		// echo '<br/><br/>';
		return 'Good!';
	}elseif ((int)$result == 6){

		//echo 'Result: '.$result;
		// echo '<br/><br/>';
		return 'Fair!';
	}elseif ((int)$result == 7){

		//echo 'Result: '.$result;
		// echo '<br/><br/>';
		return 'Fairly Good!';
	}elseif ((int)$result == 8){

		//echo 'Result: '.$result;
		// echo '<br/><br/>';
		return 'Very Good!';
	}elseif ((int)$result == 9){

		//echo 'Result: '.$result;
		// echo '<br/><br/>';
		return 'Perfect';
	}

}

function sumTwoDigit($arr){

	return $arr[0] + $arr[1];
}

?>

<label>Result:</label> 
<p><b><textarea rows="1" cols="30" id='txtArea' style="text-align: center;">
	<?php echo $final_result ?>
</textarea></b></p> 
</body>
</html>