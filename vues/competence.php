<!-- Debut des competences-->
<?php 

    class Competences
    {
        public function __construct(protected $groupeCompetences, protected $subCompetences, 
        protected $m1, protected $m2){

        }
       
        function getM1(){
            return $this->m1;
        }
        function getM2(){
            return $this->m2;
        }
        function set_groupeCompetence($groupeCompetences){
            $this->groupeCompetences = $groupeCompetences;
        }
        function get_groupeCompetence(){
            return $this->groupeCompetences;
        }

        function set_subCompetence($subCompetences){
            $this->subCompetences = $subCompetences;
        }
        function get_subCompetences(){
            return $this->subCompetences;
        }

        public function addGroupeCompetences(){

        }
        public function updateGroupeCompetences($id){

        }
        public function deleteGroupeCompetences($id){

        }
        public function deleteAllGroupeCompetences(){

        }
        public function getGroupeCompetences($id){

        }
        public function getAllGroupeCompetences(){

        }

        public function addSubCompetences(){

        }
        public function updateSubCompetences($id){

        }
        public function deleteSubCompetences($id){

        }
        public function deleteAllSubCompetences(){

        }
        public function getSubCompetences($id){

        }
        public function getAllSubCompetences(){

        }
        public function getHtmlOfCompetences(){

            echo ' <div class="skills">             
                    <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
                    <div class="titre">
                        <div class="head-title-skills head-title-mobile"><b>'.$this->get_groupeCompetence().'</b></div>
                        <p class="sub-title sub-title-mobile">'.$this->get_subCompetences().'</p>
                    <div class="jauges">
                        <div class="m1" style="width: '.$this->getM1().'%;"></div>
                        <div class="m2" style="right: '.$this->getM2().'%;"></div>
                    </div>
                    </div>
                    <i class="fas fa-star"></i>                 
                    </div>
                    
                    
                ';
        }
    }
    $comp = [
        new Competences("Développement front-end", "HTML5, SASS, VueJS, Angular, JavaFX, ...", 80, 20),
        new Competences("Développement back-end", "NodeJS, Drupal 8, Laravel, kotlin, Java EE7", 62, 35),
        new Competences("Développement mobile", "Android Kotlin, IOS Swift, Cordova, Flutter", 75, 23),
        new Competences("UI / UX Design", "Photoshop CC, Adobe XD, Material Design", 56, 44),
        new Competences("Base de données & Big Data", "Oracle 11g, PostgreSQL, Hadoop, Talend DI",88,12),
        new Competences("Outils / Environnements", "Visual Paradigm, Git, Docker, K8s, Linux", 80, 12),

    ];
    
    foreach($comp as $key){
        $key->getHtmlOfCompetences();
    }
   

   
?>