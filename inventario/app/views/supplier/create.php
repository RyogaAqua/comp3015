<!-- Para crear nuevos datos sobre la tabla de productos -->
<div class="border border-secondary-300 p-4">
    <h2 class='text-info'>Crear Suplidor</h2>

    <form action="index.php?url=supplier/save/" method="post" class='form'>
        <div class="form-group mb-3">
            <input type="hidden" name="accion" value="create">
            <label>Nombre</label>
            <input type="text" name="nombre" class='form-control' required>
        </div>

        <div class="form-group mb-3">
            <label>Id del Suplidor</label>
            <input type="text" name="id" class="form-control" placeholder="id" value="" required>
        </div>

        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class='form-control' required>
        </div>

        <div class="form-group mb-3">
            <label>Telefono</label>
            <input type="text" name="telefono" class='form-control' required>
        </div>

        <div class="form-group">
            <button class='btn btn-secondary'>Cancelar</button>
            <button class='btn btn-primary' type="submit">Guardar</button>
        </div>
    </form>
</div>
