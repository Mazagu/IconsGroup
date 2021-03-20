<?php 

namespace App;

class Icon extends BaseIcon
{
    public function __construct(Array $params)
    {
        foreach ($params as $value) {
            $this->addClass($value);
        }
    }

    public function html()
    {
        $classes = !empty($this->classes)? " class='" . implode(" ", $this->classes) . "'": "";
        if(!empty($this->styles)) {
            $styles = [];
            foreach ($this->styles as $key => $value) {
                $styles[] = "$key:$value";
            }

            $styles = "style='" . implode(';', $styles) . "'";
        } else {
            $styles = "";
        }
        
        return "<i{$classes}{$styles}></i>";
    }
}