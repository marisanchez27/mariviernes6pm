<?php
//pregunta numero 10.

//NOMBRE DE LOS JUGADORES.
$jugador1 = 'Radamel Falcao';
$jugador2 = 'James Rodriguez';
$jugador3 = 'Juan Cuadrado';
$jugador4 = 'Yerry Mina';
$jugador5 = 'David Ospina';
$jugador6 = 'Davinsón Sanchez';
$jugador7 = 'Duvan Zapata';
$jugador8 = 'Wilmar Barrios';
$jugador9 = 'Mateus Uribe';

//AÑO NACIMIENTO DE LOS JUGADORES.
$anoNacimiento1 = 1986;
$anoNacimiento2 = 1991;
$anoNacimiento3 = 1988;
$anoNacimiento4 = 1994;
$anoNacimiento5 = 1988;
$anoNacimiento6 = 1996;
$anoNacimiento7 = 1991;
$anoNacimiento8 = 1993;
$anoNacimiento9 = 1991;

//POSICION.
$posicion1 = 'Delantero';
$posicion2 = 'Medio campista';
$posicion3 = 'Delantero';
$posicion4 = 'Defensor';
$posicion5 = 'Portero';
$posicion6 = 'Defensor';
$posicion7 = 'Delantero';
$posicion8 = 'Medio campista';
$posicion9 = 'Medio campista';

//ESTATURA (METROS m) CON DECIMAL.
$estatura_decimal1 = 1.77;
$estatura_decimal2 = 1.81;
$estatura_decimal3 = 1.78;
$estatura_decimal4 = 1.95;
$estatura_decimal5 = 1.83;
$estatura_decimal6 = 1.87;
$estatura_decimal7 = 1.86;
$estatura_decimal8 = 1.78;
$estatura_decimal9 = 1.80;



//ARREGLO 
$jugadores = array(	
	
	$jugador1 => array(
		'Año Nacimiento' => $anoNacimiento1,
		'Posicion'  => $posicion1,
		'Estatura'  => $estatura_decimal1
	),
	
	$jugador2 => array(
		'Año Nacimiento' => $anoNacimiento2,
		'Posicion'  => $posicion2,
		'Estatura'  => $estatura_decimal2
    ),
    
    $jugador3 => array(
		'Año Nacimiento' => $anoNacimiento3,
		'Posicion'  => $posicion3,
		'Estatura'  => $estatura_decimal3
    ),
    
    $jugador4 => array(
		'Año Nacimiento' => $anoNacimiento4,
		'Posicion'  => $posicion4,
		'Estatura'  => $estatura_decimal4
    ),
    
    $jugador5 => array(
		'Año Nacimiento' => $anoNacimiento5,
		'Posicion'  => $posicion5,
		'Estatura'  => $estatura_decimal5
    ),
    
    $jugador6 => array(
		'Año Nacimiento' => $anoNacimiento6,
		'Posicion'  => $posicion6,
		'Estatura'  => $estatura_decimal6
    ),
    
    $jugador7 => array(
		'Año Nacimiento' => $anoNacimiento7,
		'Posicion'  => $posicion7,
		'Estatura'  => $estatura_decimal7
    ),
    
    $jugador8 => array(
		'Año Nacimiento' => $anoNacimiento8,
		'Posicion'  => $posicion8,
		'Estatura'  => $estatura_decimal8
    ),
    
    $jugador9 => array(
		'Año Nacimiento' => $anoNacimiento9,
		'Posicion'  => $posicion9,
		'Estatura'  => $estatura_decimal9
    )
    
);

foreach($jugadores as $jugador => $datosJugador)
{
	echo "<h1> $jugador </h1>";

    foreach($datosJugador as $datosPersonales => $valor)
	{
		echo "<p> $datosPersonales:$valor </p>";

        if($datosPersonales == "Año Nacimiento")
        {
            $edad =  date("Y") - $valor;
            echo "<p> Edad:$edad </p>";
        }
        
        
	}
}





?>