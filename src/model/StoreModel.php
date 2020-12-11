<?php


namespace App\model;


class StoreModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM hanghoa';
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function addStore($store)
    {
        $sql = 'INSERT INTO hanghoa (`name`,`type`,`price`,`amount`,`date`,`descirbe`) VALUES (:name,:type ,:price,:amount,:date,:descirbe)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $store->getName());
        $stmt->bindParam(':type', $store->getType());
        $stmt->bindParam(':price', $store->getPrice());
        $stmt->bindParam(':amount', $store->getAmount());
        $stmt->bindParam(':date', $store->getDate());
        $stmt->bindParam(':descirbe', $store->getDescirbe());
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getStoreById($id)
    {
        $sql = 'SELECT * FROM hanghoa WHERE id = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function editStore($newStore){
        $sql = 'UPDATE hanghoa SET `name`=:name,type =:type ,price=:price,amount=:amount,date =:date,describe =:describe WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name',$newStore->getName());
        $stmt->bindParam(':type',$newStore->getType());
        $stmt->bindParam(':price',$newStore->getPrice());
        $stmt->bindParam(':amount', $newStore->getAmount());
        $stmt->bindParam(':date',$newStore->getDate());
        $stmt->bindParam(':descirbe',$newStore->getDescirbe());
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function deleteStore($id){
        $sql = 'DELETE FROM hanghoa WHERE id =:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }
    public function search($key){
        $sql ="Select * From hanghoa WHERE name LIKE $key ";
        $stmt= $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}