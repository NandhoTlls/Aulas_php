<?php
// Moto.php
require_once 'Veiculo.php';

class Moto extends Moto {

    public function __construct($marca, $modelo, $ano,) {
        parent::__construct($marca, $modelo, $ano);
    }

    public function exibirDetalhes() {
        parent::exibirDetalhes();
    }

    public function acelerar() {
        echo "A moto está acelerando de maneira muito rápida! <br>";
    }
}
?>