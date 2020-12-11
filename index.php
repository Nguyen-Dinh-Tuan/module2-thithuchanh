<?php
require __DIR__.'/vendor/autoload.php';
$storeController = new App\controller\StoreController();
$page = (isset($_REQUEST['page']))?$_REQUEST['page']:NULL;
switch ($page) {
    case 'add':
        $storeController->add();
        break;
    case 'edit':
        $storeController->edit();
        break;
    case 'delete':
        $storeController->delete();
        break;
    default:
        $storeController->show();
}
