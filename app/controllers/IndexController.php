<?php
namespace app\controllers;
//Class cujo armazena as funções que representam as actions deste controller.
class IndexController{
    //Configuração das actions.
        public function index(){ //Neste, redirecionará para a página 'index', por exemplo.
            $this->render('index');
        }

        public function aboutUs(){ //Neste, para a paǵina 'aboutUs'.
            $this->render('aboutUs');
        }

        public function render($view){
            require_once '../app/views/index/'.$view.'.phtml';
        }
    //---
}
?>