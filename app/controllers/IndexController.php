<?php
namespace app\controllers;
use mini\controller\Action;
use mini\model\Container;

use app\models\product;
use app\models\info;

//Class cujo armazena as funções para com o propósito do sistema, mas herda as funções e atributos da 'Action'.
class IndexController extends Action{
    public function index(){ //Neste, redirecionará para a página 'index', por exemplo.
        $product = Container::getModel('product');
        $products = $product->getProducts();
        $this->view->datas = $products;

        $this->render('index', 'layout'); //Podemos informar qualquer view neste escopo, independente da rota a ser acessada.
    }

    public function aboutUs(){ //Neste, para a paǵina 'aboutUs'.
        $info = Container::getModel('info');
        $informations = $info->getInformations();
        $this->view->datas = $informations;
        
        $this->render('aboutUs', 'layout2');
    }
}
?>