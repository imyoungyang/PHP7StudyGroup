<?php
$hello = 'world';
$world = 'hello';

echo $$world . "\n"; // ${$world}, $hello , then output 'world'

// price enum list
$priceEnum = array('Original', 'VIP', 'Employee');

// price list
$priceList = array(300, 200, 100);

// dump priceList to meaningful variable name;
for ($i=0; $i < count($priceList); $i++) {
    ${'price'.$priceEnum[$i]} = $priceList[$i];
}

echo 'demo 1: oringial price: ' . $priceOriginal . "\n";

// otherway to the samething
$priceDictionary = array("Original" => 300,
                         "VIP" => 200,
                         "Employee" => 100);
foreach ($priceDictionary as $key => $value) {
    ${'price'.$key} = $value;
}
echo 'demo 2: oringial price: ' . $priceOriginal . "\n";

// more simple way but
// please aware that the variable will be price_Original instead of priceOriginal
// It will add under score
extract($priceDictionary, EXTR_PREFIX_ALL, "price");
echo 'demo 3: oringial price: ' . $price_Original . "\n";
