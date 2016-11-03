<?php
class TemplateView extends View{
    private $contentHtmlCode;

    public function __construct() {
    }

    public function render() {
        $this->htmlCode = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Quantum Innovations</title>
            </head>

            <body>
            <header>
                <nav>
                    <ul>
                        <li> <a href="?page='.Constants::PAGE_HOME.'"> <img src="images/home.png" width="" height="" class="img1" /> Home </a> </li>
                        <li> <a href="?page='.Constants::PAGE_WATCH.'"> <img src="images/watch.png" width="" height="" class="img2" /> Watch </a> </li>
                        <li> <a href="?page='.Constants::PAGE_ABOUT_US.'"> <img src="images/aboutus.png" width="24" height="24" class="img3" /> About us </a> </li>
                        <li> <a href="?page='.Constants::PAGE_CONTACT.'"> <img src="images/contact.png" width="24" height="18" class="img4" /> Contact </a> </li>
                        <li> <a href="?page='.Constants::PAGE_FUTURE.'"> <img src="images/future.png" width="24" height="24" class="img5" /> Future </a> </li>
                    </ul>
                </nav>
            </header>
            	

           <div class="content">
           '.$this->contentHtmlCode;
                        
''.$this->htmlCode .= '
    </div>
            <footer>
                <div class="footertext">
                    <h1>Pi & Qi extra</h1>
                    <ul>
                        <li><a href="#">Battery band</a></li>
                        <li><a href="#">Screen protector</a></li>
                        <li><a href="#">Cables</a></li>
                        <li><a href="#">Wireless headphones</a></li>
                        <li><a href="#">More...</a></li>
                    </ul>
                    </div>
                    <div class="footertext"> 
                    <h1>Software</h1>
                    <ul>
                        <li><a href="#">Google maps 3D</a></li>
                        <li><a href="#">T-player 3D</a></li>
                        <li><a href="#">T-store 3D</a></li>
                        <li><a href="#">T-health</a></li>
                        <li><a href="#">Cyber ring</a></li>
                        <li><a href="#">Gestures</a></li>
                    </ul>
                    </div>
                    <div class="footertext">
                    <h1>Work at Quantum</h1>
                    <ul>
                        <li><a href="#">Carreer</a></li>
                        <li><a href="#">possibilitys</a></li>
                        <li><a href="#">Work</a></li>
                    </div>
                    <div class="footertext">
                    <h1>Hardware</h1>
                    <ul>
                        <li><a href="#">Snapdragon 200</a></li>
                        <li><a href="#">Beamer and camera</a></li>
                        <li><a href="#">Battery band</a></li>
                        <li><a href="#">Health band</a></li>
                        <li><a href="#">Overige</a></li>
                    </ul>
                </div>
            </footer>
            </body>
            </html>';

            return $this->htmlCode;
    }

    public function setContentHtmlCode($contentHtmlCode) {
            $this->contentHtmlCode = $contentHtmlCode;
    }

    public function getContentHtmlCode() {
            return $this->contentHtmlCode;
    }
}