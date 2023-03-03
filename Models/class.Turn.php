<?php
    namespace Models;
    class Turn{
        private $turnId;
        private $patient;
        private $date;
        private $hour;
        private $description;

        public function __construct($turnId = null, $patient = null, $date = null, $hour = null, $description = null){
            $this->setTurnId($turnId);
            $this->setPatient($patient);
            $this->setDate($date);
            $this->setHour($hour);
            $this->setDescription($description);
        }

        public function setTurnId($turnId){$this->turnId = $turnId;}
        public function setPatient($patient){$this->patient = $patient;}
        public function setDate($date){$this->date = $date;}
        public function setHour($hour){$this->hour = $hour;}
        public function setDescription($description){$this->description = $description;}

        public function getTurnId(){return $this->turnId;}
        public function getPatient(){return $this->patient;}
        public function getDate(){return $this->date;}
        public function getHour(){return $this->hour;}
        public function getDescription(){return $this->description;}
    }
?>