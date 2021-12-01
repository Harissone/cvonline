<!-- Debut des competences-->
<?php 
    $dev_front_end = [
        "Développement front-end",
        "HTML5, SASS, VueJS, Angular, JavaFX, ..."
    ];
   
    $dev_back_end = [
        "Développement back-end",
        "NodeJS, Drupal 8, Laravel, kotlin, Java EE7"
    ];
   
    $dev_mobile = [
        "Développement mobile",
        "Android Kotlin, IOS Swift, Cordova, Flutter"
    ];
   
    $ui_ux = [
        "UI / UX Design",
        "Photoshop CC, Adobe XD, Material Design"
    ];
   
    $bd_big_data = [
        "Base de données & Big Data",
        "Oracle 11g, PostgreSQL, Hadoop, Talend DI"
    ];
   
    $outil_env = [
        "Outils / Environnements",
        "Visual Paradigm, Git, Docker, K8s, Linux"
    ];
   

   echo ' <div class="skills">             
        <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
        <div class="titre">
            <div class="head-title-skills head-title-mobile"><b>'.$dev_front_end[0].'</b></div>
            <p class="sub-title sub-title-mobile">'.$dev_front_end[1].'</p>
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
            <div class="head-title-skills head-title-mobile"><b>'.$dev_back_end[0].'</b></div>
            <p class="sub-title sub-title-mobile">'.$dev_back_end[1].'</p>
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
            <div class="head-title-skills head-title-mobile"><b>'.$dev_mobile[0].'</b></div>
            <p class="sub-title sub-title-mobile">'.$dev_mobile[1].'</p>
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
            <div class="head-title-skills head-title-mobile"><b>'.$ui_ux[0].'</b></div>
            <p class="sub-title sub-title-mobile">'.$ui_ux[1].'</p>
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
            <div class="head-title-skills head-title-mobile"><b>'.$bd_big_data[0].'</b></div>
            <p class="sub-title sub-title-mobile">'.$bd_big_data[1].'</p>
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
            <div class="head-title-skills head-title-mobile"><b>'.$outil_env[0].'</b></div>
            <p class="sub-title sub-title-mobile">'.$outil_env[1] .'</p>
        <div class="jauges">
            <div class="m1" style="width: 80%;"></div>
            <div class="m2" style="right: 20%;"></div>
        </div>
        </div>  
        <i class="fas fa-star"></i>
    </div> 
    
    ';
?>