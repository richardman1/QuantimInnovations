<?php
class FutureView extends View{
    public function __construct() {
    }

    public function render() {
        $this->htmlCode =
        '
        <h2>Wat gaat de toekomst brengen</h2>
        <h3>De toekomst plannen van Quantum Innovations</h3>
        <p>
              
        Wij als Quantum Innovations hebben een duidelijk beeld over onze toekomst, wij willen in een paar jaar ons bedrijf wereldwijd op de kaart zetten!
        Dit willen wij allereerst bereiken door een goed product op de markt te brengen en dit product verder te ontwikkelen. We gaan dit doen door onze watches gefaseerd over de wereld uit te brengen.
        Dit willen we doen zodat wanneer wij een horloge in een regio uitbrengen deze ook meteen goed ondersteund word.<br /> 
        Dit willen we gaan realiseren door voordat een horloge in een bepaalde regio uitkomt daar eerst een vestiging te openen.
        Dit moet er voor zorgen dat wanneer klanten in dat deel van de wereld een probleem of vraag hebben ze direct goed geholpen kunnen worden door medewerkers die volledig op de hoogte zijn.
        </p>
        <img src="images/wereldwijd.jpg" width="250" height="150" />
        <h3>De toekomst voor de Quantum Watch</h3>
        <p>
        Een belangrijk aspect binnen ons bedrijf is dat wij willen doorontwikkelen, dit geld vooral voor onze watches. 
        We willen de horloges continu blijven verbeteren met nieuwe of verbeterde technologiën, soms zal dit kunnen lukken door middel van een "simpele" firmware update.
        Maar dit aspect zal er vooral voor zorgen dat wij deze nieuwe technieken gaan verwerken in nieuwe type Quantum Watches.<br />
        Ook zal er continu aan onze Quantum App Store gewerkt worden, dit zal voor een deel gedaan worden door een team binnen Quantum Innovations.
        Maar ook zeker door verschillende onafhankelijke ontwikkelaars die de mogelijkheden van onze Quantum Watches zien en het als een uitdaging zien om hier innoverende applicaties voor te bouwen.
        </p>
        ';

    return $this->htmlCode;
    }
}