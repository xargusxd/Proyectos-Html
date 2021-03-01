<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"  href="css/Nav.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<title>Servicios</title>
	</head>
	<body style=  "font-family: 'Roboto', sans-serif; padding:20px ;background: linear-gradient(#51D1F6,#00AAE4,#51D1F6")>
		<?php
		include "Clases/Navegador.php";
		?>
		<div><img src="img/Icono.svg"  width="10.6%" height="auto" style="float: left;"></div>
		<div>
			<br>
			<h1>Servicios</h1><br>
		</div>
		<div align="center">
			<img src="img/unnamed.png" width="50%" height="auto">
		</div>
		<div>
			<table  align="center" style="width:"100%" border="1">
				<tr>
					<td   colspan="2" style="font-weight: bold;">Sevicio</td>
					<td  style="font-weight: bold;">Basico</td>
					<td  style="font-weight: bold;">Intermedio</td>
					<td  style="font-weight: bold;">Avanzado</td>
					<td  style="font-weight: bold;">Empresarial</td>
				</tr>
				<tr>
					<td colspan="2" >Limpieza física del computador</td>
					<td align="center">O</td>
					<td align="center">O</td>
					<td align="center">O</td>
					<td align="center">O</td>
				</tr>
				<tr>
					<td colspan="2" >Limpieza física del computador</td>
					<td align="center">O</td>
					<td align="center">O</td>
					<td align="center">O</td>
					<td align="center">O</td>
				</tr>
				<tr>
					<td colspan="2" >Cambio de pieza (costo de piezas asumida por el cliente)</td>
					<td align="center">O</td>
					<td align="center">O</td>
					<td align="center">O</td>
					<td align="center">O</td>
				</tr>
				<tr>
					<td colspan="2" >Respaldo de información en la nube</td>
					<td align="center">X</td>
					<td align="center">X</td>
					<td align="center">O</td>
					<td align="center">O</td>
				</tr>
				<tr>
					<td colspan="2" >Formateo con BackUp y restauración de datos</td>
					<td align="center">X</td>
					<td align="center">X</td>
					<td align="center">O</td>
					<td align="center">O</td>
				</tr>
				<tr>
					<td colspan="2" >Restauración de datos</td>
					<td align="center">X</td>
					<td align="center">O</td>
					<td align="center">O</td>
					<td align="center">O</td>
				</tr>
				<tr>
					<td colspan="2" >Ultima versión del sistema operativo</td>
					<td align="center">X</td>
					<td align="center">X</td>
					<td align="center">O</td>
					<td align="center">O</td>
				</tr>
				<tr>
					<td colspan="2" >Instalación de software que tenía antes del formateo</td>
					<td align="center">X</td>
					<td align="center">X</td>
					<td align="center">O</td>
					<td align="center">O</td>
					
				</tr>
				<tr>
					<td  style="font-weight: bold;"colspan="2">Precios</td>
					<td align="center">300 cordobas</td>
					<td align="center">700 cordobas</td>
					<td align="center">1500 cordobas</td>
					<td align="center">1000 cordobas por maquina</td>
				</tr>
			</table>
		</div>
		<div>
			<?php
				include "Clases/footer.php";
			?>
		</div>
	</body>
</html>