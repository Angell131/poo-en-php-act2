<?php

class Articulos{
    //propiedades
    private int $id;
    private string $nombre;
    private int $unidades;
    private float $precio;
    const IVA=0.21;
    //define("IVA",0.21);
//constructor
    public function __construct(int $id,string $nombre,int $unidades,float $precio){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;

    }
//setter
    public function setId(int $id):void{
        $this->id=$id;
    }
    public function setNombre(string $nombre):void{
        $this->nombre=$nombre;
    }
    public function setUnidades(int $unidades):void{
        $this->unidades=$unidades;
    }
    public function setPrecio(float $precio):void{
        $this->precio=$precio;
    }
//getter

    public function getId():int{
        return $this->id;
    }
    public function getNombre():string{
        return $this->nombre;
    }
    public function getUnidades():int{
        return $this->unidades;
    }
    public function getPrecio():float{
        return $this->precio;
    }
    //resto de metodos
    public function calcularTotal():float{
        $total=$this->unidades*$this->precio*(1+self::IVA);
        return $total;
    }
}
?>