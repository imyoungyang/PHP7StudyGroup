<?php
namespace StudyGroup\LanguageFeatures\PHPClass;

$demoArray = array('', false, 42, array('42'));

// var_dump(array('', false, 42, array('42')));
echo "\n ==== var_dump ==== \n";
var_dump($demoArray);

echo "\n ==== var_export ==== \n";
var_export($demoArray);

echo "\n ==== print_r ==== \n";
print_r($demoArray);


// var_dump can output multi-argumens but var_export can't
$var1 = 1;
$var2 = 2.0;
var_dump($demoArray, $var1, $var2);

class A
{
    public $var;
}

$a = new A;
$a->var = 5;

echo "\n ==== var_dump ==== \n";
var_dump($a);

echo "\n ==== var_export ==== \n";
var_export($a);

echo "\n ==== print_r ==== \n";
print_r($a);
