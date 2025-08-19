<?php
namespace app; //Namespace é usado para separar arquivos que estejam em diretórios diferentes. Isto é, podemos criar uma classe com o mesmo nome, se, elas estiverem em namespaces diferentes.

use mini\init\Bootstrap; //Importando a classe Bootstrap.

//Aqui, agora, se encontram apenas os atributos e métodos relacionado as rotas.

//A classe 'Route' está herdando os atributos e métodos da classe Bootstrap.
class Route extends Bootstrap{
    //Configuração das rotas.
        protected function initRoutes(){
            //Definindo as routes e seu respectivo controller.
            $routes['home']=array( //Nome dado ao caminho da rota.
                'route'=>'/', //Direcionando a route para onde quisermos, neste caso, a pasta raiz.
                'controller'=>'indexController', //Definindo quem será o controller.
                'action'=>'index' //Definindo a ação do controller.
            );

            $routes['aboutUs']=array(
                'route'=>'/aboutUs',
                'controller'=>'indexController',
                'action'=>'aboutUs'
            );
            $this->setRoutes($routes); //Atualiza as rotas para a variável privada $routes, criada no início da class.
        }
    //--- 
}
?>