<?php
class Hijo extends Padre{

    public $ciudad1="<p>Madrid</p>";

    public function __construct(string $ciudad){
        $this->ciudad=$ciudad;
    }
   // public function __construct(string $ciudad1,string $email){
     //   $this->ciudad1=$ciudad1;
       // $this->email=$email;
   // }
    //public function saludar(string $ciudad,string $email){
    //    echo "<i>Hola, soy la clase hija y saludo a toda </i>".$ciudad." y mi email es ".$email;
    //}
}
