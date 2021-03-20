<?php 

namespace App;

class IconImage extends BaseIcon
{
    protected $src = "";

    public function __construct(Array $params)
    {
        foreach ($params as $value) {
            if(strpos($value, "src:") >= 0) {
                $this->src = str_replace("src:", "", $value);
            } else {
                $this->addClass($value);
            }
        }
    }

    public function html()
    {
        $classes = !empty($this->classes) ? " class='" . implode(" ", $this->classes) . "'" : "";
        if (!empty($this->styles)) {
            $styles = [];
            foreach ($this->styles as $key => $value) {
                $styles[] = "$key:$value";
            }

            $styles = "style='" . implode(';', $styles) . "'";
        } else {
            $styles = "";
        }

        $src = !empty($this->src)? " src='{$this->src}'":"";

        return "<img{$classes}{$styles}{$src}></i>";
    }
}