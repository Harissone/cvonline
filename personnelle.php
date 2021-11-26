<?php 
    //Bare de recherche
    $menu = "assets/img/menu.png";
    $input_search_placeholder = "Besoin d'un chef de projet ?";
    $search_icon = "assets/img/search.png";
    $thick_vertical_icon = "assets/img/thick_vertical.png";
    $close_icon = "assets/img/close.png" ;

    //Profil
    $profil_picture = "assets/img/haris.jpg";
    $name = "Junior Essono";
    $jobs = "Architecte logiciel / DevOps";

    //Birth info
    $birth_date = "Née le 20 octobre 1986";
    $birth_origin = "Originaire du Sud Cameroun";
    $birth_matrimonial = "Marié, 02 enfants - Santé RAS";
    $birth_icon = "assets/img/birthday.png";

    //residence info
    $residence_quartier = "Résident à Ndogbong";
    $residence_ville = "Douala - Cameroun";
    $residence_map = "Map: 4.053276, 9.765047";
    $location_icon = "assets/img/location.png";

    //numero info
    $numero = "(237) 674 053 983";
    $reseau_sociaux = "Mobile, Telegram, Whatsapp";
    $phone_icon = "assets/img/phone.png";

    //addresse mail
    $mail = "junioressono@gmail.com";
    $mail_reseau = "Google+, Twitter, Linkedin, Github";
    $message_icon = "assets/img/message.png";

    //projet-contrats-experience
    $projet = "+45 PROJETS";
    $contrat = "+31 CONTRATS";
    $exp = "+12 ANS D'EXP";

   echo ' <div class="image-background">           
        <!-- Div de la barre de recherche -->
        <div class="container-search container-search-mobile">    
            <div class="menu menu-mobile" id="menu-mobile">
                <img src= '.$menu.'  width="30px" height="30px"/>
            </div>
            <div class="input-search input-search-mobile">
                <input type="text" placeholder='.$input_search_placeholder.'/>
            </div>
            <div class="search-icon search-icon-mobile">
                <img src='.$search_icon.' width="30px" height="30px"/>
            </div>
            <div class="thick_vertical-icon thick_vertical-icon-mobile">
                <img src='.$thick_vertical_icon.' width="30px" height="30px" />
            </div>
            <div class="close-icon close-icon-mobile">
                <img src='.$close_icon.' width="50px" height="50px"/>
            </div>                       
        </div>
        <!-- Fin Div de la barre de recherche -->

        <!-- Div du profil -->
        <div class="profil profil-mobile">
            
            <div class="profil-picture profil-picture-mobile">
                <img src='.$profil_picture.' class="haris-picture" />
            </div>
            <div class="profil-name profil-name-mobile">
                <h1 class="name name-mobile">'.$name.'</h1>
                <p class="jobs jobs-mobile">'.$jobs.'</p>
            </div>
        </div> 
        <!-- Fin Container du profil -->               
    </div>

    <!-- Div des informations personnelles-->
    <div class="personal-info personal-info-mobile">
        <!-- Div du boutton Add-->
        <div class="buttom-add buttom-add-mobile">
            <button class="btn">+</button>
        </div>
        <div class="birthday birthday-mobile">
            <div class="birth birth-mobile">
                <p class="birth birth-mobile">'.$birth_date.'</p>
                <p class="birth birth-mobile">'.$birth_origin.'</p>
                <p class="birth birth-mobile">'.$birth_matrimonial.'</p>
            </div>            
            <img src='.$birth_icon.' class="birthday-icon birthday-icon-mobile" />
        </div>
        <div class="divider divider-mobile"></div>
        <div class="residence residence-mobile">
            <div class="birth birth-mobile">
                <p class="birth birth-mobile">'.$residence_quartier.'</p>
                <p class="birth birth-mobile">'.$residence_ville.'</p>
                <p class="birth birth-mobile">'.$residence_map.'</p>
            </div> 
                <img src='.$location_icon.' class="location-icon" />
        </div>
        <div class="divider divider-mobile"></div>
        <div class="birth phone-mobile">
            <div class="call call-mobile">
            <p class="birth birth-mobile">'.$numero.'</p>
            <p class="birth media-mobile">'.$reseau_sociaux.'</p>
            </div>    
                <img src='.$phone_icon.' class="phone-icon" />
        </div>
        <div class="divider divider-mobile"></div>
        <div class="birth mail-mobile">
            <div class="couriel couriel-mobile">
            <p class="birth birth-mobile">'.$mail.'</p>
            <p class="birth birth-mobile">'.$mail_reseau.'</p>
            </div>
                <img src='.$message_icon.' class="message-icon" />
        </div>
        
        <div class="navigation-projet">
            <p>'.$projet.'</p>
            <p>'.$contrat.'</p>
            <p>'.$exp.'</p>
        </div>
        <div class="slide-rouge"></div>      
    </div>
    <!-- Fin Div des informations personnelles-->

    ';
?>
