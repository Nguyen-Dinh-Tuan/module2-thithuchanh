<?php
namespace App\controller;
use App\model\Store;
use App\model\StoreModel;

class StoreController
{
    protected $storeModel;
    public function __construct()
    {
        $this->storeModel= new StoreModel();
    }
    public function show(){
        $stores = $this->storeModel->getAll();
        include_once "src/view/list.php";
    }
    public function add(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            include_once "src/view/add.php";
        }
        else{
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $date = $_REQUEST['date'];
            $descirbe = $_REQUEST['descirbe'];
            $store = new Store($name,$type,$price,$amount,$date,$descirbe);
            $this->storeModel->addStore($store);
            header('location:index.php');
        }
    }
    public function edit(){
        if($_SERVER['REQUEST_METHOD']== 'GET'){
            $id = $_REQUEST['id'];
            $students = $this->storeModel->getStoreById($id);
            include_once "src/view/edit.php";
        }
        else{
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $date = $_REQUEST['date'];
            $descirbe = $_REQUEST['descirbe'];
            $newStore = new Store($name,$type,$price,$amount,$date,$descirbe);
            $newStore->setId($id);
            $this->storeModel->editStore($newStore);
            header('location:index.php');
        }
    }
    public function delete(){
        $id = $_REQUEST['id'];
        $this->storeModel->deleteStore($id);
        header('location:index.php');
    }
    public function search(){
        $search = '%'. $_REQUEST['search']. '%';
        $stores = $this->storeModel->search($search);
        include 'src/view/search.php';
    }

}