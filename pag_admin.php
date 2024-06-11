<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gestión de Cuentas y Roles</title>
		<link href="../../assets/img/logo.png" rel="icon">
    	<link href="../../assets/img/logo-grande.png" rel="apple-touch-icon">
		<link rel="stylesheet" href="style.css">
		<style>
			body {
				font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
				background-color: #f8f9fa;
				margin: 0;
				padding: 0;
			}
			.container {
				max-width: 960px;
				margin: 0 auto;
				padding: 20px;
			}
			table {
				width: 100%;
				border-collapse: collapse;
				border: 2px solid #007bff;
				background-color: #ffffff;
			}
			table th,
			table td {
				padding: 12px;
				border: 1px solid #007bff;
				text-align: center;
			}
			table th {
				background-color: #007bff;
				color: #ffffff;
				font-weight: bold;
			}
			table tr:nth-child(odd) {
				background-color: #f2f2f2;
			}
			.form-container {
				background: #ffffff;
				max-width: 400px;
				margin: 0 auto;
				padding: 30px;
				border-radius: 10px;
				box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
			}
			.form-title {
				text-align: center;
				margin-bottom: 30px;
				color: #007bff;
			}
			.form-group {
				margin-bottom: 20px;
			}
			.form-group label {
				display: block;
				margin-bottom: 10px;
				font-weight: bold;
				color: #333333;
			}
			.form-group input[type="text"],
			.form-group input[type="password"] {
				width: 100%;
				padding: 12px;
				border: 1px solid #ced4da;
				border-radius: 5px;
			}
			.form-group input[type="submit"] {
				width: 100%;
				padding: 12px;
				background-color: #007bff;
				color: #ffffff;
				border: none;
				border-radius: 5px;
				cursor: pointer;
			}
			.form-group input[type="submit"]:hover {
				background-color: #0056b3;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1 class="title">Bienvenido, Administrador</h1>
				<a href="index.html" class="return-link">Regresar</a>
			</div>
			<h2 class="subtitle" style="text-align: center;">Listado de Usuarios</h2>
			<table>
				<thead>
					<tr>
						<th>Usuario</th>
						<th>Contraseña</th>
						<th>Rol</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include('conexion.php');
						$sql = "SELECT * FROM poject_20_login";
						$resultado = mysqli_query($conn, $sql);
						while($mostrar = mysqli_fetch_array($resultado)) {
					?>
					<tr>
						<td><?php echo $mostrar['usuario'] ?></td>
						<td><?php echo $mostrar['pass'] ?></td>
						<td><?php echo $mostrar['rol'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</body>
</html>