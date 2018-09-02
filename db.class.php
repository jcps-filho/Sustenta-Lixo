<?php

    class db {

        //host
        private $host = 'localhost';
        //usuario
        private $usuario = 'root';
        //senha
        private $senha = '';
        //banco de dados
        private $database = 'integrador';

        public function conecta_mysql(){

            //cria a conexão
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

            //ajustar o charset da comunicação
            mysqli_set_charset($con, 'utf8');

            //verifica se houve erro de conxão
            if(mysqli_connect_errno()){
                echo 'Erro ao tentar se conectar com o BD MySQL '.mysqli_connect_error();
            }

            return $con;

        }

    }

?>