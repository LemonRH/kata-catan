<?php

class Jugador{

    //str nombre int madera,lana,cereales,arcilla,metal
    //funcion construir carretera,poblado,ciudad,desarrollo (encapsular todo en una misma funcion o crear funcion para cada construccion posible?!!)
    private $nombre;
    private $madera;
    private $lana;
    private $cereales;
    private $arcilla;
    private $metal;

    public function __construct($nombre, $madera = 0, $lana = 0, $cereales = 0, $arcilla = 0, $metal=0) {
        $this->nombre = $nombre;
        $this->madera = $madera;
        $this->lana = $lana;
        $this->cereales = $cereales;
        $this->arcilla = $arcilla;
        $this->metal = $metal;
    }

    public function construir() { //hacer esto con switch case+añadir todas los objetivos de construccion posibles
        echo "Que te gustaria construir? Carretera, Poblado, Ciudad, Carta desarrollo" . PHP_EOL;
        $objetivo = readline();
        $objetivo = strtolower($objetivo);

        if ($objetivo == "poblado" && $this->madera >= 1 && $this->arcilla>=1 && $this->cereales>=1 && $this->lana>=1) {
            echo "Has construido un poblado";
            $this->madera -= 1;
            $this->arcilla -= 1;
            $this->cereales -= 1;
            $this->lana -= 1;


        } else {
            echo "No tienes suficientes materiales para construir un poblado";
        }
    }
    


}

$jugador1 = new Jugador("Juan", 10, 5, 20, 15, 10);
$jugador1->construir();
?>