<?php


include("libreria/principal.php");

if (isset($_GET['id'])) {
    $tmp = manejador_caso::casosporId($_GET['id']);
    if ($tmp) {
        $caso = $tmp;
    } else if ($_GET['id'] > 0) {
        header("Location: caso.php");
    }
}

plantilla::aplicar();


?>

<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card card-body">
            <h3>Datos de la persona</h3>

            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $caso->cedula ?></td>
                        <td><?= $caso->nombre ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card card-body">
            <h3>Datos de la persona</h3>

            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Articulo</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $caso->fecha ?></td>
                        <td><?= $caso->articulo ?></td>
                        <td><?= $caso->valor ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card card-body">
            <h3>Datos de la persona</h3>

            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Lugar</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $caso->lugar ?></td>
                        <td><?= $caso->lat ?></td>
                        <td><?= $caso->lng ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div class="d-flex justify-content-center">
    <button class="btn btn-warning noPrint" onclick= print()>Imprimir</button>
    </div>
</div>