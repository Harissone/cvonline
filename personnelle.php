<?php 
    $barre_recherche = [
        "assets/img/menu.png",
        "Besoin d'un chef de projet ? ",
        "assets/img/search.png",
        "assets/img/thick_vertical.png",
        "assets/img/close.png" 
    ];

    //Profil
    $profil = [
        "assets/img/haris.jpg",
        "Junior Essono",
        "Architecte logiciel / DevOps"
    ];  

    //Birth info
    $birth = [
        "Née le 20 octobre 1986",
        "Originaire du Sud Cameroun",
        "Marié, 02 enfants - Santé RAS",      
    ];
   
    //residence info
    $residence = [
        "Résident à Ndogbong",
        "Douala - Cameroun",
        "Map: 4.053276, 9.765047",
    ];
   
    //numero info
    $contact = [
        "(237) 674 053 983",
        "Mobile, Telegram, Whatsapp",
    ];
   
    //addresse mail
    $mail = [
        "junioressono@gmail.com",
        "Google+, Twitter, Linkedin, Github"
    ];


    //projet-contrats-experience
    $pro_con_exp = [
        "+45 PROJETS",
        "+31 CONTRATS",
        "+12 ANS D'EXP"
    ];

   echo ' <div class="image-background">           
        <!-- Div de la barre de recherche -->
        <div class="container-search container-search-mobile">    
            <div class="menu menu-mobile" id="menu-mobile">
                <img src= '.$barre_recherche[0].'  width="30px" height="30px"/>
            </div>
            <div class="input-search input-search-mobile">
                <input type="text" placeholder='.$barre_recherche[1].'/>
            </div>
            <div class="search-icon search-icon-mobile">
                <img src='.$barre_recherche[2].' width="30px" height="30px"/>
            </div>
            <div class="thick_vertical-icon thick_vertical-icon-mobile">
                <img src='.$barre_recherche[3].' width="30px" height="30px" />
            </div>
            <div class="close-icon close-icon-mobile">
                <img src='.$barre_recherche[4].' width="50px" height="50px"/>
            </div>                       
        </div>
        <!-- Fin Div de la barre de recherche -->

        <!-- Div du profil -->
        <div class="profil profil-mobile">
            
            <div class="profil-picture profil-picture-mobile">
                <img src='.$profil[0].' class="haris-picture" />
            </div>
            <div class="profil-name profil-name-mobile">
                <h1 class="name name-mobile">'.$profil[1].'</h1>
                <p class="jobs jobs-mobile">'.$profil[2].'</p>
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
                <p class="birth birth-mobile">'.$birth[0].'</p>
                <p class="birth birth-mobile">'.$birth[1].'</p>
                <p class="birth birth-mobile">'.$birth[2].'</p>
            </div>            
            <img src="assets/img/birthday.png" class="birthday-icon birthday-icon-mobile" />
        </div>
        <div class="divider divider-mobile"></div>
        <div class="residence residence-mobile">
            <div class="birth birth-mobile">
                <p class="birth birth-mobile">'.$residence[0].'</p>
                <p class="birth birth-mobile">'.$residence[1].'</p>
                <p class="birth birth-mobile">'.$residence[2].'</p>
            </div> 
                <img src="assets/img/location.png" class="location-icon" />
        </div>
        <div class="divider divider-mobile"></div>
        <div class="birth phone-mobile">
            <div class="call call-mobile">
            <p class="birth birth-mobile">'.$contact[0].'</p>
            <p class="birth media-mobile">'.$contact[1].'</p>
            </div>    
                <img src="assets/img/phone.png" class="phone-icon" />
        </div>
        <div class="divider divider-mobile"></div>
        <div class="birth mail-mobile">
            <div class="couriel couriel-mobile">
            <p class="birth birth-mobile">'.$mail[0].'</p>
            <p class="birth birth-mobile">'.$mail[1].'</p>
            </div>
                <img src="assets/img/message.png" class="message-icon" />
        </div>
        
        <div class="navigation-projet">
            <p>'.$pro_con_exp[0].'</p>
            <p>'.$pro_con_exp[1].'</p>
            <p>'.$pro_con_exp[2].'</p>
        </div>
        <div class="slide-rouge"></div>      
    </div>
    <!-- Fin Div des informations personnelles-->

    ';
?>
