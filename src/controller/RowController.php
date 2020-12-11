<?php

namespace App\controller;

use App\model\Row;
use App\model\rowModel;


class RowController
{
    protected $rowModel;

    public function __construct()
    {
        $this->rowModel = new rowModel();
    }

    public function show()
    {
        $row = $this->rowModel->getAll();
        include_once "src/view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "src/view/add.php";
        } else {
            $tenhang = $_REQUEST['tenhang'];
            $loaihang = $_REQUEST['loaihang'];
            $gia = $_REQUEST['gia'];
            $soluong = $_REQUEST['soluong'];
            $mota = $_REQUEST['mota'];
            $row = new  Row($tenhang, $loaihang,$gia,$soluong,$mota);
            $this->rowModel->addRow($row);
            header('location:index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $row = $this->rowModel->getRowById($id);
            include_once "src/view/edit.php";
        } else {
            $id = $_REQUEST['id'];
            $tenhang = $_REQUEST['tenhang'];
            $loaihang = $_REQUEST['loaihang'];
            $gia = $_REQUEST['gia'];
            $soluong = $_REQUEST['soluong'];
            $mota = $_REQUEST['mota'];
            $newRow = new Row($tenhang, $loaihang,$gia,$soluong,$mota);
            $newRow->setId($id);
            $this->rowModel->editRow($newRow);
            header('location:index.php');
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->rowModel->deleteRow($id);
        header('location:index.php');
    }

    public function search()
    {
        $name = "%" . $_REQUEST['name'] . "%";
        $row = $this->rowModel->search($name);
        include_once "src/view/list.php";
    }
}