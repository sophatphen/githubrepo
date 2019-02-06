<?php 
/*
//1. Ifyouhaveanarray $a=array(0,1,2,3,4); ,how do you extract the value 3 from the array?
//
$a = array(0,1,2,3,4);

for ($i=0; $i < 3; $i++) {

	echo "Questions 1 is: ".$a[3];
	echo "<br>";
	break;
 
} 		 	

//2. If you have an array $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 ); , how do you extract
//the value 3 from the array?

$a = array('zero' => 0 , 'one'=>1, 'two'=>2, 'three'=>3, 'four'=>4);

for ($i=0; $i < 5 ; $i++) { 
	echo "Questions 2 is: ".$a ['three'];
	echo "<br>";
	break;
}

//3. If you have the following array, how do you extract the value 3 from the array?

$a = array(
    array(
        0,
		1 
	),
	array( 2,
    	array( 3
		) 
	)
);
for ($i=0; $i <10; $i++) { 
	echo "Questions 3 is: ".	echo "<br>";
	break;
}

//4. If you have the following array, how do you extract the value 3 from the array?
 $a = array(
    "a"=>array(
"b"=>0,
"c"=>1 ),
    "b"=>array(
        "e"=>2,
        "o" =>array(
            "b"=>3
) )
);
for ($i=0; $i <10; $i++) { 
	echo "Questions 4 is: ". $a["b"]["o"]["b"];
	echo "<br>";
	break;
}
*/
//5. Create a new array with each comma-separated value as its own array element from the string $a = "a,b,c,d,e,f" .

$a = array('a','b','c','d','e',);
$new_array = array();
foreach( $a as $arrs ) {
	$new_array = $arrs;
   //	echo "Questions 5 is: {$arrs}\n";
}
print_r($new_array);

//6. With the result array from 5 , create a new array where each element is both key and value. In other words, the result should be:

$keys = array(
    "a"=>"a",
    "b"=>"b",
    "c"=>"c",
    "d"=>"d",
    "e"=>"e"
);
$keys["a"];
$values = array(
    "a"=>"a",
    "b"=>"b",
    "c"=>"c",
    "d"=>"d",
    "e"=>"e"
);
$new_array = array();
foreach ($a as $element) {
$new_array [$element]= $element;
}

print_r($new_array);


//7. You have two arrays like the following. One contains field labels, the other contains field values. Write a program to output the third array.
//
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
// want to output
$keysAndValues = array(
    "first"=>"dinosaur",
    "second"=>"pig",
    "third"=>"platypus"
);
$keysAndValues [$keys ["field1"]] = $values ["field1value"];
$keysAndValues [$keys ["field2"]] = $values ["field2value"];
$keysAndValues [$keys ["field3"]] = $values ["field3value"];
print_r($keysAndValues);

//8. You have an array of transactions, each of which has a debit and credit amount. Find the absolute value of the transaction amount (i.e. abs( debit - credit ) ) and add it as a new key=>value pair to each transaction.

$transactions = array(
    array(
		"debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
); 
// outputs
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3,
        "amount"=>1
 	), 
    array(
        "debit"=>15,
        "credit"=>14,
        "amount"=>1
	) 
);

$new_transactions = array();
foreach ($transactions as $transaction) {
$new_transaction = $transaction;
$new_transaction["amount"] = abs($transaction["debit"]-$transaction["credit"]);  
$new_transactions[] = $new_transaction;
}
print_r($new_transaction);

//9. Find the sum of this array of numbers
 
$a = array(0,1,2,3,4,5,6);
$sum = 0;
foreach ($a as $values){
    $sum += $values;
}
print_r($sum);
