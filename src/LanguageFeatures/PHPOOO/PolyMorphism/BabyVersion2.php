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

// Use setter DI
class Baby
{
    public $cup;
    public function get():string
    {
        return 'Baby get ' . $this->cup->drink();
    }
}

// Injector, response for construct orange joice.
$cup = new Cup('orange joice');
$baby = new Baby();
// property setter
$baby->cup = $cup;
echo $baby->get() . "\n";
