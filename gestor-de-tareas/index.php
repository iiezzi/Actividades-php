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
            <div class="col-12 py-5 text-center">
                <h1>Gestor de tareas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div>
                        <label for="txtAsunto">Asunto</label>
                        <input type="text" name="txtAsunto" id="txtAsunto" class="form-control">
                    </div>
                    <div>
                        <label for="lstPrioridad">Prioridad</label>
                        <select name="lstPrioridad" id="lstPrioridad" class="form-control">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="">Alta</option>
                            <option value="">Media</option>
                            <option value="">Baja</option>
                        </select>
                    </div>
                    <div>
                        <label for="lstUsuario">Usuario</label>
                        <select name="lstUsuario" id="lstUsuario" class="form-control">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Atlas">Atlas</option>
                            <option value="Hermes">Hermes</option>
                            <option value="Apolo">Apolo</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Descripcion</label>
                        <textarea name="txtDescripcion" id="txtDescripcion" class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Asunto</th>
                        <th>Prioridad</th>
                        <th>Usuario</th>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>