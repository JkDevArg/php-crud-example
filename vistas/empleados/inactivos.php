<div class="card">
    <div class="card-header">
        Empleados Inactivos
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($empleados as $empleado){ ?>
                <tr>
                    <td><?php echo $empleado->id; ?></td>
                    <td><?php echo $empleado->nombre; ?></td>
                    <td><?php echo $empleado->correo; ?></td>
                    <td><?php if($empleado->estado == 1){ echo "Activo"; }else{ echo "Inactivo"; }?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="">
                            <a href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id; ?>" class="btn btn-info">Editar</a>
                            <a href="?controlador=empleados&accion=activar&id=<?php echo $empleado->id; ?>" class="btn btn-success">Activar</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a name="aggEmpleado" class="btn btn-primary" href="?controlador=empleados&accion=crear" role="button">Agregar Empleado</a>
    </div>
</div>