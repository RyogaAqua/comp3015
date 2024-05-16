<!DOCTYPE html>
<!-- La pagina de web que muestra la informacion de la base de datos de inventarios -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    
    <?php
        require_once "public/html_header.php";
    ?>

</head>
<body>
    <div class="container">

        <header>
            <h1>Sistema de Inventarios</h1>
            <nav>
                <ul>
                    <li><a href="./index.php?url=product/index">Ver Productos</a></li>
                    <li><a href="./index.php?url=supplier/index">Ver Suplidores</a></li>
                    <li><a href="./index.php?url=user/index">Ver Usuarios</a></li>
                    <!-- Más enlaces de navegación según sea necesario -->
                </ul>
            </nav>
        </header>
    
        <main>
            <section>
                <div>
                    <?php 
                        if (isset($data)) // if Data exist
                        {
                            if (isset($data['message'])) {
                                echo '<div class="alert alert-warning">';
                                echo $data['message'];
                                echo '</div>';
                            }
                            require_once $data['view'];
                        }
                        else {
                            require 'user/list.php';
                            require 'product/list.php';
                            require 'supplier/list.php';
                        }
                    ?>
                </div>
            </section>
            <section class='mt-5'>
                <h5>Descripcion de la pagina de web</h5>
                <p>Es un inventario que maneja tres tablas cuales son productos, suplidores y usuarios. En el cual puedes crear, actualizar y borrar la informacion 
                    de cada una de las tablas</p>
                <!-- Agrega más contenido relevante aquí -->
            </section>
        </main>
    
        <footer>
            <p>&copy; 2024 Emmanuel A. Arguelles Ocasio</p>
        </footer>

    </div>
</body>
</html>