<?php

    class Paginas extends Controller{
        
        public function index(){

            $dados = [
                'tituloPagina' => 'Página Inicial'
            ];
            $this->view('usuarios/login', $dados);
        }


        public function home(){
            $dados = [
                'tituloPagina' => 'Página home'
            ];
            $this->view('paginas/home', $dados);
        }

        public function cadastrarLivro(){
            $dados = [
                'tituloPagina' => 'Cadastrar Livro'
            ];
            $this->view('usuarios/cadrastrarLivro', $dados);
        }

    }

?>