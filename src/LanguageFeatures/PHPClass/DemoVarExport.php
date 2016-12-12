<?php
namespace StudyGroup\LanguageFeatures\PHPClass;

class DemoVarExport
{
    public $var1;
    public $var2;

    public static function __set_state($an_array)
    {
        $obj = new DemoVarExport;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }
}

$a = new DemoVarExport;
$a->var1 = 5;
$a->var2 = 'TestingString';

echo "\n === var_export === \n";
var_export($a);

echo "\n ==== var_export to a string ==== \n";
$evalStringForClassA = var_export($a, true);

// generate $b use eval string
// Notes: must implement __set_state method in VarExportDemo class. Without that, got the error
// Fatal error: Uncaught Error: Call to undefined method StudyGroup\LanguageFeatures\PHPClass\VarExportDemo::__set_state()

eval('$b = ' . var_export($a, true) . ';');
echo "\n ==== var_dump evaled ClassB ==== \n";
var_dump($b);

//comparison operator (==), object variables are compared in a simple manner, namely: Two object instances are equal if they have the same attributes and values (values are compared with ==), and are instances of the same class.
// Notes: use single quote '' because we want to print $a=$b string.
echo "\n" . '$a==$b' . "\n";
echo $a == $b ? true : false; // output will be true
echo "\n";
