<?php
namespace DemoDI;

class Cup
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function drink():string
    {
        return 'a drink of ' . $this->name;
    }
}

// An example use Constructor DI
class Baby
{
    private $cup;
    // Constructor
    public function __construct($cup)
    {
        $this->cup = $cup;
    }
    public function get():string
    {
        return 'Baby get ' . $this->cup->drink();
    }
}

// Injector, response for construct orange joice.
$cup = new Cup('orange joice');
// DI in constructor
$baby = new Baby($cup);
echo $baby->get() . "\n";
