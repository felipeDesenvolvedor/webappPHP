<?php

    class Artigos 
    {
        public $mysql;

        public function __construct($mysql) {
            $this->mysql = $mysql;
        }

        function addArtigos(string $titulo, string $link, string $conteudo) {
            $resultado = $this->mysql->prepare('insert into artigos(titulo, link, conteudo) values(?,?,?)');
            $resultado->bind_param('sss', $titulo, $link, $conteudo);
            $resultado->execute();
        }

       function exibirTodosArtigos():array {

        $retultado = $this->mysql->query('select * from artigos');

        $artigos = $retultado->fetch_all(MYSQLI_ASSOC);
        return  $artigos;
       }
       
       public function exibirArtigoPorID(string $id):array {
        $selecionaArtigo = $this->mysql->prepare("select id, titulo, conteudo from artigos where id = ?");
        $selecionaArtigo->bind_param('s', $id);
        $selecionaArtigo->execute();

        $artigo = $selecionaArtigo->get_result()->fetch_assoc();
        return $artigo;
       }
    }