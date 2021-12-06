<!-- Debut Div cursus academique-->   
<?php

    class Cursus
    {

        public function __construct(public $diplome, public $institutObtention, public $periode, public $specialite){
            
        }
        //bloc Dipet electro
        protected $dipet_electro = [
            "DIPET 2 Electronique",
            "@ENSET de douala",
            "Aout 2016",
            "Gestion d'éclairage d'une maison (Android + Arduino)"
        ];
    
        //bloc de la certification oracle
        protected $oracle_certif = [
            "Oracle Certified Associate",
            "@Kentix Sarl",
            "Mars 2009",
            "Oracle Database 11g Administration"
        ];
        
        //bloc certification SQL oracle
        protected $oracle_sql_certif = [
            "Oracle SQL Certified",
            "Décembre 2008",
            "SQL 2, SQL3, XML"
        ];
    
        //bloc licence pro
        protected $licence_pro = [
            "Licence professionnelle",
            "@Douala Institute of Tech.",
            "Octobre 2008",
            "Télécommunication & Réseaux"
        ];
        
        //bloc DEC-BTS
        protected $dec_bts = [
            "DEC / BTS",
            "@CCNB Dieppe - Canada",
            "Septembre 2007",
            "Programmation Appliqué Pour Internet"
        ];
    
        //Bloc Baccalaureat
        protected $bacc = [
            "Baccalauréat ",
            "@Lycée Technique de Douala Bassa",
            "Juin 2005 ",
            "Electrotechnique, mention BIEN"
        ];


        function set_diplome($diplome){
            $this->diplome = $diplome;
        }
        function get_diplome(){
            return $this->diplome;
        }

        function set_institutObtention($institutObtention){
            $this->institutObtention = $institutObtention;
        }
        function get_institutObtention(){
            return $this->institutObtention;
        }

        function set_periode($periode){
            $this->periode = $periode;
        }
        function get_periode(){
            return $this->periode;
        }

        function set_specialite($specialite){
            $this->specialite = $specialite;
        }
        function get_specialite(){
            return $this->specialite;
        }

        public function addCursus(){

        }
        public function deleteCursus($id){
            
        }
        public function deleteAllCursus(){
            
        }
        public function updateCursus($id){
            
        }
        public function getCursus($id){
            
        }
        public function agetAllCursus(){
            
        }

        public function getHtmlOfCursus(){

            echo '  <div class="header-cursus header-cursus-mobile">
                    <img src="../assets/img/student.png" class="student-icon" />
                    <div class="title-cursus title-cursus-mobile">
                        <h1 class="head-title-cursus head-title-mobile">Cursus academique</h1>
                        <label class="sub-title-cursus sub-title-mobile"><i>Diplome et formation certifiantes</i></label>
                    </div> 
                    <img src="../assets/img/menu_pointiller.png" class="menu_pointiller-icon-cursus" />
                    </div>
                    <div class="scroll">
                        <p class="sub-title sub-title-mobile">'.$this->dipet_electro[0].' - <b>'.$this->dipet_electro[1].'</b></p>
                        <p class="sub-title-blue sub-title-blue-mobile">'.$this->dipet_electro[2].' - <i>'.$this->dipet_electro[3].'</i></p>
                        <div class="divider-black divider-black-mobile"></div>

                        <p class="sub-title sub-title-mobile">'.$this->oracle_certif[0].' - <b>'.$this->oracle_certif[1] .'</b></p>
                        <p class="sub-title-blue sub-title-blue-mobile">'.$this->oracle_certif[2].' - <i>'.$this->oracle_certif[3].'</i></p>
                        <div class="divider-black divider-black-mobile"></div>

                        <p class="sub-title sub-title-mobile">'.$this->oracle_sql_certif[0].' - <b>'.$this->oracle_certif[1] .'</b></p>
                        <p class="sub-title-blue sub-title-blue-mobile">'.$this->oracle_sql_certif[1].' - <i>'.$this->oracle_sql_certif[2].'</i></p>
                        <div class="divider-black divider-black-mobile"></div>

                        <p class="sub-title sub-title-mobile">'.$this->licence_pro[0].' - <b>'.$this->licence_pro[1].'</b></p>
                        <p class="sub-title-blue sub-title-blue-mobile">'.$this->licence_pro[2].'- <i>'.$this->licence_pro[3].'</i></p>
                        <div class="divider-black divider-black-mobile"></div>

                        <p class="sub-title sub-title-mobile">'.$this->dec_bts[0].' - <b>'.$this->dec_bts[1].'</b></p>
                        <p class="sub-title-blue sub-title-blue-mobile">'.$this->dec_bts[2].' - <i>'.$this->dec_bts[3].'</i></p>
                        <div class="divider-black divider-black-mobile"></div>

                        <p class="sub-title sub-title-mobile">'.$this->bacc[0].' - <b>'.$this->bacc[1].'</b></p>
                        <p class="sub-title-blue sub-title-blue-mobile">'.$this->bacc[2].' - <i>'.$this->bacc[3].'</i></p>
                        <div class="divider-black divider-black-mobile"></div>

                        <p class="sub-title sub-title-mobile">'.$this->bacc[0].' - <b>'.$this->bacc[1].'</b></p>
                        <p class="sub-title-blue sub-title-blue-mobile">'.$this->bacc[2].' - <i>'.$this->bacc[3].'</i></p>
                        <div class="divider-black divider-black-mobile"></div>

                        <p class="sub-title sub-title-mobile">'.$this->bacc[0].' - <b>'.$this->bacc[1].'</b></p>
                        <p class="sub-title-blue sub-title-blue-mobile">'.$this->bacc[2].' - <i>'.$this->bacc[3].'</i></p>
                    </div>
                    <!-- Fin Div cursus academique-->

                ';
        }

    }

    $cursusDipet = new Cursus("DIPET 2 Electronique", "@ENSET de douala", "Aout 2016", "Gestion d'éclairage d'une maison (Android + Arduino)");
    $cursusDipet->getHtmlOfCursus();
    
?>