<?php

// $age = [
//     'manish' => '12',
//     'mukesh' => '112',
//     'rahul' => '122'
// ];

// foreach ($age as $key => $value) {

//     echo $key . "=" . $value . "<br>";
// }



// $food = array('orange', 'apple', 'mango');

// echo count($food) . "<br>";
// echo sizeof($food);




///multi dimension array
// $foods = array(
//     'fruits' => array('orange', 'banana', 'apple'),
//     'veges' => array('carrot', 'pea', 'cabbage')
// );

// echo count($foods) . "<br>";
// echo count($foods['fruits']) . "<br>";
###############################################

$foods = ['biscuits', 'banana', 'banana', 'chocolates'];
$len = count($foods);



for ($i = 0; $i < $len; $i++) {
    echo $foods[$i] . "<br>";
}

echo "<pre>";
print_r(array_count_values($foods));
echo "<pre>";
###############################################

$names = ['Ram', 'SHyam', 'hari'];

// echo "The result is " .  in_array('hari', $names);

if (in_array('haha', $names)) {
    echo "Found Successfully";
} else {
    echo "Not Found";
}
echo "###############################################";



$wow = ['Ram', 'SHyam', 'hari', 'gadesh', 'gopal'];
$hehe = ['hahas', 'nahas', 'ruhhh', 'change'];

$newArray = array_replace($wow, $hehe);

echo "<pre>";
print_r($newArray);
echo "<pre>";


#####################################################



