<?php
$demoArray = array('', false, 42, array('42'));

// var_dump(array('', false, 42, array('42')));
echo "\n ==== var_dump ==== \n";
var_dump($demoArray);

echo "\n ==== var_export ==== \n";
var_export($demoArray);

echo "\n ==== print_r ==== \n";
print_r($demoArray);


// var_dump can output multi-arguments
$var1 = 1;
$var2 = 2.0;
$var3 = array($var1, $var2, 3.14);

echo "\n ==== var_dump multi-arguments ==== \n";
var_dump($var1, $var2, $var3);
