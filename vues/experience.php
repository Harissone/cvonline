<!-- Debut Div experiences personnelles-->
<?php
    $chef_projet_tech = [
        "Chef des projets technologiques",
        "@Ets. M DE M",
        "De juillet 2019 à ce jour",
        "http://mdem.cm",
        "Chef du projet annuaire-universel.cm de l'ART;"
    ];
   
  
    $fon_DT = [
        "Fondateur & DT",
        "@Startup ChickDev",
        "De juin 2015 à ce jour",
        "http://chickdev.com",
        "Réalisation de plusieurs site web et applications web et mobiles"
    ];

  
    $enseignant = [
        "Enseignant",
        "@Institut Universitaire de la cote",
        "De octobre 2011 à ce jour",
        "http://istdi.net",
        " \"Analyse. UML & MERISE\";\"BD/SQL. ORACLE & MySQL\";\"Dév. IOS &
        Android\";\"BI & Data Talend DI & Hadoop\". 1<sup>ère</sup>, 2<sup>ème</sup> et 4<sup>ème</sup> année"

    ];

    $enseignant_debut = new DateTime("2011-10-00");
    $enseignant_fin = new DateTime(Date('Y-m-d'));
    $enseignant_exp = $enseignant_fin->diff($enseignant_debut)->format("%y");

    $dev_chef = [
        "Développeur en chef",
        "@Kayroual group",
        "De Mai 2013 à juin 2015",
        "http://khayroual.com",
        "Réalisation de multiples projets logiciels et web, Infographie, ..."
    ];

   
    $resp_commer = [
        "Responsable commercial",
        "@BAO Sarl",
        "De Décembre 2012 à Juin 2013",
        "http://bao-sarl"
    ];

   
    $exp = $enseignant_exp;


   echo ' <div class="header-experience header-experience-mobile"> 
        <img src="../assets/img/company.png" class="company-icon" />               
        <div class="title-experience title-experience-mobile">                                  
            <h1 class="head-title-experience head-title-mobile">Expérience proféssionnelle ('.$exp.' ans d\'expériences)</h1>
            <label class="sub-title sub-title-mobile"><i>Expertise en entreprise</i></label>                   
        </div>
        
        <img src="../assets/img/menu_pointiller.png" class="menu_pointiller-icon-experience" />
    </div>
    <div class="scroll">
    <p class="sub-title sub-title-mobile">'.$chef_projet_tech[0].' - <b>'.$chef_projet_tech[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$chef_projet_tech[2].' - '.$chef_projet_tech[3].' </p>
    <p class="sub-title sub-title-mobile">'.$chef_projet_tech[4].'</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$fon_DT[0].' - <b>'.$fon_DT[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$fon_DT[2].' - '.$fon_DT[3].'</p>
    <p class="sub-title sub-title-mobile">'.$fon_DT[4].'</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$enseignant[0].' - <b>'.$enseignant[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$enseignant[2].' - '.$enseignant[3].'</p>
    <p class="sub-title sub-title-mobile">'.$enseignant[4].'</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$dev_chef[0].' - <b>'.$dev_chef[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$dev_chef[2].' - '.$dev_chef[3].'</p>
    <p class="sub-title sub-title-mobile">'.$dev_chef[4].'</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$resp_commer[0].' - <b>'.$resp_commer[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$resp_commer[2].' - '.$resp_commer[3].'</p>
    <p class="sub-title sub-title-mobile">Définition des stratégies commerciales, Controles de qualité, Suivi ...</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$chef_projet_tech[0].' - <b>'.$chef_projet_tech[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$chef_projet_tech[2].' - '.$chef_projet_tech[3].' </p>
    <p class="sub-title sub-title-mobile">'.$chef_projet_tech[4].'</p>
    </div>
    <!-- Fin Div experiences personnelles-->

    ';     
 ?>