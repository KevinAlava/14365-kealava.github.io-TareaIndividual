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
        // Definir la constante simbólica MAX
        define("MAX", 1000000);

        // Mostrar los números que cumplen con la condición
        for ($numero = 1; $numero <= MAX; $numero++) {
            if (cumpleCondicion($numero)) {
                echo "<p>$numero cumple con la condición</p>";
            }
        }

        // Función para verificar si un número cumple con la condición dada
        function cumpleCondicion($numero) {
            $digitos = str_split((string)$numero);
            $sumaCubos = 0;

            foreach ($digitos as $digito) {
                $sumaCubos += pow($digito, 3);
            }

            return $sumaCubos == $numero;
        }
        ?>  

        </div>
        <div style="padding-left:250px;">
            <button><a href="../html/menu2.html">Regresar</a></button>
        </div>
    			 		
	</body>
</html>
