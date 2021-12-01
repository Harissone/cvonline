<!-- Debut Div cursus academique-->   
<?php 
    //bloc Dipet electro
    $dipet_electro = [
        "DIPET 2 Electronique",
        "@ENSET de douala",
        "Aout 2016",
        "Gestion d'éclairage d'une maison (Android + Arduino)"
    ];
   
    //bloc de la certification oracle
    $oracle_certif = [
        "Oracle Certified Associate",
        "@Kentix Sarl",
        "Mars 2009",
        "Oracle Database 11g Administration"
    ];
    
    //bloc certification SQL oracle
    $oracle_sql_certif = [
        "Oracle SQL Certified",
        "Décembre 2008",
        "SQL 2, SQL3, XML"
    ];
   
    //bloc licence pro
    $licence_pro = [
        "Licence professionnelle",
        "@Douala Institute of Tech.",
        "Octobre 2008",
        "Télécommunication & Réseaux"
    ];
    
    //bloc DEC-BTS
    $dec_bts = [
        "DEC / BTS",
        "@CCNB Dieppe - Canada",
        "Septembre 2007",
        "Programmation Appliqué Pour Internet"
    ];
   
    //Bloc Baccalaureat
    $bacc = [
        "Baccalauréat ",
        "@Lycée Technique de Douala Bassa",
        "Juin 2005 ",
        "Electrotechnique, mention BIEN"
    ];

  echo '  <div class="header-cursus header-cursus-mobile">
        <img src="assets/img/student.png" class="student-icon" />
        <div class="title-cursus title-cursus-mobile">
            <h1 class="head-title-cursus head-title-mobile">Cursus academique</h1>
            <label class="sub-title-cursus sub-title-mobile"><i>Diplome et formation certifiantes</i></label>
        </div> 
        <img src="assets/img/menu_pointiller.png" class="menu_pointiller-icon-cursus" />
    </div>
    <div class="scroll">
    <p class="sub-title sub-title-mobile">'.$dipet_electro[0].' - <b>'.$dipet_electro[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$dipet_electro[2].' - <i>'.$dipet_electro[3].'</i></p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$oracle_certif[0].' - <b>'.$oracle_certif[1] .'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$oracle_certif[2].' - <i>'.$oracle_certif[3].'</i></p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$oracle_sql_certif[0].' - <b>'.$oracle_certif[1] .'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$oracle_sql_certif[1].' - <i>'.$oracle_sql_certif[2].'</i></p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$licence_pro[0].' - <b>'.$licence_pro[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$licence_pro[2].'- <i>'.$licence_pro[3].'</i></p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$dec_bts[0].' - <b>'.$dec_bts[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$dec_bts[2].' - <i>'.$dec_bts[3].'</i></p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$bacc[0].' - <b>'.$bacc[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$bacc[2].' - <i>'.$bacc[3].'</i></p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$oracle_certif[0].' - <b>'.$oracle_certif[1] .'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$oracle_certif[2].' - <i>'.$oracle_certif[3].'</i></p>
    <div class="divider-black divider-black-mobile"></div>

    <p class="sub-title sub-title-mobile">'.$bacc[0].' - <b>'.$bacc[1].'</b></p>
    <p class="sub-title-blue sub-title-blue-mobile">'.$bacc[2].' - <i>'.$bacc[3].'</i></p>
    </div>
<!-- Fin Div cursus academique-->

    ';

?>