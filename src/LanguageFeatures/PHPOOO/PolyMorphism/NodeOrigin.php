<?php
namespace DemoAbstract;

class Node
{
    public $operator; // string
    public $value;
    public $leftNode;
    public $rightNode;
    public function evaluate():float
    {
        switch ($this->operator) {
            case '#':
                return $this->value;
                break;
            case '+':
                return $this->leftNode->evaluate() + $this->rightNode->evaluate();
                break;
            case '*':
                return $this->leftNode->evaluate() * $this->rightNode->evaluate();
                break;
            //case ....
        }
    }
}

$OneNode = new Node();
$OneNode->value = 1.0;
$OneNode->operator = '#';

$TwoNode = new Node();
$TwoNode->value = 2.0;
$TwoNode->operator = '#';

$ThreeNode = new Node();
$ThreeNode->value = 3.0;
$ThreeNode->operator = '#';

$MultiNode = new Node();
$MultiNode->operator = '*';
$MultiNode->leftNode = $TwoNode;
$MultiNode->rightNode = $ThreeNode;
echo $MultiNode->evaluate();
