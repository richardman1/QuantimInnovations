<?php
/**
 * @author Nick Audenaerde
 * @version 1.0
 */
abstract class View{
    protected $htmlCode;

    public function __construct(){
    }

    abstract public function render();

    /**
     * Get html code
     */
    public function getHtmlCode(){
        return $this->htmlCode;
    }

    /**
     * Set html code
     * @param htmlCode (string): HTML string of content
     */
    public function setHtmlCode($htmlCode){
        $this->htmlCode = $htmlCode;
    }

    public function appendContent($htmlCode){
        $this->htmlCode .= $htmlCode;
    }
}