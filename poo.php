<?php

  class Pessoa{
      //obj pessoa
      private $nome = 'Joana';
      private $idade = '35';
      private $peso = '50Kg';
      //private fica disponível apenas dentro da classe.

      public function crescer(){
          //mudar function para public 
          $this->comer();
          //this quer dizer ESTE OBJETO
          echo 'estou crescendo ';
      }

      private function comer(){
          echo 'estou comendo';
          echo '<br/>';
      }
  }

$pessoa = new Pessoa;
$pessoa2 = new Pessoa;
$pessoa->crescer();

//final class: uma classe qualquer, mas que não pode ser herdada, mas pode ser instanciada.
//para herdar uma classe, usamos extend. Class Pai extends Filha.

?>