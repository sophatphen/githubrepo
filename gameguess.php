<!DOCTYPE html>
<html>
<head>
	<title>Guess your phone number</title>
</head>
<body>
</body>
<?php
$number=null;
if (isset($_POST['number']))
	$number=$_POST['number'];
?>
	<p>GAMGE GUESS YOUR PHONE NUMBER!</p>
 	Enter your phone number:
	<form method="POST">
		<p><input type="number" name="number" min="010000000" max="999999999" style="width: 200px" value="<?php echo $number?>"</p> 
		<p><input type="submit" name='submit' value="Guess!"></p>
	</form>
	
<?php 
if (isset($_POST['number'])) {
 	$final_result = '';
    //$number = $_GET['number'];

	$arr_number = str_split($number);

	$sum_number = 0;
	foreach ($arr_number as $value){
		$sum_number += $value;
	}
	$result_sum_number = sum_digits(str_split($sum_number));
	$final_result = result($result_sum_number);
}

function result($result){
	$results = [
		1=>'Very Poor',
		2=>'Poor!',
		3=>'Bad!',
		4=>'Better!',
		5=>'Good!',
		6=>'Fair!',
		7=>'Fairly Good!',
		8=>'Very Good!',
		9=>'Perfect!'
	];

	return $results[$result];
}

function sum_digits($arr){
	$sum = $arr[0] + $arr[1];

	if(count(str_split($sum)) == 1)
		return $sum;

	$arr_sum_num = str_split($sum);
	return $arr_sum_num[0] + $arr_sum_num[1];
}

?>

<label>Result:</label> 
<textarea rows="1" cols="23" >
	<?php echo $final_result ?? '' ?>
</textarea>
</body>
</html>