<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

if ($_POST) {
    
    if(file_exists("invitados.txt")){
        $aInvitados = explode(",",file_get_contents("invitados.txt"));
    } else {
        $aInvitados = array();
    }

    if (isset($_REQUEST['btnInvitado'])) {
        $nombre = trim($_REQUEST['txtNombre']);
        if (in_array($nombre, $aInvitados)) {

            $aMensaje = array("texto" => "¡Bienvenid@ $nombre disfruta la fiesta!", 
                              "alerta" => "success");
        } else {
            $aMensaje = array("texto" => "Usted no se encuentra en la lista de invitados.", 
                              "alerta" => "danger");
        }
    } else if (isset($_REQUEST['btnVip'])) {
        $respuesta = trim($_REQUEST['txtClave']);
        if ($respuesta == "clave") {
            $aMensaje = array("texto" => "Su clave VIP es " . rand(1000,9999), "alerta" => "success");

        } else {
            $aMensaje = array("texto" => "Usted no tiene pase VIP", "alerta" => "danger");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<main class="container">    
    <div class="row">
        <div class="col-12 py-3 text-center">
            <h1>Lista de invitados</h1>
        </div>
        <?php if(isset($aMensaje)): ?>
        <div class="col-12">
            <div class="alert alert-<?php echo $aMensaje["alerta"]; ?>" role="alert">
                <?php echo $aMensaje["texto"]; ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="col-12">
            <p style="font-size: 20px;">Rellene con sus datos:</p>
        </div>
        <div class="col-12">
            <form method="POST" action="">
                <div class="row">
                    <div class="col-6">
                        <p>Ingrese el DNI:<p><input type="text" name="txtNombre" class="form-control">
                        <input type="submit" name="btnInvitado" value="Verificar invitado" class=" btn-dark my-3">
                    </div>
                    <div class="col-6">
                        <p>Ingresa el código secreto para el pase VIP:<p>
                        <input type="text" name="txtClave" class="form-control">
                        <input type="submit" name="btnVip" value="Verificar código" class="btn-dark my-3">
                    </div>
                </div>                             
            </form>
        </div>
    </div>
	</main>
</body>
</html>