<?php

namespace Tests;

require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\Icons;

class IconsTest extends TestCase
{
    public function testAddsIconWithClasses()
    {
        $icon = new Icons;
        $icon->base_icon('fa fa-base');
        $this->assertIsInt(strpos($icon->get(), "fa fa-base base_icon"));
    }

    public function testAddsTwoIcons()
    {
        $icon = new Icons;
        $icon->base_icon('fa fa-base')->top_icon('fa fa-top');
        $this->assertEquals(substr_count($icon->get(), "<i"), 2);
    }

    public function testAddsImage()
    {
        $icon = new Icons;
        $icon->base_icon('src:path/to/image.svg')->top_icon('fa fa-top');
        $this->assertTrue(preg_match('/(<img[^>]+>)/i', $icon->get()) === 1);
        $this->assertIsInt(strpos($icon->get(), "src='path/to/image.svg'"));
    }
}