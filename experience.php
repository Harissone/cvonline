<!-- Debut Div experiences personnelles-->
<?php
    $chef_projet_tech = "Chef des projets technologiques";
    $ets_m = "@Ets. M DE M";
    $date_chef_tech = "De juillet 2019 à ce jour";
    $lien_chef_tech = "http://mdem.cm";
    $job_chef_tech = "Chef du projet annuaire-universel.cm de l'ART;";

    $ets_m_debut = new DateTime("2019-07-00");
    $ets_m_chikdev_fin = new DateTime(Date('Y-m-d'));
    $ets_m_exp = $ets_m_chikdev_fin->diff($ets_m_debut)->format("%y");

    $fon_DT = "Fondateur & DT";
    $startup_chikdev = "@Startup ChickDev";
    $date_fon_DT = "De juin 2015 à ce jour";
    $lien_chikdev = "http://chickdev.com";
    $job_chikdev = "Réalisation de plusieurs site web et applications web et mobiles";

    $startup_chikdev_debut = new DateTime("2015-06-00");
    $startup_chikdev_fin = new DateTime(Date('Y-m-d'));
    $startup_chikdev_exp = $startup_chikdev_fin->diff($startup_chikdev_debut)->format("%y");



    $enseignant = "Enseignant";
    $lieu_enseignant = "@Institut Universitaire de la cote";
    $date_enseignant = "De octobre 2011 à ce jour";
    $site_istdi = "http://istdi.net";
    $cour_enseigner = " \"Analyse. UML & MERISE\";\"BD/SQL. ORACLE & MySQL\";\"Dév. IOS &
    Android\";\"BI & Data Talend DI & Hadoop\". 1<sup>ère</sup>, 2<sup>ème</sup> et 4<sup>ème</sup> année";

    $enseignant_debut = new DateTime("2011-10-00");
    $enseignant_fin = new DateTime(Date('Y-m-d'));
    $enseignant_exp = $enseignant_fin->diff($enseignant_debut)->format("%y");


    $dev_chef = "Développeur en chef";
    $Kayroual_group = "@Kayroual group";
    $date_dev_chef = "De Mai 2013 à juin 2015";
    $lien_khayroual = "http://khayroual.com";
    $job_dev_chef = "Réalisation de multiples projets logiciels et web, Infographie, ...";

    $kayroual_debut = new DateTime("2013-05-00");
    $kayroul_fin = new DateTime("2015-06-00");
    $kayroul_exp = $kayroul_fin->diff($kayroual_debut)->format("%y");



    $resp_commer = "Responsable commercial";
    $bao_sarl = "@BAO Sarl";
    $date_resp_commer = "De Décembre 2012 à Juin 2013";
    $lien_bao_sarl = "http://bao-sarl";

    $resp_com_debut = new DateTime("2012-12-00");
    $resp_com_fin = new DateTime("2013-06-00");
    $resp_com_exp = $resp_com_fin->diff($resp_com_debut)->format("%y");

    $exp = $enseignant_exp;


   echo ' <div class="header-experience header-experience-mobile"> 
        <img src="assets/img/company.png" class="company-icon" />               
        <div class="title-experience title-experience-mobile">                                  
            <h1 class="head-title-experience head-title-mobile">Expérience proféssionnelle ('.$exp.' ans d\'expériences)</h1>
            <label class="sub-title sub-title-mobile"><i>Expertise en entreprise</i></label>                   
        </div>
        
        <img src="assets/img/menu_pointiller.png" class="menu_pointiller-icon-experience" />
    </div>
    <div class="scroll">
    <p class="sub-title sub-title-mobile">'.$chef_projet_tech.' - <b>'.$ets_m .'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$date_chef_tech.' - '.$lien_chef_tech.' </p>
    <p class="sub-title sub-title-mobile">'.$job_chef_tech.'</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$fon_DT.' - <b>'.$startup_chikdev.'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$date_fon_DT.' - '.$lien_chikdev.'</p>
    <p class="sub-title sub-title-mobile">'.$job_chikdev.'</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$enseignant.' - <b>'.$lieu_enseignant.'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$date_enseignant.' - '.$site_istdi.'</p>
    <p class="sub-title sub-title-mobile">'.$cour_enseigner.'</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$dev_chef.' - <b>'.$Kayroual_group.'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$date_dev_chef.' - '.$lien_khayroual.'</p>
    <p class="sub-title sub-title-mobile">'.$job_dev_chef.'</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$resp_commer.' - <b>'.$bao_sarl.'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$date_resp_commer .' - '.$lien_bao_sarl.'</p>
    <p class="sub-title sub-title-mobile">Définition des stratégies commerciales, Controles de qualité, Suivi ...</p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$chef_projet_tech.' - <b>'.$ets_m .'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$date_chef_tech.' - '.$lien_chef_tech.' </p>
    <p class="sub-title sub-title-mobile">'.$job_chef_tech.'</p>
    </div>
    <!-- Fin Div experiences personnelles-->

    ';     
 ?>