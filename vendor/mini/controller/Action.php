<?php
namespace mini\controller;

//Essa classe serve para abstrair as funções que permitem o funcionamento da aplicação, deixando a parte do projeto em si para os controllers externos a este.
abstract class Action{
    protected $view; //Atributo utilizado para representar um objeto interno, para que possa acessá-lo dentro das views.

    public function __construct(){
        $this->view = new \stdClass(); //stdClass, para criar objetos vazios que podem ser dinamicamente composta de atributos durante a execução do programa.        
    }

    protected function render($view, $layout){
        $this->view->page = $view;
        if(file_exists("../app/views/".$layout.".phtml")){ //Verifica se o arquivo de layout existe...
            require_once "../app/views/".$layout.".phtml";//..caso sim, ele faz a requisição do layout.
        } else{
            $this->content(); //Em caso contrário, ele retorna apenas o conteúdo dá página, sem o layout requisitado.
        }
    }

    protected function content(){
        //Extraindo o diretório específico do controller de uma view, de forma dinâmica.            
            $actualClass = get_class($this); //Retorna o nome da respectiva class.
            $actualClass = str_replace('app\\controllers\\', '', $actualClass); //Substitui a string informada pelo próximo parâmetro, utilizando a String completa forncedia pelo terceiro parâmetro.
            $actualClass = strtolower(str_replace('Controller', '', $actualClass)); //Faz o mesmo que o acima, mas retornando tudo em lowe_case.
        //---
        require_once '../app/views/'.$actualClass.'/'.$this->view->page.'.phtml'; //Com isto, podemos acessar qualquer view em qualquer diretório.
    }
}
?>