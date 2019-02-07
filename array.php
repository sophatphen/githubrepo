<?php

	$orders  = [
    
    [
        'id'      => '001',
        'name'    => 'Pali',
        'phone'   => 1234,
        'address' => 'No.25,St.178',
        'foods'  =>[
          'Fish' => 2,
          'Pork' => 3
        ],
        'total' => 5
    ],
    [
        'id'     => '002',
        'name'   => 'Lika',
        'phone'  => 1234,
        'address'=> 'No.25,St.178',
        'foods'  =>[

            'Fish' =>2,
            'Pork' =>3
        ]
        ,'total'   => 5
    ],

    [
      'id'      => '003',
      'name'    => 'Malis',
      'phone'   => 1234,
      'address' => 'No.25,St.178',
      'food'    =>[
            'Fish' =>2,
            'Pork' =>3
      ],
      'total' => 5], 
  ];

  foreach($records as $arrays)
  {
  echo $arrays = 'id'. [0],[1]. 'name' [0],[2] . 'phone' .[0],[3] . 'address' . [0],[4] . 'foods' .[0],[5];
  }

/*if ($orders != "") {

  //$orderdetails = "Order Details<table border='1'><tr><td>id</td><td>name</td><td>phone</td><td>address</td> <td>food</td><td>total</td></tr>";

  foreach ($orders as $value) {
    $orderdetails .= "<tr><td>" . $value[0];[1] . "</td><td>" . $value[0];[2] . "</td><td>" . $value[0];[3] . "</td><td>" . $value[0];[4] . "</td><td>" . $value[0];[5] . "</td><td>" . $value[0];[5] . "</td></tr>";
  }

  $orderdetails .= '</table>';
}
else {

  $orderdetails = "No Other Order Details";
}
echo $orderdetails;
*/
  
<?php 
//if (isset($_GET['number'])) {
  $final_result = '';
    //$number = $_GET['number'];
   $number=$_POST['number'];

  $arr_number = str_split($number);

  $sum_number = 0;
  foreach ($arr_number as $value){
    $sum_number += $value;
  }
    
  $result_sum_number = sum_digits(str_split($sum_number));
  $final_result = result($result_sum_number);


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
  // if ((int)$result == 1){
  //  //echo 'Result: '.$result;
  //  // echo '<br/><br/>';
  //  return 'Very Poor!';
  // }
  // elseif ((int)$result == 2){

  //  //echo 'Result: '.$result;
  //  // echo '<br/><br/>';
  //  return 'Poor!';
  // }
  // elseif ((int)$result == 3){

  //  //echo 'Result: '.$result;
  //  // echo '<br/><br/>';
  //  return 'Bad!';
  // }
  // elseif ((int)$result == 4){

  //  //echo 'Result: '.$result;
  //  // echo '<br/><br/>';
  //  return 'Better!';
  // }elseif ((int)$result == 5){

  //  //echo 'Result: '.$result;
  //  // echo '<br/><br/>';
  //  return 'Good!';
  // }elseif ((int)$result == 6){

  //  //echo 'Result: '.$result;
  //  // echo '<br/><br/>';
  //  return 'Fair!';
  // }elseif ((int)$result == 7){

  //  //echo 'Result: '.$result;
  //  // echo '<br/><br/>';
  //  return 'Fairly Good!';
  // }elseif ((int)$result == 8){

  //  //echo 'Result: '.$result;
  //  // echo '<br/><br/>';
  //  return 'Very Good!';
  // }elseif ((int)$result == 9){

  //  //echo 'Result: '.$result;
  //  // echo '<br/><br/>';
  //  return 'Perfect';
  // }

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
