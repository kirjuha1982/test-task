<?php

class Db
{

    private $mysqli;

    public $log = [];


    function __construct() {
       $this->mysqli = new \mysqli("localhost", "uname", "pswd", "dbname");
       $result_set = $this->mysqli->query("SELECT 1 FROM value LIMIT 1");
       if($result_set == false){
            $this->createTable();
       }
    }


    function createTable(){
        $this->mysqli->query("CREATE TABLE `test`.`value` ( `id` INT NOT NULL AUTO_INCREMENT , `parent` INT NULL , `name` CHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB");
        $this->log[] = "База создалась";
        $this->insertValTable();

    }

    function insertValTable(){
        for($i = 1; $i < 100; $i++){
            $this->mysqli->query("INSERT INTO `value` (`parent`, `name`) VALUES (NULL , 'parent_0')");
            $parent = $this->mysqli->insert_id;

            $parent_id = $parent;
            $child = mt_rand(0, 5);
            for($z = 0; $z < $child; $z++){
                $this->mysqli->query("INSERT INTO `value` (`parent`, `name`) VALUES ('".$parent."', 'parent_".$parent."')");
                $parent = $this->mysqli->insert_id;
            }
            $this->log[] = $parent_id.": Наследников - ".$child;
        }
    }


    function queryDb($query){
        $array = [];

        $result = $this->mysqli->query($query);
        while (($row = $result->fetch_assoc()) != false) {
            $array[] = $row;
        }

        return $array;
    }

}

/*
 *
 * CREATE TABLE `test`.`value` ( `id` INT NOT NULL AUTO_INCREMENT , `parent` INT NOT NULL , `name` CHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
 *
 */