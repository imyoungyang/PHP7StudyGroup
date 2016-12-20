<?php
namespace DemoAbstract;

require('./Update.php');

use PHPUnit\Framework\TestCase;

class UpdateTest extends TestCase
{
    public function testExecuteDoI18n()
    {
        // Arrange
        // 'FLAG_I18N_ENABLED', true
        $update = new Update(true);

        // Act
        $result = $update->execute();

        // Assert
        $this->assertTrue($result == 'Do A');
    }

    public function testExecuteDoNonI18N()
    {
        // Arrange
        // 'FLAG_I18N_ENABLED', false
        $update = new Update(false);

        // Act
        $result = $update->execute();

        // Assert
        $this->assertTrue($result == 'Do B');
    }
}
