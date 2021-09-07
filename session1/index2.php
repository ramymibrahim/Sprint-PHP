<?php
/*
$age = 55;
if ($age >= 40) {
    echo 'You can have Pension';
} else if ($age > 50) {
    echo 'Else if testing';
} else {
    echo 'Sorry you can\'t';
}
$gender = 'male';
switch ($gender) {
    case 'male':
        echo 'Male';
        break;
    case 'female':
        echo 'Female';
        break;
}
if (!(false || 0 || 0.0 || -0.0 || '' || "0" || [] || null)) {
    echo 'Falsely values';
}
$dble_num = 1.556;
echo '<br />';
echo gettype(1) . '<br />';
echo gettype($dble_num) . '<br />';
echo gettype(false) . '<br />';
echo gettype('str') . '<br />';
echo gettype([]) . '<br />';
var_dump($dble_num);
if (is_int($age)) {
    echo '<br />int';
}
//is_float
//is_string()
echo is_bool(1);
if (isset($age)) {
    echo '<br /> age is set';
}
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 5);
for ($i = 0; $i < 5; $i++) {
    echo '<br />' . $i;
}

//foreach as

$arr = [5, 3, 6, 8];
foreach ($arr as $n) {
    echo $n;
}

//Arrys
//Indexed Arrays
//Associative arrays

$indexed_array = ['Ramy', 'Mohamed', 32];
$associative_array = [
    'firstName' => 'Ramy', 'lastName' => 'Mohamed', 'age' => 32
];
echo '<pre>';
var_export($indexed_array);
echo '</pre>';
echo '<pre>';
var_export($associative_array);
echo '</pre>';
$indexed_array = array('Ramy', 'Mohamed', 32, ['city' => 'cairo']);
echo '<pre>';
var_export($indexed_array);
echo '</pre>';
echo $indexed_array[3]['city'];
for ($i = 0; $i < count($indexed_array); $i++) {
    if (!is_array($indexed_array[$i]))
        echo $indexed_array[$i];
}
*/
/*
$num_array = [5, 9, 8, 2, 1, 5, 0, 6, 7, 0, 6];
echo '<pre>';
var_export($num_array);
echo '</pre>';

//sort($num_array);
rsort($num_array);

echo '<pre>';
var_export($num_array);
echo '</pre>';

$associative_array = [
    'firstName' => 'Ramy', 'lastName' => 'Mohamed', 'age' => 32
];
echo '<pre>';
var_export($associative_array);
echo '</pre>';

//sort($num_array);
//rsort($num_array);
//asort($associative_array);
//ksort($associative_array);
//arsort($associative_array);
//krsort($associative_array);
echo '<pre>';
var_export($associative_array);
echo '</pre>';

function calc_tax($val=1000)
{
    return $val * 0.1;
}

echo calc_tax().'<br />';
echo calc_tax(2000).'<br />';
*/
// session_start();
// //Super Global variables
// echo '<pre>';
// //var_export($GLOBALS);
// echo '</pre>';

// $GLOBALS['val']=10;
// function calc_tax(){
//     return $GLOBALS['val']*0.1;
// }
// echo calc_tax();

$a1=[1,2,3,4];
$a2=[1,2,3,"4"];
$b=[5,6,7,8];

//$c=$b+$a;
var_export($a1<>$a2);