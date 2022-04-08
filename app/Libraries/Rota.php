<?php


class Rota {

    private $controlador = 'Paginas';
    private $metodo = 'index';
    private $parametros = [];

    public function __construct() {
        $url = $this->url();
        //var_dump($url);
        //exit;
        if (isset($url[0])) {
            if (file_exists('../app/Controllers/' . ucfirst($url[0]) . '.php')) {
                $this->controlador = ucfirst($url[0]);
                unset($url[0]);
            }
        }
        require_once '../app/Controllers/' . $this->controlador . '.php';
        $this->controlador = new $this->controlador;

        if (isset($url[1])) {
            if (method_exists($this->controlador, $url[1])) {
                $this->metodo = $url[1];
                unset($url[1]);
            }
        }

        $this->parametros = $url ? array_values($url) : [];

        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
    }

    public function url() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
        } else {
            $url = '';
        }
        return explode('/', $url);
    }



}

?>