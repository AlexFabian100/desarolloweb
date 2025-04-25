<?php
    //Función sin parámetros
    function saludo() {
        echo "<h2>"."Buenas tardes. La fecha de hoy es: ";
        echo date('Y-m-d')."</h2>";
    }
    //Función con envío parámetros
    function saludar($nombre,$apellido){
        echo "<h2>"."Buenas tardes, ".$nombre." ".$apellido."</h2>";
    }
    function multiplicar($a,$b,$c) {
        echo "<h2>"."El resultado es: ".$a*$b*$c."</h2>";
    }
    function areaCirculo($radio){
        echo "El área del círculo es: ".pi()*pow($radio,2);
    } 
    echo "<h1>"."Funciones en PHP"."</h1><br>";
    echo saludo();
    echo saludar("Alex", "Cumbajin");
    echo saludar("Fabian", "Cumbajin");
    echo multiplicar (6,4,8);
    echo multiplicar (5,3,43);
    $r = 6;
    echo areaCirculo($r);
    

?>
