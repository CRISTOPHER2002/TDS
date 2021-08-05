<html>
    <head>
        <title>Formulario para presentar una tabla</title>
    </head>
    <body>
        <div>
            <h1>Tabla con categorías de diferentes videojuegos</h1>
            <form name="Envio" action="" method="POST">

                <?php
                
                
//                    Variable     Llave 1       0      1       2
                $a['Videojuegos']['Acción'] = ['GTA', 'COD', 'PUGB'];
                //                 Llave 2           0          1              2
                $a['Videojuegos']['Aventura'] = ['ASSASINS', 'CRASH', 'Prince of Persia'];
                //                 Llave 3          0          1           2
                $a['Videojuegos']['Deporte'] = ['FIFA 19', 'PES 19', 'MOTO GP 19'];

                $Keys = array_keys($a['Videojuegos']);

                $Table = '<table border="1">';
                $Table .= '<tr>';
                foreach ($Keys as $Valores) {
                    $Table .= '<th>' . $Valores . '</th>';
                }
                $Table .= '</tr>';
                
                include './include/parte1.php';
                include './include/parte2.php';
                include './include/parte3.php';

                $Table .= '</table>';

                echo $Table;
                ?>

            </form>
        </div>
    </body>
</html>