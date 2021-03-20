<?php

namespace Tests;

require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\Icon;

class IconTest extends TestCase
{
    public function testAddClassToIcon()
    {
        $icon = new Icon(['fa']);
        $this->assertIsInt(strpos($icon->html(), "fa"));
    }

    public function testAddClassesArrayToIcon()
    {
        $icon = new Icon([]);
        $icon->addClass(['fa', 'fa-bottom']);
        $this->assertIsInt(strpos($icon->html(), "fa fa-bottom"));
    }

    public function testAddClassesStringToIcon()
    {
        $icon = new Icon([]);
        $icon->addClass('fa fa-bottom');
        $this->assertIsInt(strpos($icon->html(), "fa fa-bottom"));
    }

    public function testNoDuplicatedClasses()
    {
        $icon = new Icon([]);
        $icon->addClass('fa fa-bottom fa-bottom');
        $this->assertTrue(substr_count($icon->html(), "fa-bottom") === 1);
    }

    public function testAddStyleToIcon()
    {
        $icon = new Icon([]);
        $icon->addStyle('color:red');
        $this->assertIsInt(strpos($icon->html(), "style='color:red'"));
    }

    public function testAddStylesArrayToIcon()
    {
        $icon = new Icon([]);
        $icon->addStyle(['color:red','border:blue']);
        $this->assertIsInt(strpos($icon->html(), "style='color:red;border:blue'"));
    }

    public function testAddStylesStringToIcon()
    {
        $icon = new Icon([]);
        $icon->addStyle('color:red; border:blue');
        $this->assertIsInt(strpos($icon->html(), "style='color:red;border:blue'"));
    }

    public function testNoDuplicatedStyles()
    {
        $icon = new Icon([]);
        $icon->addStyle('color:red; border:blue;border:blue');
        $this->assertTrue(substr_count($icon->html(), "border:blue") === 1);
    }
}
