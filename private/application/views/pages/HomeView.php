<?php
class HomeView extends View{
    public function __construct() {
    }

    public function render() {
        $this->htmlCode =
        '
        <img src="images/slide1.png" width="800" height="440" alt="Quantum Qi & Pi Watch" />
        
        <aside id="homepage_rectangles">
            <div> <a href="?page='.Constants::PAGE_PI_WATCH.'"> <span class="title_text"> Quantum Pi-Watch </span> <br /> Premium quality <br /> <img src="images/premium_eye.png" width="92px" height="62px" alt="Quantum Pi-Watch" class="qpi" /> </a> </div> 
            <div> <a href="?page='.Constants::PAGE_QI_WATCH.'"> <span class="title_text"> Quantum Qi-Watch </span> <br /> Quality for all <br /> <img src="images/quality_eye.png" width="89px" height="60px" alt="Quantum Qi-Watch" class="qpi" /> </a> </div> 
            <div> <a href="?page='.Constants::PAGE_QUANTUM_OS.'"> <img src="images/quantum_os.png" /> <br /> <span class="title_text"> Quantum OS </span> <br /> Het beste besturingssysteem voor een horloge ooit gemaakt </a> </div>
        </aside>
        ';

    return $this->htmlCode;
    }
}