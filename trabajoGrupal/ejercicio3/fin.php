<?php

session_start();

session_destroy();

echo "<h1>Se ha cerrado la sesión</h1>";
echo "<a href='inicio.php'>Regresar a la sesión</a>";