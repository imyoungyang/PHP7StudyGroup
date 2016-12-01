<?php
namespace StudyGroup\LanguageFeatures\Say;

require_once('SayHi.php');
require_once('SayHello.php');

$sayHi = new SayHi;
$sayHello = new SayHello;
echo $sayHi->sayHi() . "\n";
echo $sayHello->sayHello() . "\n";
