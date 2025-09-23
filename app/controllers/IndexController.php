<?php
namespace app\controllers;
use mini\controller\Action;
use mini\model\Container;

use app\models\product;

class IndexController extends Action{
    public function index(){
        $product = Container::getModel('product');
        $products = $product->getProducts();
        $this->view->datas = $products;

        $this->render('index', 'layout');
    }
}
?>