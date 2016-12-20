<?php
namespace DemoAbstract;

require('./UpdateVersion1.php');

use PHPUnit\Framework\TestCase;

class UpdateVersion1Test extends TestCase
{
    public function testExecuteI18nUpdate()
    {
        $update = new I18NUpdate();
        $result = $update->execute();
        $this->assertTrue($result == 'Do A');
    }

    public function testExecuteNonI18NUpdate()
    {
        $update = new NonI18NUpdate();
        $result = $update->execute();
        $this->assertTrue($result == 'Do B');
    }
}
