<?php
    namespace Controllers;

use Models\Turn;
use PDO;
use PDO\PatientPDO;
use PDO\TurnDescriptionPDO;
use PDO\TurnPDO;
use PDOException;

    class TurnController{

        private $turnDescriptionPDO;
        private $patientPDO;
        private $turnPDO;

        public function __construct(){
            $this->patientPDO = new PatientPDO();
            $this->turnDescriptionPDO = new TurnDescriptionPDO();
            $this->turnPDO = new TurnPDO();
        }

        public function ShowAddView(){
            $message = null;
            try{
                $patientsList = $this->patientPDO->GetAll();
                $turnDescriptionList = $this->turnDescriptionPDO->GetAll();
                require_once(VIEWS_PATH."turn-add.php");
            }
            catch(PDOException $ex){
                $message = "There was a problem for registrer a turn";
            }
            require_once(VIEWS_PATH."turn-list.php");           
        }

        public function ShowListView($message = null){
            //$turnList = $this->turnPDO->GetAll();
            $turnList = $this->turnPDO->GetAllPatientDescription();
            require_once(VIEWS_PATH."turn-list.php");
        }

        public function Add($turnDescriptionId, $patientId, $date, $hour){

            $turn = new Turn();
            $turn->setPatient($patientId);
            $turn->setDate($date);
            $turn->setHour($hour);
            $turn->setDescription($turnDescriptionId);

            $message = null;
            try{
                $this->turnPDO->Add($turn);
                $message = "Turn  registered successfully";
            }
            catch(PDOException $ex){
                $message = "There was a problem registering a turn";
            }            
            $this->ShowListView($message);            
        }
        
        public function Delete($turnId){
            $message = null;
            try{
                $this->turnPDO->Delete($turnId);
                $message = "Turn  deleted successfully";
            }
            catch(PDOException $ex){
                $message = "There was a problem registering a turn";
            }            
            $this->ShowListView($message);   
        }
    }
?>