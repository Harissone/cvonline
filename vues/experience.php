<!-- Debut Div experiences personnelles-->
<?php

    class Experiences{

        public function __construct(public $poste, public $instagramEntreprise, public $periodeDebut, public $periodeFin, public $lienEntreprise, public $accomplissement){
            
        }

        protected $chef_projet_tech = [
            "Chef des projets technologiques",
            "@Ets. M DE M",
            "De juillet 2019 à ce jour",
            "http://mdem.cm",
            "Chef du projet annuaire-universel.cm de l'ART;"
        ];
       
      
        protected $fon_DT = [
            "Fondateur & DT",
            "@Startup ChickDev",
            "De juin 2015 à ce jour",
            "http://chickdev.com",
            "Réalisation de plusieurs site web et applications web et mobiles"
        ];
    
      
        protected $enseignant = [
            "Enseignant",
            "@Institut Universitaire de la cote",
            "De octobre 2011 à ce jour",
            "http://istdi.net",
            " \"Analyse. UML & MERISE\";\"BD/SQL. ORACLE & MySQL\";\"Dév. IOS &
            Android\";\"BI & Data Talend DI & Hadoop\". 1<sup>ère</sup>, 2<sup>ème</sup> et 4<sup>ème</sup> année"
    
        ];

        protected $dev_chef = [
            "Développeur en chef",
            "@Kayroual group",
            "De Mai 2013 à juin 2015",
            "http://khayroual.com",
            "Réalisation de multiples projets logiciels et web, Infographie, ..."
        ];
    
       
        protected $resp_commer = [
            "Responsable commercial",
            "@BAO Sarl",
            "De Décembre 2012 à Juin 2013",
            "http://bao-sarl"
        ];

        function set_poste($poste){
            $this->poste = $poste;
        }
        function get_poste(){
            return $this->poste ;
        }

        function set_instagramEntreprise($instagramEntreprise){
            $this->instagramEntreprise = $instagramEntreprise;
        }
        function get_instagramEntreprise(){
            return $this->instagramEntreprise;
        }

        function set_periode($periode){
            $this->periode = $periode;
        }
        function get_periode(){
            return $this->periode ;
        }

        function set_lienEntreprise($lienEntreprise){
            $this->lienEntreprise = $lienEntreprise;
        }
        function get_lienEntreprise(){
            return $this->lienEntreprise;
        }

        function set_accomplissement($accomplissement){
            $this->accomplissement = $accomplissement;
        }
        function get_accomplissement(){
            return $this->accomplissement ;
        }

        public function addExperiences(){

        }
        public function deleteExperiences($id){
            
        }
        public function deleteAllExperiences(){
            
        }
        public function updateExperiences($id){
            
        }
        public function getExperiences($id){
            
        }
        public function getAllExperiences(){
            
        }

        public function nbreAnneeExperience(){
            $enseignant_debut = new DateTime("2011-10-00");
            $enseignant_fin = new DateTime(Date('Y-m-d'));
            $enseignant_exp = $enseignant_fin->diff($enseignant_debut)->format("%y");
            $exp = $enseignant_exp;
            return $exp;
        }
        public function getHeadHtmlOfExperiences(){
            echo '<div class="header-experience header-experience-mobile"> 
                    <img src="../assets/img/company.png" class="company-icon" />               
                    <div class="title-experience title-experience-mobile">                                  
                        <h1 class="head-title-experience head-title-mobile">Expérience proféssionnelle ('.$this->nbreAnneeExperience().' ans d\'expériences)</h1>
                        <label class="sub-title sub-title-mobile"><i>Expertise en entreprise</i></label>                   
                    </div>';
        }
        public function getHtmlOfExperiences(){
            
            echo ' 
                    
                    <img src="../assets/img/menu_pointiller.png" class="menu_pointiller-icon-experience" />
                    </div>
                    <div class="scroll">
                    <p class="sub-title sub-title-mobile">'.$this->poste.' - <b>'.$this->instagramEntreprise.'</b></p>
                    <p class="sub-title-blue sub-title-blue-mobile"> De'.$this->periodeDebut.' à - '.$this->periodeFin.' </p>
                    <p class="sub-title sub-title-mobile">'.$this->lienEntreprise.'</p>
                    <div class="divider-black divider-black-mobile"></div>
               
                    </div>
                    <!-- Fin Div experiences personnelles-->

                ';     
        }
    }
    
    
   
 ?>