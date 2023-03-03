<?php
    namespace PDO;

    use Models\Turn;
    use PDOException;
    use PDO\Connection;

    class TurnPDO{

        private $connection;
        private $tableName = "turns";

        public function Add(Turn $turn){

            try {
                $query = "insert into $this->tableName (patientId, date,hour, description) values (:patientId, :date, :hour, :description);";
                
                $parameters['patientId'] = $turn->getPatient();
                $parameters['date'] = $turn->getDate();
                $parameters['hour'] = $turn->getHour();
                $parameters['description'] = $turn->getDescription();
                
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);

            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        public function GetAll(){
            try{
                $turnsList = array();
                $query = "select * from $this->tableName;";
                $this->connection = Connection::GetInstance();
                $turnsResults = $this->connection->Execute($query);

                foreach($turnsResults as $row){
                    $turn = new Turn($row['turnId'], $row['patientId'], $row['date'], $row['hour'], $row['description']);
                    array_push($turnsList, $turn);
                }
                return $turnsList;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function GetAllPatientDescription(){
            try{
                $turnsList = array();
                $query = "select 
                            t.turnId,
                            t.patientId,
                            t.date,
                            t.hour,
                            t.description,
                            concat(p.name, ' ', p.lastname) as 'Patient',
                            d.description as 'Description'
                            from turns t 
                            inner join patients p on t.patientId = p.patientId
                            inner join descriptions d on t.description = d.descriptionId;";
                $this->connection = Connection::GetInstance();
                $turnsResults = $this->connection->Execute($query);

                //var_dump($turnsResults);

                foreach($turnsResults as $row){
                    $turn = new Turn($row['turnId'], $row['Patient'], $row['date'], $row['hour'], $row['Description']);
                    array_push($turnsList, $turn);
                }
                return $turnsList;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Delete($turnId){
            try{
                $query = "delete from $this->tableName where (turnId = :turnId);";
                $parameters['turnId'] = $turnId;
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }
    }

?>