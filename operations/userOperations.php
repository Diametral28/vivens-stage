<?php 
include_once '../functions/mail.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (isset($_GET['operation'])){
		$operation = $_GET['operation'];
		if (!empty($operation)){
			//---- NUEVO CONTACTO ----//
			if ($operation == 'nuevoContacto'){
				if ( isset($_POST['nombre']) 
					&& isset($_POST['correo'])
					&& isset($_POST['asunto'])
					&& isset($_POST['mensaje'])
					&& isset($_POST['telefono'])

					&& !empty($_POST['nombre'])
					&& !empty($_POST['correo'])
					&& !empty($_POST['asunto'])
					&& !empty($_POST['mensaje'])
					&& !empty($_POST['telefono'])
					)
				{
					$_nombre = $_POST['nombre'];
					$_correo = $_POST['correo'];
					$_asunto = $_POST['asunto'];
					$_mensaje = $_POST['mensaje'];
					$_telefono = $_POST['telefono'];

					if(mailContacto($_nombre, $_correo, $_asunto, $_mensaje, $_telefono)){
						echo "mensaje enviado";
					}else{
						//echo '<script language = javascript>alert("Error al agregar valor.");self.location = "../../semaforo2.php"</script>';
					}
				}
				else{	
					echo "Incorrect parameters";
				}
			}
			else{
				echo "Operation not found!";
			}
		}else{
			echo "Parameter should not be empty !";
		}
	}else{
		echo "Invalid Parameters";
	}
}else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	echo "Vivens";
}



 ?>