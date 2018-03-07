<?php

class Header{
    private $scripts;
    private $style;

    function __construct()
    {
        $this->scripts = [
            '_assets/js/jquery-1.12.4.min.js',
            '_assets/plugins/bootstrap/js/bootstrap.min.js',
            '_assets/plugins/bootstrap/js/popper.min.js',
            '_assets/js/admin.js'
        ];
        $this->style = [
            '_assets/plugins/bootstrap/css/bootstrap.min.css',
            '_assets/plugins/fontawesome/css/font-awesome.min.css',
            '_assets/css/admin.min.css'
        ];
        
    }

    public function show(){
        $html = "<!DOCTYPE html>";
        $html .= "<html lang=\"pt-br\">";
        $html .= "<head>";
        $html .= "<title></title>";
        $html .= "<meta charset=\"UTF-8\">";
        $html .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
        foreach($this->style as $css){
            $html .= "<link href=\"".PATH_DEFAULT."{$css}\" rel=\"stylesheet\">";
        }
        foreach($this->scripts as $script){
            $html .= "<script src=\"".PATH_DEFAULT."{$script}\"></script>";
        }
        $html .= "";
        $html .= "</head>";
        $html .= "<body id=\"box_admin\">";
        echo $html;
    }


    
    public function addScript($arr){
        foreach($arr as $a){
            array_push($this->scripts, $a);
        }
    }

    public function addStyle($arr){
        foreach($arr as $a){
            array_push($this->style, $a);
        }
    }
}