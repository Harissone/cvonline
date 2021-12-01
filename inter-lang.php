<!-- Debut Div interet et langue-->
<?php 
    $inter_lang = [
        "assets/img/interet.png",
        "Français",
        "Anglais"
    ];

    echo '<div class="interet">
        <h1 class="head-title-interet head-title-mobile">Point d\'intérets</h1>
        <p class="sub-title-interet sub-title-mobile"><i>Simple passe-temps pour se faire un peu plaisir</i></p>
        <img src='.$inter_lang[0].' class="interet-icon" />
        </div>
        <div class="espace"></div>       
        <div class="langue">
            <h1 class="head-title-langue head-title-mobile">Langues</h1>
            <label class="sub-title-langue sub-title-mobile"><i>Pratiquées en entreprise</i></label><br>           
            <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
            <p class="sub-title-langue sub-title-mobile">'.$inter_lang[1].'</p>
            <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/> 
            <p class="sub-title-langue sub-title-mobile">'.$inter_lang[2] .'</p>
        </div>

    <!-- Fin Div interet et langue-->

    ';
?>