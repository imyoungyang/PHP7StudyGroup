<?php
require __DIR__ . '/vendor/autoload.php';

// name space alias
use StudyGroup\LanguageFeatures\Say as Say;

// the same as use StudyGroup\LanguageFeatures\Say\SayHi as SayHi;
use StudyGroup\LanguageFeatures\Say\SayHi;
use StudyGroup\LanguageFeatures\Say\SayHello;

$sayHi = new SayHi;
$sayHello = new SayHello;
$sayWorld = new Say\SayWorld;
echo $sayHi->sayHi() . "\n";
echo $sayHello->sayHello() . "\n";
echo $sayWorld->sayWorld() . "\n";
