<?php

    session_start(); //Inicio

    //Suponer que el usuario se autenticó
    $_SESSION['usuario'] = "Alex Fabian";
    $_SESSION['rol'] = "Estudiante UTPL";

    echo "Sesión iniciada"."<br>";

    echo "<a href='bienvenida.php'>Ir a la página de bienvenida</a>";

?>