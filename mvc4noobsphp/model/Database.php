<?php

namespace model;

class Database{
    public static function connect(){
    	
        include("config.php");
        return  new \PDO("mysql:host=".$config['host'].";dbname=".$config['database'],$config['user'],$config['pass']);
    }
    public static function insertUser($values){
    	$sql = 'INSERT INTO user (name, password, email, birthdate, sex) VALUES (:name, :pass, :email, :birthDate, :sex)';
		$db = connect();
		$qry = $db->prepare($sql);
		return $qry->execute($values); 
    }
}