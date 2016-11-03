<?php
class WatchView extends View{
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
        De Smartwatches van Quantum Innovations zijn de horloges van de toekomst. 
        De specificaties van onze Smartwatches zijn een grote verbetering voor de markt.
        Horloges die worden uitgebracht door Quantum Innovations bevatten gegarandeerd de
        nieuwste hardware en software.
        </p>
        
        <p>
        Op het eerste gezicht lijken de Smartwatches van Quantum Innovations niets bijzonders.
        Het grensverleggende begint echter al met de besturing. De horloges worden niet bestuurd
        door middel van een touchscreen, maar maken gebruik van een technologie genaamd 
        &#39;Motion Sensing&#39;. Deze techniek vormt voor zichzelf een raster, waarin de gebruiker
        zijn hand plaatst. De sensor kan &#39;zien&#39; waar je je hand houdt. 
        Door met je hand in de lucht boven de horloges te bewegen, kan je de Smartwatches besturen.
        </p>
        
        <p>
        Daarnaast is de rand rond het scherm uitgerust met een touchpad. Dit kan je gebruiken
        om bijvoorbeeld het volume van je muziek aan te passen.
        </p>
        
        <p>
        Ook blijven de horloges onder water gewoon werken. Dit is mogelijk gemaakt door 
        te zorgen dat er geen aansluitingen zijn op het horloge zelf. Opladen en bestandsoverdrachten
        worden gerealiseerd door middel van het dock. De horloges kunnen dus draadloos worden opgeladen.
        Een andere mogelijkheid voor bestandsoverdrachten is via Bluetooth.
        </p>
        
        </div>

        ';

    return $this->htmlCode;
    }
}