<?php
    namespace PDO;
    use PDO\Connection;
    use PDOException;
    use Models\Patient;

    class PatientPDO{

        private $tableName = "patients";
        private $connection;

        public function Add($name, $lastname, $phone){
            try{
                $query = "insert into $this->tableName (name, lastname, phone) values (:name, :lastname, :phone);";
                $parameters['name'] = $name;
                $parameters['lastname'] = $lastname;
                $parameters['phone'] = $phone;
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function GetAll(){
            try{
                $patientsArray = array();
                $query = "select * from $this->tableName;";                
                $this->connection = Connection::GetInstance();
                $patientsResults = $this->connection->Execute($query);
                
                foreach($patientsResults as $row){
                    $patient = new Patient($row['patientId'], $row['name'], $row['lastname'], $row['phone']);
                    array_push($patientsArray, $patient);
                }
                return $patientsArray;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Delete($patientId){
            try{
                $query = "delete from $this->tableName where(patientId = :patientId);";
                $parameters['patientId'] = $patientId;
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }
    }
?>