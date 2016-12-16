<?php
namespace StudyGroup\LanguageFeatures\PHPClass;

class Foo
{
    public static $fun = 'static property';
    public static function fun()
    {
        echo 'Method fun called' . "\n";
    }
    public function hello()
    {
        echo 'Hello world!' . "\n";
    }
}

echo Foo::$fun . "\n"; // This prints 'static property'. It does need a $fun in this scope.
$fun = 'fun';
Foo::$fun();  // This calls $foo->fun() reading $fun in this scope.

$className = __NAMESPACE__ . '\\' . 'Foo'; // need to add name space
$methodName = 'hello';
$myFoo = new $className();
$myFoo->$methodName();
