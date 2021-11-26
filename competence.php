<!-- Debut des competences-->
<?php 
    $dev_front_end = "Développement front-end";
    $tech_front_end = "HTML5, SASS, VueJS, Angular, JavaFX, ...";


    $dev_back_end = "Développement back-end";
    $tech_back_end = "NodeJS, Drupal 8, Laravel, kotlin, Java EE7";


    $dev_mobile = "Développement mobile";
    $tech_mobile = "Android Kotlin, IOS Swift, Cordova, Flutter";


    $ui_ux = "UI / UX Design";
    $tech_ui_ux = "Photoshop CC, Adobe XD, Material Design";


    $bd_big_data = "Base de données & Big Data";
    $tech_bd_big_data = "Oracle 11g, PostgreSQL, Hadoop, Talend DI";


    $outil_env = "Outils / Environnements";
    $tech_outil_env = "Visual Paradigm, Git, Docker, K8s, Linux";


   echo ' <div class="skills">             
        <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
        <div class="titre">
            <div class="head-title-skills head-title-mobile"><b>'.$dev_front_end.'</b></div>
            <p class="sub-title sub-title-mobile">'.$tech_front_end.'</p>
        <div class="jauges">
            <div class="m1" style="width: 80%;"></div>
            <div class="m2" style="right: 20%;"></div>
        </div>
        </div>
        <i class="fas fa-star"></i>
        
    </div>
    <div class="skills">
        <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
        <div class="titre">
            <div class="head-title-skills head-title-mobile"><b>'.$dev_back_end.'</b></div>
            <p class="sub-title sub-title-mobile">'.$tech_back_end.'</p>
        <div class="jauges">
            <div class="m1" style="width: 62%;"></div>
            <div class="m2" style="right: 35%;"></div>
        </div>
        </div>
        
        <i class="fas fa-star"></i>
        
    </div>
    <div class="skills">    
        <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
        <div class="titre">
            <div class="head-title-skills head-title-mobile"><b>'.$dev_mobile.'</b></div>
            <p class="sub-title sub-title-mobile">'.$tech_mobile.'</p>
        <div class="jauges">
            <div class="m1" style="width: 75%;"></div>
            <div class="m2" style="right: 23%;"></div>
        </div>
        </div>
        
        <i class="fas fa-star"></i>
        
    </div>
    
    <div class="skills">             
        <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
        <div class="titre">
            <div class="head-title-skills head-title-mobile"><b>'.$ui_ux .'</b></div>
            <p class="sub-title sub-title-mobile">'.$tech_ui_ux .'</p>
        <div class="jauges">
            <div class="m1" style="width: 56%;"></div>
            <div class="m2" style="right: 44%;"></div>
        </div>
        </div>
        
        <i class="fas fa-star"></i>
    </div>
    
    <div class="skills">             
        <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
        <div class="titre">
            <div class="head-title-skills head-title-mobile"><b>'.$bd_big_data.'</b></div>
            <p class="sub-title sub-title-mobile">'.$tech_bd_big_data.'</p>
        <div class="jauges">
            <div class="m1" style="width: 88%;"></div>
            <div class="m2" style="right: 12%;"></div>
        </div>
        </div>
        
        <i class="fas fa-star"></i>
    </div>
    
    <div class="skills">                
        <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
        <div class="titre">
            <div class="head-title-skills head-title-mobile"><b>'.$outil_env.'</b></div>
            <p class="sub-title sub-title-mobile">'.$tech_outil_env .'</p>
        <div class="jauges">
            <div class="m1" style="width: 80%;"></div>
            <div class="m2" style="right: 20%;"></div>
        </div>
        </div>  
        <i class="fas fa-star"></i>
    </div> 
    
    ';
?>