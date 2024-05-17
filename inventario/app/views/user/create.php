<!-- Para crear nuevos datos en la tabla de usuarios -->
<div class="border border-secondary-300 p-4">
    <h2 class="text-info">Crear Usuario</h2>

    <form action="index.php?url=user/save" method="post" class="form">
        
        <div class="form-group mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Id del usuario</label>
            <input type="text" name="id" class="form-control" placeholder="id" required>
        </div>
            
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Clave</label>
            <input type="password" name="clave" class="form-control" placeholder="Nueva Contraseña" required>            
        </div>
            
        <div class="form-group">
            <a href="index.php?url=user" class="btn btn-secondary">Cancelar</a>
            <button class="btn btn-primary" type="submit">Guardar</button>            
        </div>
    </form>
</div>
