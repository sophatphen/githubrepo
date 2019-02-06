	<?php
  /*
  function echoSong() {
  	echo "<pre>";
     echo "So take the photographs, and still frames in your mind.\n";
     echo "Hang it on a shelf in good health and good time.\n";
     echo "Tattoos and memories and dead skin on trial.\n";
     echo "For what it's worth, it was worth all the while.\n";
    echo "</pre>";
  }
  
 echoSong();
 
//create a function
function getMeaningOfLife () {

//Return a value
	return 27;
}
//execute a function assign to result
$result = getMeaningOfLife ();

var_dump($result);


function welcome ($name) {
	echo "<pre>";
	echo "Welcome to PHP: {$name}";
	echo "</pre>";
}

welcome ('Sok');
welcome ('Sao');
welcome ('Chan');

function addify ($a, $b, $c, $d ){

	return $a + $b + $c + $d;

}
echo addify (1,2,3,4);


function welcome (){

	$names = func_get_args();

	foreach ($names as $name)
		
		echo "<br>Welcome : {$name}\n";

}
welcome ('Sok', 'Sao', 'Chan', 'Aka', 9);


function sayHello (array $names){

	foreach ($names as $name) {
		# code...
		echo "<br>Hello: {$name}\n";
	}
}

//sayHello (['Sok', 'Sao', 'Pich', 'Monika', 'Nimol']);
sayHello (4);

$cat = function (){

	echo "Hello World";
};

$cat();

*/
$d = "Fri";
if($d == "Fri"){
    echo "Have a nice weekend!";
} 
	elseif($d == "Sun"){
    echo "Have a nice Sunday!";
} 
	else{
    
    echo "Have a nice day!";
}