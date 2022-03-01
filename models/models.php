<?php
include_once 'database.php';

class advert extends database {
    private $db;
    public $title = "";
    public $postal_code = "";
    public $city = "";
    public $type = "";
    public $price = "";
    public $reservation_message = "";

    public function __construct(){
        $db = database::getInstance();
        $this->db = $db->getDbh();
    }

    public function createAdvert(){
        $request = 'INSERT INTO Advert (title, description, postal_code, city, type, price, reservation_message) 
                    VALUES (:title, :description, :postal_code,:city,:type,:price,:reservation_message)';
        $statement = $this->db->prepare($request);
        $statement->bindValue(':title', $this->title, PDO::PARAM_STR);
        $statement->bindValue(':description', $this->description, PDO::PARAM_STR);
        $statement->bindValue(':contenent', $this->postal_code, PDO::PARAM_STR);
        $statement->bindValue(':auteur', $this->city, PDO::PARAM_STR);
        $statement->bindValue(':images', $this->price, PDO::PARAM_STR);
        $statement->bindValue(':createdAt', $this->reservation_message, PDO::PARAM_STR);
        $statement->bindValue(':udaptedAt', $this->udaptedAt, PDO::PARAM_STR);
        return $statement->execute();
    }
}