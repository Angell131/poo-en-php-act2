<?php
class Padre{

    public $nombre;
    protected $unidades;
    private $precio;

    public function __construct(string $nombre,int $unidades, float $precio){
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
    }

    public function saludar(string $ciudad){
        echo "<i>Hola, soy la clase padre y saludo a toda </i>".$ciudad;
    }
    public function saludar2(string $ciudad1){
        echo "<i>Hola, soy la clase padre y saludo a toda </i>".$ciudad1." y mi email es ".$email;
    }
}