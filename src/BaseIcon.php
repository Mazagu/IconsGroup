<?php 
namespace App;

abstract class BaseIcon
{
    protected $type;
    protected $classes = [];
    protected $styles = [];

    public abstract function html();

    public function addClass($class)
    {
        if(is_string($class) && strpos($class, " ")) {
            $class = explode(" ", $class);
        }

        if(is_array($class)) {
            foreach($class as $class_piece) {
                $this->addClass($class_piece);
            }
        } else {
            $this->classes[trim($class)] = trim($class);
        }
    }

    public function addStyle($style)
    {
        if (is_string($style) && strpos($style, ";")) {
            $style = explode(";", $style);
        }

        if(is_array($style)) {
            foreach ($style as $style_piece) {
                $this->addStyle($style_piece);
            }
        } else {
            $style = explode(":", $style);
            if(count($style) === 2) {
                $this->styles[trim($style[0])] = trim($style[1]);
            }
        }
    }
}