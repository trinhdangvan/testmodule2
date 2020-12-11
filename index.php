<?php
require_once __DIR__."/vendor/autoload.php";
$rowController = new \App\controller\RowController();
$page = (isset($_REQUEST['page']))?$_REQUEST['page']:NULL;
switch ($page){
    case 'add':
        $rowController->add();
        break;
    case 'delete':
        $rowController->delete();
        break;
    case 'edit':
        $rowController->edit();
        break;
    case 'search':
        $rowController->search();
        break;
    default:
        $rowController->show();
}

