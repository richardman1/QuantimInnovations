<?php
class PiWatchView extends View{
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
        De Quantum Pi-Watch (P700i) is de premium Smartwatch van Quantum Innovations.
        Deze Smartwatch is hetzelfde als de Qi-Watch (Q500i), maar met vele extra&#39;s.
        </p>
        
        <p>
        Zo heeft de Pi-Watch een ingebouwde beamer, waarmee je tot een resolutie van 
        maximaal 720p kunt projecteren. ook is het mogelijk om met de Pi-Watch panoramafoto&#39;s te maken en is de
        camerakwaliteit ten opzichte van de Qi-watch beter, namelijk 8 megapixels.
        </p>
        
        <p>
        Voor de rekenkracht beschikt de Pi-Watch over een Snapdragon 400 Quad-core processor.
        Omdat deze is underclockt, Is de warmteproductie veel minder dan wanneer dat niet het
        geval zou zijn. Hierdoor blijft de Smartwatch ook met intensief gebruik goed draagbaar.
        </p>
        
        <p>
        De Smartwatches kunnen ook onder water gebruikt worden. De Pi-Watch is gegarandeerd
        waterdicht tot op een diepte van minimaal 5 meter.
        </p>
        
        <p>
        Qua uiterlijk zien de Pi-Watch en de Qi-watch er hetzelfde uit. Het enige zichtbare 
        verscil schuilt in het feit dat de Pi-Watch over een beamer beschikt en de Qi-Watch niet.
        </p>
        

        ';

    return $this->htmlCode;
    }
}