<?php
class DesignView extends View{
    public function __construct() {
    }

    public function render() {
        $this->htmlCode =
        '
            <aside id="extra_menu">
            <ul>
                <li> <a href="?page='.Constants::PAGE_QI_WATCH.'"> Qi-Watch </a> </li>
                <li> <a href="?page='.Constants::PAGE_PI_WATCH.'"> Pi-Watch </a> </li>
                <li> <a href="?page='.Constants::PAGE_SPECS.'"> Specificaties </a> </li>
                <li> <a href="?page='.Constants::PAGE_DESIGN.'"> Design </a> </li>
            </ul>
        </aside>
        <hr />
        

        <p>
        Zo uitgebreid als de functionaliteiten van de Smartwatches zijn, zo simpel is het design.<br>
        Omdat de binnenkant zo geavanceerd is, hebben we er voor gekozen om de buitenkant van de Smartwatches
        zo gelijk mogelijk te houden aan "gewone" horloges, aangezien velen dit gewend zijn.
        </p>

        <p>
        <img src="images/watch 1.png" width="380" heigth="380">
        <img src="images/watch 5.png" width="380" heigth="380">
        </p>

        <p> 
        Toch is de buitenkant niet wat het lijkt. De band om je arm heen is niet zomaar een horlogebandje. 
        Elk schakeltje is een aparte batterij, die er voor zorgt dat je horloge zo lang mogelijk door
        kan gaan, zonder dat je hem op hoeft te laden.<br>
        Het horloge zelf lijkt misschien simpel, maar de rand om het scherm heen bevat een touchpad.
        Bovendien bevat het plaatje dat contact maakt met je pols een Health Sensor, die bijvoorbeeld
        hartslag kan meten.
        </p>
        

        ';

    return $this->htmlCode;
    }
}