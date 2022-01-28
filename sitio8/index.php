<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POO en PHP</h2>
    <?php
    require_once('./clases/clase1.php');
    require_once('./clases/Cliente.php');
    require_once('./clases/Articulos.php');
    require_once('./clases/Padre.php');
    require_once('./clases/Hijo.php');
    //echo phpinfo();
    echo "<h3>Clases y objetos </h3>";
    $objeto=new ClasePropiedades();//instanciar
    echo $objeto->ciudad;

    $cliente1=new Cliente("<p>Indra</p>",5,true);
    echo $cliente1->getNombre();
    //modifica el nombre del cliente
    $cliente1->setNombre("<p>Repsol</p>");
    echo $cliente1->getNombre();


    //$p1=new Productos();
    $articulo=new Articulos(100,"<p>Camisa</p>",5,7.99);
    $articulo->setNombre("Pantalón");
    echo "<p>El nuevo nombre es: ".$articulo->getNombre()."</p>";
    
    echo "<p>El precio total es: ".$articulo->calcularTotal()."</p>";

    $padre2=new Padre("nombre2",16,13);//¿instanciado?
    
    $padre=new Padre("<p>nombre1</p>",10,9.95);
    echo $padre->nombre;
  //  echo $padre->unidades; //no puede acceder a protected
  //  echo $padre->precio; //no puede acceder a private

    $hijo= new Hijo("<p>Sevilla</p>");
    $hijo->saludar("Málaga");
    $hijo->ciudad;
    //hijo 2
    //$hijo2= new Hijo(" Valencia ","hijo2@gmail.com");
    $hijo2->ciudad1;
    $hijo2->saludar2(" Valencia ","hijo2@gmail.com");
    
    ?>
</body>
</html>