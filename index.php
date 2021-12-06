<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - CVONLINE</title>

    <!-- Main CSS du site -->
    <link href="assets/css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Container de tous les composants -->
    <!-- Serveur DNS est une table de mappage qui attribue une adresse ip a un nom de domaine
        Le protocole  -->
    <div class="container container-mobile">     
        <div class="personnel personnel-mobile">
            <?php 
                include("vues/personnelle.php");
                $pers = 
                new Profil("../assets/img/haris.jpg", "Junior Essono", "Architecte logiciel / DevOps", 
                "Née le 20 octobre 1986", "Originaire du Sud Cameroun", "Marié, 02 enfants", "Santé RAS", 
                "Résident à Ndogbong", "Douala - Cameroun", "Map: 4.053276, 9.765047", "(237) 674 053 983", "Mobile, Télégram, Whatsapp",
                "junioressono@gmail.com", "Google+, Twitter, Linkedin, Github", "+45 PROJETS", "+31 CONTRATS", "+12 ANS D'EXP")
                ;
        
                $pers->getHtmlOfProfil();
            ?>
        </div>
        <div class="competence competence-mobile">
            <?php 
                include("vues/competence.php");
            ?>
        </div>

        <div class="right-column">
            <div class="experience experience-mobile">
                <?php 
                    include("vues/experience.php");
                    
                    $expe = [
                        new Experiences("Chef des projets technologiques", "@Ets. M DE M", "juillet 2019", "ce jour", "http://mdem.cm", "Chef du projet annuaire-universel.cm de l'ART;"),
                        new Experiences("Fondateur & DT", "@Startup ChickDev", "juin 2015", "ce jour", "http://chickdev.com", "Réalisation de plusieurs site web et applications web et mobiles"),
                        new Experiences("Enseignant", "@Institut Universitaire de la cote", "octobre 2011", "ce jour", "http://istdi.net", " \"Analyse. UML & MERISE\";\"BD/SQL. ORACLE & MySQL\";\"Dév. IOS &
                        Android\";\"BI & Data Talend DI & Hadoop\". 1<sup>ère</sup>, 2<sup>ème</sup> et 4<sup>ème</sup> année"),
                        new Experiences("Développeur en chef", "@Kayroual group", "Mai 2013", "juin 2015", "http://khayroual.com", "Réalisation de multiples projets logiciels et web, Infographie, ..."),
                        new Experiences("Responsable commercial", "@BAO Sarl", "Décembre 2012", "Juin 2013", "http://bao-sarl", "Réalisation de multiples projets logiciels et web, Infographie, ...")
                    ];
                    
                    foreach ($expe as $key) {
                        $key->getHtmlOfExperiences();
                    }
                    echo ''.$this->getHeadHtmlOfExperiences().'';
                ?>
            </div>

            <div class="dimension">
                <?php
                    include("vues/inter-lang.php");
                    
                ?>
            </div> 

            <div class="cursus-academique cursus-academique-mobile">
                <?php
                    include("vues/cursus.php");
                ?>
            </div>          
        </div>
    </div>
</body>
</html>