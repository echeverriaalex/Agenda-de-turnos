<?php
    namespace Models;

    class TurnDescription{

        private $turnId;
        private $description;

        public function __construct($turnId = null, $description = null){
            $this->setDescription($description);
            $this->setTurnId($turnId);
        }

        public function setTurnId($turnId){$this->turnId = $turnId;}
        public function getTurnId(){return $this->turnId;}

        public function setDescription($description){$this->description = $description;}
        public function getDescription(){return $this->description;}
    }
?>