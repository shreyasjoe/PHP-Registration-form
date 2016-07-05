<?php

    class shreyas{
        private $dbConnection ;
        public function __construct(PDO $con){
        	try{
             $this->dbConnection = $con;
             
            }catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
        }

        public function saveData($arr){
            if(isset($arr)){
                $name = $arr['name'];
                $email = $arr['email'];
                $phone = $arr['phone'];
                $country = $arr['name'];
                $about = $arr['about'];
                $dob = $arr['dob'];
            }
            
            $statement = $this->dbConnection->prepare("INSERT INTO tekdi_users(name, email, phone, country, about, dob)
            VALUES(:name, :email, :phone, :country, :about, :dob)");
            if($statement->execute(array(
                "name" =>  $name,
                "email" => $email,
                "phone" => $phone,
                "country" => $country,
                "about" => $about,
                "dob" => $dob
            ))){
                return true;
            }else{ return false;}
        }
        
        public function getAllData(){
            $res = $this->dbConnection->prepare("SELECT * FROM tekdi_users");
            $res->execute();

            $result = $res->fetchAll();
            return $result;                                 
        }
    }

$dbConnection = new PDO('mysql:host=localhost;dbname=tekditest', 'root', '');
$obj = new shreyas($dbConnection);
if(count($_POST)>0){
    $insert = $obj->saveData($_POST);
}




