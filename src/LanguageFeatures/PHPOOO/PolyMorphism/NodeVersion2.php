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

abstract class OpNode extends BaseNode
{
    public $leftNode;
    public $rightNode;
}

class AdditionNode extends OpNode
{
    public function evaluate():float
    {
        return $this->leftNode->evaluate() + $this->rightNode->evaluate();
    }
}

class MultiplicationNode extends OpNode
{
    public function evaluate():float
    {
        return $this->leftNode->evaluate() * $this->rightNode->evaluate();
    }
}

$OneValueNode = new ValueNode();
$TwoValueNode = new ValueNode();
$ThreeValueNode = new ValueNode();

$OneValueNode->value = 1.0;
$TwoValueNode->value = 2.0;
$ThreeValueNode->value = 3.0;

$multiNode = new MultiplicationNode();
$multiNode->leftNode = $TwoValueNode;
$multiNode->rightNode = $ThreeValueNode;

echo $multiNode->evaluate();
