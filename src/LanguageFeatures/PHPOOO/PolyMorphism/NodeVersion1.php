<?php
namespace DemoAbstract;

abstract class BaseNode
{
    abstract public function evaluate():float;
}

class ValueNode extends BaseNode
{
    public $value;
    public function evaluate():float
    {
        return $this->value;
    }
}

class OpNode extends BaseNode
{
    public $operator;
    public $leftNode;
    public $rightNode;
    public function evaluate():float
    {
        switch ($this->operator) {
            case '+':
                return $this->leftNode->evaluate() + $this->rightNode->evaluate();
            case '*':
                return $this->leftNode->evaluate() * $this->rightNode->evaluate();
            //case ....
        }
    }
}

$OneValueNode = new ValueNode();
$TwoValueNode = new ValueNode();
$ThreeValueNode = new ValueNode();

$OneValueNode->value = 1.0;
$TwoValueNode->value = 2.0;
$ThreeValueNode->value = 3.0;

$MultiNode = new OpNode();
$MultiNode->operator = '*';
$MultiNode->leftNode = $TwoValueNode;
$MultiNode->rightNode = $ThreeValueNode;
echo $MultiNode->evaluate();
