<?php
class ExtraView extends View{
    public function __construct() {
    }

    public function render() {
        $this->htmlCode =
        '
<aside id="extra_menu" style="//position: fixed; top: 125px;">
    <ul>
        <li> <a href="#battery"> Batteryband </a> </li>
        <li> <a href="#ScreenPro"> Screen Protector </a> </li>
        <li> <a href="#Cables"> Cables </a> </li>
        <li> <a href="#Wireless"> Wireless headphones </a> </li>
    </ul>

</aside>
            <hr />

<article id="battery">
    <header>
        <h1> Batteryband </h1>
    </header>
    <p>
        Voor een accuduur die de hele dag meegaat is natuurlijk voldoende stroom nodig. 
        De Batteryband zorgt voor een extra capaciteit van 600 mAh wat ervoor zorgt dat jij de hele dag alles met je horloge kan doen.
        Bij de Pi-Watch is deze batteryband standaard ingebouwd.
        De Qi-Watch is niet uitgerust met deze batteryband. 
        Heeft U een Qi-watch en wilt u toch een langere accuduur, dan kunt U de Batteryband apart aanschaffen en dan kunt U ook met Uw Qi-Watch de hele dag genieten van Uw Watch.
    </p>
</article>
<article id="ScreenPro">
    <header>
        <h1> Screen protector </h1>
    </header>
    <p>
        Als U gebruik wilt maken van een screen protector kunt u een vloeibare screenprotector kopen. 
        Na het aanschaffen van deze spray kunt u deze op uw schone scherm spuiten. 
        De krasbestendigheid is twee keer zo sterk als de sterkte van de traditionele screen protectors.
        In een fles zit een maximum van 50 sprays. 
        Ook is het water morsbestendig en zorgt het voor een glad en vuil afstotend oppervlak.
        De spray weerst stof tot een maximum van 6 maanden. <br>
        De spray is apart verkrijgbaar.
    </p>
</article>
    <article id="Cables">
    <header>
        <h1> Cables </h1>
    </header>
    <p>
        Er zijn verschillende kabels die U kunt gebruiken bij de Quantum Pi-Watch en bij de Quantum Qi-Watch. 
        U zult deze kabels echter niet aansluiten op uw Watch.
        Alle kabels zullen aangesloten kunnen worden op het docking station. 
        Het docking station zal een draadloze verbinding hebben met Uw Watch.
        Het docking station zal een ingang hebben voor voor een micro usb. Zodat U de het docking station kunt aansluiten op de stroom. 
        Ook zal het docking station een HDMI ingang hebben. Zodat het docking station aangesloten kan worden met een HDMI kabel op Uw televisie. 
        Hierdoor kunt U Uw watch dus ook aansluiten op U televisie en kunt U bijvoorbeeld naar filmpjes kijken op je televisie via Uw Watch. <br>
        De HDMI-kabel is apart verkijgbaar.
    </p>
</article>
<article id="Wireless">
    <header>
        <h1> Wireless headphones </h1>
    </header>
    <p>
        Het is ook mogelijk om een draadloze koptelefoon te verbinden met Uw Watch.
        De koptelefoon zal via bluetooth verbonden worden met Uw Watch. 
        Zo kunt U overal genieten van Uw favoriete muziek via Uw Watch. <br>
        De draadloze koptelefoon is apart verkrijgbaar.
    </p>
</article>
        ';

    return $this->htmlCode;
    }
}