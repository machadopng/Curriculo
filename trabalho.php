<?php
class Fulano{
    public $nome;
    public $altura;
    public $endereco;
    public $cidade;
    public $UF;

    //metodos

    function falarOla(){
        echo ("Ola mundo, me chamo " .$this->nome ."\n");
    }

    function falarEndereco(){
        echo("Moro em " .$this->endereco. " ".$this->cidade. " ".$this->UF. "\n");

    }
    function falarAltura(){
        echo("Tenho " .$this->altura. "cm de altura " ."\n");
    }
}
$Fulano1 = new Fulano();
$Fulano1->nome = readline("Qual seu nome?\n");
$Fulano1->altura = readline("Qual sua altura?\n");
$Fulano1->endereco = readline("Qual seu endereco?\n");
$Fulano1->cidade = readline("Qual sua cidade?\n");
$Fulano1->UF = readline("Qual seu estado?\n");
$Fulano1 ->falarOla();
$Fulano1 ->falarAltura();
$Fulano1 ->falarEndereco();