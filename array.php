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
