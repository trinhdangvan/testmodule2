<?php
namespace App\model;


class rowModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM danhsach';
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function addRow($row)
    {
        $sql = 'INSERT INTO row (`tenhang`,`loaihang`,`gia`,`soluong`,`mota`) VALUES (:tenhang,:loaihang,:gia,:soluong,:mota)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':tenhang', $row->getTenhang());
        $stmt->bindValue(':loaihang', $row->getLoaihang());
        $stmt->bindValue(":gia", $row->getGia());
        $stmt->bindValue(":soluong", $row->getSoluong());
        $stmt->bindValue(":mota", $row->getMota());
        $stmt->execute();
    }

    public function getRowById($id)
    {
        $sql = 'SELECT * FROM row WHERE id = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function editRow($newRow)
    {
        $sql = 'UPDATE row SET `tenhang`=:tenhang,loaihang=:loaihang,gia=:gia,soluong=:soluong,mota=:mota WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':tenhang', $newRow->getTenhang());
        $stmt->bindValue(':loaihang', $newRow->getLoaihang());
        $stmt->bindValue(':gia', $newRow->getGia());
        $stmt->bindValue(':soluong', $newRow->getSoluong());
        $stmt->bindValue(':mota', $newRow->getMota());
        $stmt->bindValue(':id', $newRow->getId());
        $stmt->execute();
    }

    public function deleteRow($id)
    {
        $sql = 'DELETE FROM row WHERE id =:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function search($name)
    {
        $sql = "SELECT * FROM row WHERE name like :name";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}


