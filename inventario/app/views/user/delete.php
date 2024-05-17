<!-- Para borrar datos en la tabla de usuarios -->
<?php 
    $user = $data['user']; 
?>

<div class="border border-secondary-300 p-4 ">
    <h2 class='text-info'>Borrar Usuario</h2>

    <form action="index.php?url=user/remove/<?php echo htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>" method="post" class='form'>
        <div class="form-group mb-3">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>" required>
            <input type="hidden" name="accion" value="delete">
            <label>Nombre</label>
            <input type="text" name="nombre" class='form-control' value="<?php echo htmlspecialchars($user['nombre'], ENT_QUOTES, 'UTF-8'); ?>" readonly>
        </div>

        <div class="form-group mb-3">
            <label>Id del usuario</label>
            <input type="text" name="id" class='form-control' value="<?php echo htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>" readonly>
        </div>

        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class='form-control' value="<?php echo htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?>" readonly>
        </div>

        <div class="form-group">
            <div class="row alert alert-danger">
                <div class="col-8">
                    <h3>¿Está seguro que desea borrar el récord?</h3>
                </div>
                    
                <div class="col text-end">
                    <a href='index.php?url=user' class='btn btn-secondary'>Cancelar</a>
                    <button class='btn btn-primary' type="submit">Borrar</button>            
                </div>
            </div>
        </div>
    </form>
</div>
