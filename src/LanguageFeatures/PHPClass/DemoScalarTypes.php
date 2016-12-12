<?php
$var1 = 'This is a string'; // scalar: string
$var2 = 3.14; // scalar: float
$var3 = 5; // scalar: int
$var4 = false; // scalar: boolean
$var5 = array('aaa', 'bbb', 3, 3.14);

function customPrintVar($var)
{
    if (is_scalar($var)) {
        echo "\n === scalar type ===";
        echo $var;
    } else {
        echo "\n === not scalar type ===";
        var_dump($var);
    }
}

// Use {} input dynamic variables
for ($i=1; $i < 6; $i++) {
    customPrintVar(${'var'.$i});
};
