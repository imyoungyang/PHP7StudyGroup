<?php
namespace DemoAbstract;

require('./UpdateVersion1.php');

class Consumer
{
    private $update;
    public function __construct($update)
    {
        $this->update = $update;
    }
    public function updateInfo():string
    {
        return $this->update->execute();
    }
}

class FactoryConsumer
{
    public static function makeConsumer():Consumer
    {
        $bool = (!isset($_SERVER['FLAG_i18n_ENABLED']) ||
            filter_var($_SERVER['FLAG_i18n_ENABLED'], FILTER_VALIDATE_BOOLEAN));
        $update = $bool ? new I18NUpdate() : new NonI18NUpdate();
        return new Consumer($update);
    }
}

$consumer = FactoryConsumer::makeConsumer();
var_dump($consumer);
echo $consumer->updateInfo() . "\n";
