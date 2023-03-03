<?php
    namespace Controllers;

    use PDO\PatientPDO;
    use PDOException;

    class PatientController{

        private $patientPDO;

        public function __construct(){
            $this->patientPDO = new PatientPDO();
        }

        public function ShowAddView(){
            require_once(VIEWS_PATH. "patient-add.php");
        }

        public function ShowListView($message = null){
            try{
                $patientsList = $this->patientPDO->GetAll();
                require_once(VIEWS_PATH."patient-list.php");
            }
            catch(PDOException $ex){
                $message = "There was a problem listing the patients";
            }
        }
        
        public function Add($name, $lastname, $phone){
            $message = null;
            try{
                $this->patientPDO->Add($name, $lastname, $phone);
                $message = "Patient registred successfully";
            }
            catch(PDOException $ex){
                $message = "There was a problem registering the patient";
            } 
            $this->ShowAddView();
        }

        public function Delete($patientId){
            $message = null;
            try{
                $this->patientPDO->Delete($patientId);
                $message = "Patient delete successfully";
            }
            catch(PDOException $ex){
                $message = "There was a problem deleting a turn";
            }            
            $this->ShowListView($message);   
        }
    }
?>