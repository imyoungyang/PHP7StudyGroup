<?php
namespace StudyGroup\LanguageFeatures\PHPClass;

const TAIPEI_ID = 1;
define('StudyGroup\LanguageFeatures\PHPClass\TAIWAN_ID', 2);

echo \StudyGroup\LanguageFeatures\PHPClass\TAIPEI_ID . "\n";  // 1
echo \StudyGroup\LanguageFeatures\PHPClass\TAIWAN_ID . "\n";  // 2; note that we used define(), but the namespace is still recognized

// define a constant as a scalar expression
define('TRANSPORT_METHOD_SNEAKING', 1 << 0); // OK!
const TRANSPORT_METHOD_WALKING = 1 << 1; // OK!
// Next, conditional constants.
define('HOBBITS_FRODO_ID', 1);

if (HOBBITS_FRODO_ID==1) {
    define('TRANSPORT_METHOD', TRANSPORT_METHOD_SNEAKING); // OK!
    echo TRANSPORT_METHOD . "\n"; // 1
    // const PARTY_LEADER_ID = HOBBITS_FRODO_ID // Compile error: const can't be used in an if block
}

// Final, Class constant
class DemoImmutable
{
    const ANIMALS = array('dog', 'cat', 'bird');
    //define('VEHICELS', array('moto', 'bus')); // Error. define can't use in class scope
}

var_dump(DemoImmutable::ANIMALS);
