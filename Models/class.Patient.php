<?php
    namespace Models;

    class Patient{

        private $patientId;
        private $name;
        private $lastname;
        private $phone;

        public function __construct($patientId = null,  $name = null, $lastname = null, $phone = null){
            $this->setPatientId($patientId);
            $this->setName($name);
            $this->setLastName($lastname);
            $this->setPhone($phone);
        }

        public function setPatientId($patientId){$this->patientId = $patientId;}
        public function getPatientId(){return $this->patientId;}

        public function setName($name){$this->name = $name;}
        public function getName(){return $this->name;}

        public function setLastName($lastname){$this->lastname = $lastname;}
        public function getLastName(){return $this->lastname;}

        public function setPhone($phone){$this->phone = $phone;}
        public function getPhone(){return $this->phone;}
    }
?>