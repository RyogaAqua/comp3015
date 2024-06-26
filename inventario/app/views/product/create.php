<!-- Para crear nuevos datos sobre la tabla de productos -->
<div class="border border-secondary-300 p-4">
    <h2 class="text-info">Crear Producto</h2>

    <form action="index.php?url=product/save/0" method="post" class="form">

        <div class="form-group mb-3">
            <input type="hidden" name="id" value="0" required>
            <input type="hidden" name="accion" value="create">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="" required>
        </div>

        <div class="form-group mb-3">
            <label>Id del Producto</label>
            <input type="text" name="id" class="form-control" placeholder="id" value="" required>
        </div>
        
        <div class="form-group mb-3">
            <label>Suplidor</label>
            <input type="text" name="suplidor" class="form-control" value="" required>
        </div>

        <div class="form-group mb-3">
            <label>Cantidad</label>
            <input type="text" name="cantidad" class="form-control" placeholder="Cantidad" value="" required>
        </div>

        <div class="form-group mb-3">
            <label>Precio</label>
            <input type="number" name="precio" class="form-control" placeholder="Precio" value="" required>
        </div>

        <div class="form-group">
            <a href="." class="btn btn-secondary">Cancelar</a>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</div>
