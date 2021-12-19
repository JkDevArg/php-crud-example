<div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre: </label>
              <input type="text"  class="form-control" name="nombre" id="nombre" placeholder="Nombre del Empleado" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correo: </label>
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo Empleado" required>
            </div>
            <button type="submit" class="btn btn-primary" value="Agregar Empleado">Agregar Empleado</button>
            <a href="?controlador=empleados&accion=inicio" class="btn btn-secondary" value="Cancelar">Cancelar</a>
        </form>
    </div>
</div>