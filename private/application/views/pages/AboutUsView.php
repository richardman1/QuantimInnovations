<?php
class AboutUsView extends View{
    public function __construct() {
    }

    public function render() {
        $this->htmlCode =
        '
<article>        
<p>        
<img style="margin:0px auto; display:block;" src="images/quantumlogo.png" alt="Het logo van quantum innovations">
</p>
<h1>Wie zijn wij?</h1>
        Wij zijn Quantum Innovations.
        Een jong, nieuw bedrijf dat staat voor continue innovatie. 
        Wij streven ernaar om u de nieuwste producten aan te bieden op technologisch gebied. 
        Wij willen altijd een stap vooruit blijven op de grote concurrenten ervoor zorgen dat u het nieuwste van het nieuwste in huis heeft.
</article>
<article>
<p><h1>Wat bieden wij u als klant?</h1>
Zoals al eerder gezegd bieden wij u het nieuwste van het nieuwste. Producten van Quantum Innovations zijn milieubewust en kwalitatief gecreërd wat inhoudt dat u een goed product bezit, maar dat dit product ook weinig tot niet schadelijk is voor het milieu.
U krijgt producten met eindeloos veel mogelijkheden in handen waardoor uw dagelijkse leven juist vele malen makkelijker en leuker kan worden. Hierdoor richten we ons op u, maar ook op de oudere en jongere generaties en de generaties die nog moeten komen. 
</p>
</article>
<article>
<p><h1>Wat voor producten?</h1>
Onze producten voldoen aan de behoeften van de moderne mens vandaag de dag. Deze functies blijven wij vernieuwen en aanpassen zodat wij aan uw behoeften kunnen blijven voldoen.
De ene keer is het een horloge zoals op dit moment, de andere keer is het misschien wel een compleet nieuwe desktop of laptop. Kortom: het ligt geheel aan u wat wij maken! <br>
Dat ziet u toch nergens anders?</p>
</article>
'
        ;

    return $this->htmlCode;
    }
}