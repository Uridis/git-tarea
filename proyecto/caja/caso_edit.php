<?php


include("libreria/principal.php");

if ($_POST) {
    $caso = new stdClass();
    $caso->cedula = $_POST['id'];
    $caso->cedula = $_POST['cedula'];
    $caso->fecha = $_POST['fecha'];
    $caso->nombre = $_POST['nombre'];
    $caso->articulo = $_POST['articulo'];
    $caso->valor = $_POST['valor'];
    $caso->lugar = $_POST['lugar'];
    $caso->latitud = $_POST['latitutd'];
    $caso->longitud = $_POST['longitud'];
    $casoid = manejador_caso::guardarCaso($caso);

    header("Location: casos.php");
} else if (isset($_GET['id'])) {
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
            <h3>Registrar los robos</h3>
            <form action="" method="POST">
                <input type="text" value=<?= $caso->id ?> name="id">
                <?= asg_input('cedula', 'Cedula', $caso->cedula, ['more'=>'required']) ?>
                <?= asg_input('fecha', 'Fecha', $caso->fecha, ['type' => 'date', 'more'=>'required']) ?>
                <?= asg_input('nombre', 'Nombre', $caso->nombre, ['more'=>'required']) ?>
                <?= asg_input('articulo', 'Articulo', $caso->articulo, ['more'=>'required']) ?>
                <?= asg_input('valor', 'Valor', $caso->valor, ['type' => 'number', 'more'=>'required']) ?>
                <?= asg_input('lugar', 'Lugar', $caso->lugar, ['more'=>'required']) ?>
                <?= asg_input('latitud', 'Latitud', $caso->lat, ['more'=>'required']) ?>
                <?= asg_input('longitud', 'Longitud', $caso->lng, ['more'=>'required']) ?>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a href="casos.php" class="btn btn-danger" onclick="return confirm('Desea Cancelar?')">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>