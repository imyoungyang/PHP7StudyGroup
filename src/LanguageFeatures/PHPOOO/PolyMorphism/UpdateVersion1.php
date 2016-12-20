<?php
namespace DemoAbstract;

abstract class Update
{
    abstract public function execute():string;
    abstract public function render():string;
}

class I18NUpdate extends Update
{
    public function execute():string
    {
        return 'Do A';
    }
    public function render():string
    {
        return 'render A';
    }
}

class NonI18NUpdate extends Update
{
    public function execute():string
    {
        return 'Do B';
    }
    public function render():string
    {
        return 'render B';
    }
}
