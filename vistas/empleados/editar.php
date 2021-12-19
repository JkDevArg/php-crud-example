<div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">
        <form action="" method="post">
        <div class="mb-3">
              <label for="nombre" class="form-label">ID: </label>
              <input type="text"
                class="form-control" name="id" id="id" value="<?php echo $empleado->id; ?>" readonly required>
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre: </label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" value="<?php echo $empleado->nombre; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correo: </label>
                <input type="email" class="form-control" name="correo" id="correo" value="<?php echo $empleado->correo; ?>" required>
            </div>
            <div class="form-check">
                <label for="" class="form-label">Activo</label>
                <input type="radio" class="form-check-input" name="estado" id="estado" value="1">
            </div>
            <div class="mb-3 form-check">
                <label for="" class="form-label">Inactivo</label>
                <input type="radio" class="form-check-input" name="estado" id="estado" value="0">
            </div>
            <button type="submit" class="btn btn-primary" value="Editar Empleado">Editar Empleado</button>
            <a href="?controlador=empleados&accion=inicio" class="btn btn-secondary" value="Cancelar">Cancelar</a>
        </form> 
    </div>
</div>