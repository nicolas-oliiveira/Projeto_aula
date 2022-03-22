<?php

class Pessoa{
    private $nome;
    private $endereço;
    private $bairro;
    private $cep;

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function getNome(){
        return $this -> nome;

    }

    public function setEndereço($endereço){
        $this -> endereço = $endereço;
    }

    public function getEndereço(){
        return $this -> endereço;

    }

    public function setBairro($bairro){
        $this -> bairro = $bairro;
    }

    public function getBairro(){
        return $this -> bairro;

    }

    public function setCep($cep){
        $this -> cep = $cep;
    }

    public function getCep(){
        return $this -> cep;

    }
}

$temp = new pessoa();
$temp->setNome("Nicolas Lopes de Oliveira" . "<br>");

$temp -> setEndereço("rua dos loucos, 444" . "<br>");

$temp -> setBairro("bairro dos cocudos " . "<br>");

$temp -> setCep("00000000000" . "<br>");

echo "+<h2>" . $temp -> getNome();

echo "<h2>" . $temp -> getEndereço();

echo "<h2>" . $temp -> getBairro();

echo "<h2>" . $temp -> getCep();


?>