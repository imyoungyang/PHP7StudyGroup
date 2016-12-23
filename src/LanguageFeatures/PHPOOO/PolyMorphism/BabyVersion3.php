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

// interface
interface cupSetter
{
    public function setCup($cup);
}

// Use setter DI
class Baby implements cupSetter
{
    private $cup;
    public function get():string
    {
        return 'Baby get ' . $this->cup->drink();
    }
    public function setCup($cup)
    {
        $this->cup = $cup;
    }
}

// Injector, response for construct orange joice.
$cup = new Cup('orange joice');
$baby = new Baby();
$baby->setCup($cup);
echo $baby->get() . "\n";
