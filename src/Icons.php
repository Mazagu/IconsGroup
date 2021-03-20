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

    public function get()
    {
        if(count($this->container) == 0) {
            return "";
        } else if(count($this->container) == 1) {
            return current($this->container)->html();
        } else {
            return "<span class='{$this->base_class}'>" 
                . implode(array_map(function($icon) { 
                    return $icon->html(); 
                }, $this->container)) 
                . "</span>";
        }
    }

    private function _icon(BaseIcon $icon, $class)
    {
        $this->container[$class] = $icon;
        return $this;
    }

    public function __call($name, $arguments)
    {
        if(strstr($arguments[0], 'src:')) {
            $icon = new IconImage([$name, $arguments[0]]);
        } else {
            $icon = new Icon([$arguments[0], $name]);
        }
        return $this->_icon($icon, $name);
    }
}