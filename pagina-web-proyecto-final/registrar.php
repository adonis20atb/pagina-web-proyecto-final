<?php 

include("conexion5.php");

if (!$conex) {
	die("<h3 class='bad'>¡Error al conectar con la base de datos!</h3>");
}

if (isset($_POST['register'])) {
	if (!empty($_POST['name']) && !empty($_POST['email'])) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$fechareg = date("Y-m-d");

		$stmt = $conex->prepare("INSERT INTO datos(nombre, email, fecha_reg) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $fechareg);

		if ($stmt->execute()) {
			?> 
			<h3 class="ok">¡Te has inscripto correctamente!</h3>
			<?php
		} else {
			?> 
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
		}

		$stmt->close();
	} else {
		?> 
		<h3 class="bad">¡Por favor complete los campos!</h3>
		<?php
	}
}

$conex->close();

?>