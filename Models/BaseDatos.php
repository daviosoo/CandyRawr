<?php
    class DataBase{

        public $user="root";
        public $passwordBD="";
        public $serverBD="mysql:host=localhost;";
        public $nameBD="dbname=candyrawr";

        public function __construct(){}

        public function connectwithBD(){

            try{

                $generaldataBD=$this->serverBD.$this->nameBD;
                $connection = new PDO($generaldataBD,$this->user,$this->passwordBD);

                return $connection;

            }catch(PDOException $error){

                die("Tenemos un problema ".$error->getMessage());

            }

        }

        public function insertRecord($consultaSQL){

            try{
                
                $connection=$this->connectwithBD();
                $operation=$connection->prepare($consultaSQL);
                $result=$operation->execute();

                return $result;

            }catch(PDOException $error){

                 die("Tenemos un problema ".$error->getMessage());

            }

        }

        public function searchRecord($consultaSQL){

            try{
               
                $connection=$this->connectwithBD();
                $operation=$connection->prepare($consultaSQL);
                $operation->setFetchMode(PDO::FETCH_ASSOC);

                $operation->execute();

                return $operation->fetchAll();

            }catch(PDOException $error){

                 die("Tenemos un problema ".$error->getMessage());

            }

        }
        
            
        

    }
?>