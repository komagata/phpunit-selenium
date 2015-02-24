<?php
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class HomepageTest extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://localhost:8080/');
    }

    public function testTitle()
    {
        $this->open('/');
        $this->assertTitle('PHP Selenium Test');
    }
}
?>
