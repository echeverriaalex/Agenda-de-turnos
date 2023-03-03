<?php
    namespace PDO;

use Models\TurnDescription;
use PDOException;

    class TurnDescriptionPDO{

        private $connection;
        private $tableName = "descriptions";

        public function Add($description){
            try {
                $query = "insert into $this->tableName (description) values (:description);";
                $parameters['description'] = $description;
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            } catch (PDOException $ex) {
                throw $ex;
            }
        }
        
        public function GetAll(){
            try {
                $descriptionsArray = array();
                $query = "select * from $this->tableName;";
                $this->connection = Connection::GetInstance();
                $descriptionResults = $this->connection->Execute($query);

                foreach($descriptionResults as $row){
                    $turnDescription = new TurnDescription($row['descriptionId'], $row['description']);
                    array_push($descriptionsArray, $turnDescription);
                }
                return $descriptionsArray;
            } catch (PDOException $ex) {
                throw $ex;
            }
        }

    }
?>