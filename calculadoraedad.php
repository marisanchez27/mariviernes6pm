<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora edad</title>
    <link rel="stylesheet" href="index.css">
    </head>
    <style>
    html
    {
    background-color: #E2A9F3;
    padding-left: 750px;
    }
    </style>
    <body>
        <h1>Calculador de edad</h1>
        
        <form name="inscription" method="post" action="calculadoraedad.php">
            <h3>Nombre : </h3>
            <input type="text" name="nombre" placeholder="Ingrese el nombre"/> <br/>
            <h3>Año de nacimiento: </h3>
            <input type="text" name="fechanacimiento" placeholder="Ingrese el año de nacimiento"/><br/><br>
            <input type="submit" name="valider" value="Calcular"/><br/><br>
        </form>
        <?php
        if(isset($_POST['valider'])){
            $nombre = $_POST['nombre'];
            $fechanacimiento = $_POST['fechanacimiento'];
            function calculaedad($fechanacimiento){
                list($ano,$mes,$dia) = explode("-",$fechanacimiento);
                $ano_diferencia  = date("Y") - $ano;
                $mes_diferencia = date("m") - $mes;
                $dia_diferencia   = date("d") - $dia;
                if ($dia_diferencia < 0 || $mes_diferencia < 0)
                  $ano_diferencia--;
                return $ano_diferencia;
                
              }
                echo  "La edad de ". $nombre. " es de:<b> ".calculaedad ($fechanacimiento)." años. </b>";
            
                
            
        }
        ?>
    </body>
</html>