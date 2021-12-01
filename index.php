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