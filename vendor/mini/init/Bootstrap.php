<?php
//Bootstrap é um termo utilizado para scripts de inicialização.

namespace mini\init;

abstract class Bootstrap{ //Abstract class é um tipo de classe que não se pode instânciar, apenas ser herdada.
    private $routes;

    abstract protected function initRoutes(); //Chamando a função de iniciar as rotas.

    //Método construct.
        public function __construct(){
            $this->initRoutes(); //Receberá os atributos da função 'initRoutes()'.
            $this->run($this->getUrl()); //Executa dinamicamente a função 'run()'.
        }
    //---

    //Getters e Setters de $routes.
        public function getRoutes(){
            return $this->routes;
        }

        public function setRoutes(array $routes){
            $this->routes=$routes;
        }
    //---

    //Função que permite executar a instância(neste caso, irá apenas herdar) dinâmica de um objeto e sua action, dentro do mesmo.
        //Protected, mas pode ser herdado.
        protected function run($url){ //Utiliza a url do cliente como parâmetro.
            foreach($this->getRoutes() as $path=>$route){ //$path: Rota acessada em questão; $route: Array da rotas do 'initRoutes()'.
                if($url==$route['route']){ //'route' refere-se ao indice 'route' do array $route, ao que se compara à $url acessada pelo cliente.
                    $class="app\\controllers\\".ucfirst($route['controller']); //Criando uma classe baseada em um namespace. 'ucfirst()' faz com que toda primeira letra do atributo definido seja UperCase, caso necessário.
                    $controller=new $class; //Instância da classe.
                    $action=$route['action']; //Efetuando a ação da respectiva rota.
                    $controller->$action(); //Controller irá executar a action acima, ela apenas guarda a ação, mas não há executa, com os '()' do lado da action, ela, aí assim, irá executar.
                }
            }
        }
    //---

    //Função para pegar o local exato em que o cliente se encontra.
        protected function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
                //parse_url: Recebe uma url, interpreta ela e retorna seus componentes.
                //PHP_URL_PATH: Constante cujo quando submetida ao 'parse_url', retorna a string relacionada apenas ao path.
                //_SERVER: Retorna todos os detalhes do servidor da aplicação.
        }
    //---
}
?>