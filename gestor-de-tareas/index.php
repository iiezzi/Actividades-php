<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
    $titulo = $_POST["txtAsunto"];
    $prioridad = $_POST["lstPrioridad"];
    $usuario = $_POST["lstUsuario"];
    $estado = $_POST["lstEstado"];
    $descripcion = $_POST["txtDescripcion"];
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de tareas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-3 pt-5 text-center">
                <h1>Gestor de tareas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="py-1">
                        <label for="txtAsunto">Asunto</label>
                        <input type="text" name="txtAsunto" id="txtAsunto" class="form-control">
                    </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-4 py-1">
                <label for="lstPrioridad">Prioridad</label>
                <select name="lstPrioridad" id="lstPrioridad" class="form-control">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="">Alta</option>
                    <option value="">Media</option>
                    <option value="">Baja</option>
                </select>
            </div>
            <div class=" col-4 py-1">
                <label for="lstUsuario">Usuario</label>
                <select name="lstUsuario" id="lstUsuario" class="form-control">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="Aquiles">Aquiles</option>
                    <option value="Hermes">Hermes</option>
                    <option value="Apolo">Apolo</option>
                </select>
            </div>
            <div class=" col-4 py-1">
                <label for="lstPrioridad">Estado</label>
                <select name="lstEstado" id="lstEstado" class="form-control">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="">Asignada</option>
                    <option value="">En proceso</option>
                    <option value="">Realizada</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-1">
                <label for="">Descripcion</label>
                <textarea name="txtDescripcion" id="txtDescripcion" class="form-control" style="resize: none ;"></textarea>
            </div>
            <div class="py-3 text-center">
                <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary">Enviar</button>
            </div>
            </form>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>ID</th>
                        <th>Fecha de inserción</th>
                        <th>Titulo</th>
                        <th>Prioridad</th>
                        <th>Usuario</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>