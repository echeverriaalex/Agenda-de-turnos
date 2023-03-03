<?php
    namespace Controllers;

use PDO\TurnDescriptionPDO;

    class TurnDescriptionController{
        private $turnDescriptionPDO;

        public function __construct(){
            $this->turnDescriptionPDO = new TurnDescriptionPDO();
        }

        public function ShowAddView(){
            require_once(VIEWS_PATH."turnDescription-add.php");
        }

        public function Add($turnDescription){
            $this->turnDescriptionPDO->Add($turnDescription);
            $this->ShowAddView();
        }
    }
?>