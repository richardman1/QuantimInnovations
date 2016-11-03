<?php
class ContactView extends View{
    public function __construct() {
    }

    public function render() {
        $this->htmlCode =
        '
        <article>
        <h2>Contact opnemen met Quantum Innovations</h2>
        <h3>Algemene vragen</h3>
        <p>
        Heeft U vragen over het product of zijn er andere vragen waar de website nog geen antwoord op geeft? 
        Stuur dan gerust een email naar <a href="mailto:help@quantuminnovations.com">help@quantuminnovations.com</a><br>
        Binnen 2 werkdagen krijgt U antwoord.
        </p>
        <h3>Technische ondersteuning</h3>
        <p>
        Heeft U problemen met uw Quantum smartwatch, neem dan contact op met de support afdeling.
        De support afdeling is te bereiken op: <a href="mailto:support@quantuminnovations.com">support@quantuminnovations.com</a><br>
        Ook voor garantie claims kunt U bij de support afdeling terecht. Binnen 2 werkdagen krijgt U antwoord.
        </p>
        <h3>Verkoopondersteuning</h3>
        <p>
        Heeft U vragen over uw bestelling(en) of zijn er problemen opgetreden? 
        Dan kunt U contact opnemen met de sales afdeling op het volgende email adres:
        <a href="mailto:sales@quantuminnovations.com">sales@quantuminnovations.com</a><br>
        U krijgt dan binnen 2 werkdagen antwoord.
        </p>
        <h3>Pers</h3>
        <p>
        Voor de pers en vragen over nieuws rond Quantum Innovations is er een apart email adres: <a href="mailto:press@quantuminnovations.com">press@quantuminnovations.com</a><br> 
        U krijgt dan spoedig een antwoord, ook kunt U via dit email adres digitaal promotie materiaal aanvragen.<br>
        Voor dringende vragen zijn we ook telefonisch bereikbaar, voor het telefoonnummer zie de algemene contactgegevens hieronder.
        </p>
        <h3>Algemene contactgegevens</h3>
        <p>
        <table id="algemeencontact">
        <tr><td>email:</td><td><a href="mailto:contact@quantuminnovations.com">contact@quantuminnovations.com</a></td></tr>
        <tr><td>telefoon:</td><td>0114-361557 (elke werkdag beschikbaar van 8:00 tot 17:00)</td></tr>
        <tr><td>fax:</td><td>0114-361436</td></tr>
        <tr><td>adres:</td><td><address>Legeweg 201<br>Koewacht Nederland</address></td></tr>
        </table>
        </p>
        </article>
        ';

    return $this->htmlCode;
    }
}