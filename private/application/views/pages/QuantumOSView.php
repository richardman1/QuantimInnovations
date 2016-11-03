<?php
class QuantumOSView extends View{
    public function __construct() {
    }

    public function render() {
        $this->htmlCode =
        '
                    <!DOCTYPE html>
            <html>
            <link href="css/main.css" rel="stylesheet" type="text/css" />
            <head>
                <title>Quantum OS</title>
             </head>
             <body>
                    <h1 id="QuantumOSKop">Beste OS voor een smartwatch ooit gemaakt!</h1>
                    <div id="plaatje">
                        <img id="menu" src="images/watch_back.png"/>
                        <img id="menu1" src="images/menu1.png" />
                        <img id="menu2" src="images/menu2.png" />
                        <img id="pijlLinks" src="images/left_arrow.png">
                        <img id="pijlRechts" src="images/right_arrow.png">
                    </div>
                    
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                    </script>
                    
                    <script> 
                        $(document).ready(function(){
                        $("#pijlLinks").click(function(){
                        $("#menu1").animate({left:"120px"});
                        $("#menu2").animate({left:"-1800px"});
                        });
                        });
                    </script>
                    
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
                    </script>
                    
                    <script> 
                        $(document).ready(function(){
                        $("#pijlRechts").click(function(){
                        $("#menu1").animate({left:"1800"});
                        $("#menu2").animate({left:"120"});
                        
                        });
                        });
                    </script>
                    
                        <br />
                        <h2 id ="health_text">
                        <img id="health_img" src="images/thealth.png" height="360px" width="420px">
                        Met de T-Health heb je plezier en ook een goede work-out!</h2>
                        <h2 id="playerUitleg">
                        <img id="player_img" src="images/muziekspeler.png" height="360px" width="420px">
                        Met de T-Player app heeft u uw favoriete muziek altijd op uw hand</h2>
                
                        <div id="OS">
                            <h1>Overige features:</h1>
                            <ul>
                                <li>In de T-Store download u duizenden apps voor uw Watch</li>
                                <li>Met Google maps 3D navigeert u gemakkelijk naar uw bestemming   </li>
                                <li>Door het innovatieve Gestures optie, kunt u uw OS besturen door boven de Watch apps aan te openen, verschuiven, sluiten of kunt u navigeren door QuantumOS</li>
                                <li>Om het horloge zit een CyberRing dit is een smalle rand met gekleurde leds, deze leds geven visueel weer hoe het met de gezondheid is. De gezondheid wordt gemeten met de ingebouwde Inn-health sensor. Zo kunt u zelf instellen welke aspecten van uw gezondheid weergegeven moeten worden.</li>
                            </ul>
                         </div>
                    
                    
                                       
             </body>
             <html>
        ';

    return $this->htmlCode;
    }
}