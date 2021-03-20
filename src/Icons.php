<?php 
namespace App;

class Icons
{
    private $container = [];
    private $base_class;

    public function __construct($class = "icon-group")
    {
        $this->base_class = $class;
    }

    public static function icon($class, $src = null)
    {
        if ($src) {
            return "<img class='$class' src='$src'>";
        } else {
            return "<i class='$class'></i>";
        }
    }

    public function get()
    {
        if(count($this->container) == 0) {
            return "";
        } else if(count($this->container) == 1) {
            return $this->container[0];
        } else {
            return "<span class='{$this->base_class}'>" . implode($this->container) . "</span>";
        }
    }

    private function _icon($class)
    {
        $this->container[] = "<i class='$class'></i>";
        $this->_shift();
        return $this;
    }

    private function _image($src, $class)
    {
        $src = str_replace('src:', "", $src);
        $this->container[] = "<img class='$class' src='$src'>";
        $this->_shift();
        return $this;
    }

    private function _shift()
    {
        if (count($this->container) > 4) array_shift($this->container);
    }

    public function __call($name, $arguments)
    {
        if(strstr($arguments[0], 'src:')) {
            return $this->_image($arguments[0], $name);
        } else {
            return $this->_icon($arguments[0] . " " . $name);
        }
    }
}