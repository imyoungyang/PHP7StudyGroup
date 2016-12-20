<?php
namespace DemoAbstract;

class Update
{
    private $flagI18NEnable;
    public function __construct($flagI18NEnable)
    {
        $this->flagI18NEnable = $flagI18NEnable;
    }

    public function execute():string
    {
        if ($this->flagI18NEnable) {
            return 'Do A';
        } else {
            return 'Do B';
        }
    }

    public function render()
    {
        if ($this->flagI18NEnable) {
            return 'render A';
        } else {
            return 'render B';
        }
    }
}
