<?php
print("Hello World");

print "print() also works without parentheses.";

print "This spans
multiple lines. The newlines will be
output as well.";

echo "echo() also works
multiple lines. The newlines will be
output as well.";

// Strings can either be passed individually as multiple arguments or
// concatenated together and passed as a single argument
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', chr(10);
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";

$some_var = 1;
// Because echo does not behave like a function, the following code is invalid.
//($some_var) ? echo 'true' : echo 'false';

// However, the following examples will work:
($some_var) ? print 'true' : print 'false'; // print is also a construct, but
                                            // it behaves like a function, so
                                            // it may be used in this context.
echo $some_var ? 'true': 'false'; // changing the statement around

echo "======== multiple arguments vs parentheses with concatenated ===== \n";

echo "Sum: ", 1 + 2;
echo "Hello ", isset($name) ? $name : "John Doe", "!";

echo 'Sum: ' . (1 + 2);
echo 'Hello ' . (isset($name) ? $name : 'John Doe') . '!';
