<?php
class QiWatchView extends View{
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
        De Quantum Qi-Watch (Q500i) is de Quantum Smartwatch van Quantum Innovations.
        Deze Smartwatch is hetzelfde als de Pi-Watch (P700i), maar met iets minder mogelijkheden.
        </p>
        
        <p>
        Zo mist de Qi-Watch een ingebouwde beamer. Toch is dit geen probleem, omdat niet idereen
        deze functie zou benutten. Een andere optie die is weggelaten is de mogelijkheid om
        panoramafoto&#39;s te maken. Ook dit is een functie die niet iedereen gebruikt. Ook is de 
        kwaliteit van de camera teruggebracht tot 5 megapixels, wat voor de doorsnee gebruiker
        meer dan voldoende is.
        </p>
        
        <p>
        Voor de rekenkracht beschikt de Qi-Watch over een Snapdragon 200 Dual-core processor.
        Omdat deze is underclockt, Is de warmteproductie veel minder dan wanneer dat niet het
        geval zou zijn. Hierdoor blijft de Smartwatch ook met intensief gebruik goed draagbaar.<br>
        Omdat de Qi-watch over een kleinere processor beschikt, is het ook mogelijk dat de Battery-Band
        minder stroom geeft, waardoor de Battery-Band kleiner, en dus aangenamer wordt om te dragen.
        </p>
        
        <p>
        De Smartwatches kunnen ook onder water gebruikt worden. De Qi-Watch is gegarandeerd
        waterdicht tot op een diepte van minimaal 2 meter.
        </p>
        
        <p>
        Qua uiterlijk zien de Pi-Watch en de Qi-watch er hetzelfde uit. Het enige zichtbare 
        verscil schuilt in het feit dat de Pi-Watch over een beamer beschikt en de Qi-Watch niet.
        </p>
        

        ';

    return $this->htmlCode;
    }
}