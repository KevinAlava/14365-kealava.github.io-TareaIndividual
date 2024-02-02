<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>MENU 1</title>
		<style type="text/css">
			#background{position:absolute; width:99%; height:130%;}
			#fixed {position:absolute; top: 0px; left: 0px;}
		</style>
	</head>
	<body>
		<div>
			<img id="background" src="../img/fondo.jpg"/> 
		</div>
		<div id="fixed">
			</br></br></br>
			<div style="padding-left:510px;">
				<img src="../img/selloespe.jpg" alt="ESPE" height="100" >
			</div>
			<div style="padding-left:395px;">
				<h2>
					<p style="text-align: center" style="color:#165014" ;>DEPARTAMENTO DE CIENCIAS DE LA COMPUTACIÓN</p>
					<p style="text-align: center" style="color:#165014" ;>INGENIERÍA EN TECNOLOGIAS</p>
				</h2>
				<h3>
					<p style="text-align: center" style="color:#165014" ;>APLICACIONES DE TECNOLOGIAS WEB - PHP BASICO</p>
				</h3>
			</div>
			<div style="padding-left:90px;">
				<h4><p style="color:#1f1450";>Integrante: Alava Kevin</p></h4>
				<h4><p style="color:#1f1450";>NRC: 14365</p></h4>
				<h4><p style="color:#1f1450";>Fecha: 09/01/2024</p></h4>
			</div>
			<div style="padding-left:250px;">
			  <h3>
				<p style="text-align: center" style="color:#165014" ;>FIBONACY</p>
			  </h3>
			</div>	
				<div style="padding-left:250px;">
                <?php
        // Verifica si se ha enviado el formulario y si el campo 'numero' está presente
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
            $numero = $_POST["numero"];

            // Verifica si el número está en el rango de 1 a 50
            if ($numero >= 1 && $numero <= 50) {
                $resultado = calcularFibonacci($numero);
                echo "<p>Los primeros $numero números de la secuencia de Fibonacci son: $resultado</p>";
            } else {
                echo "<p>Por favor, ingrese un número en el rango de 1 a 50.</p>";
            }
        } else {
            echo "<p>No se ha enviado un número válido.</p>";
        }

        function calcularFibonacci($numero) {
            $fibonacci = [];
            $fibonacci[0] = 0;
            $fibonacci[1] = 1;

            for ($i = 2; $i < $numero; $i++) {
                $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }

            return implode(", ", $fibonacci);
        }
        ?>
        </div>
        <div style="padding-left:250px;">
            <button><a href="../html/menu2.html">Regresar</a></button>
        </div>
    			 		
	</body>
</html>
