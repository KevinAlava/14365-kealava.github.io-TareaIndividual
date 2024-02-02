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
				<p style="text-align: center" style="color:#165014" ;>SERIE MATEMATICA</p>
			  </h3>
			</div>	
				<div style="padding-left:250px;">
                
                <?php
        // Verifica si se ha enviado el formulario y si el campo 'numero' está presente
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
            $numero = $_POST["numero"];

            // Verifica si el número es mayor que cero
            if ($numero > 0) {
                $resultado = calcularSerieMatematica($numero);
                echo "<p>El resultado de la serie matemática es: $resultado</p>";
            } else {
                echo "<p>Por favor, ingrese un número mayor que cero.</p>";
            }
        } else {
            echo "<p>No se ha enviado un número válido.</p>";
        }

        function calcularSerieMatematica($numero) {
            $resultado = 0;

            for ($i = 1; $i <= $numero; $i++) {
                $denominador = $i * ($i + 1);
                $numerador = pow(-1, $i + 1) * pow($i, 2);

                $resultado += $numerador / $denominador;
            }

            return $resultado;
        }
        ?>

        </div>
        <div style="padding-left:250px;">
            <button><a href="../html/menu1.html">Regresar</a></button>
        </div>
    			 		
	</body>
</html>
