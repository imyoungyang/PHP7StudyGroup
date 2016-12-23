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

// An example without dependency injection
class Baby
{
    // Internal reference to the service used by this client
    private $cup;
    // Constructor
    public function __construct()
    {
        // Specify a specific implementation in the constructor instead of using dependency injection
        $this->cup = new Cup('orange joice');
    }
    // Method within this client that uses the services
    public function get():string
    {
        return 'Baby get ' . $this->cup->drink();
    }
}

$baby = new Baby();
echo $baby->get() . "\n";
