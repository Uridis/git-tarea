<?php


include("libreria/principal.php");

plantilla::aplicar();
?>


<div class="container">
    <h2 class="d-flex justify-content-center">Casos de Robos</h2>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="caso_edit.php?id=0">Agregar casos</a>
    </div>

    <div class="card tard-body">
        <table class="table table-striped table-bordered table-hover table-dark">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Articulo</th>
                    <th>Valor</th>
                    <th>Lugar</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $caso = manejador_caso::listarCasos();
                foreach ($caso as $c) {
                    echo "
                    <tr>
                        <td>{$c -> cedula}</td>
                        <td>{$c -> nombre}</td>
                        <td>{$c -> fecha}</td>
                        <td>{$c -> articulo}</td>
                        <td>{$c -> valor}</td>
                        <td>{$c -> lugar}</td>
                        <td>{$c -> lat}</td>
                        <td>{$c -> lng}</td>

                        <td>
                            <a name='' id='' class= 'btn btn-primary' href='caso_edit.php?id={$c->id}'>Editar</a>
                            <a name='' id='' class= 'btn btn-info' href='caso_ver.php?id={$c->id}'>Ver</a>
                            <a name='' id='' class= 'btn btn-danger' href='' >Eliminar</a>
                        </td>
                    </tr>
                    
                    
                    
                    ";
                }

                ?>

            </tbody>
        </table>
    </div>


</div>