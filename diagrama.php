<?php

    class Usuario {
        private $telefone;
        private $data_cadastro;
        private $nome;
        private $nivel;

        function cadastrar(){

            $this->data_cadastro = $this->getDataCadastro();
            if(empty($nome) or empty($data_cadastro) or empty($nivel)){
                
            }
        }

        function getTelefone(){

            return $this->telefone;
        }

        function preencherDados($nome,$telefone,$nivel) {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->setNivel($nivel);
        }

        function getDataCadastro(){

            $data_hora = date('d/m/Y H:i');
            return $data_hora;            
        }

        function getNome(){
            return $this->nome;
        }

        function setNivel($nivel){
            $this->nivel = $nivel;
        }

        function getNivel(){
            return $this->nivel;
        }
        
    }    


?>