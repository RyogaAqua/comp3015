<?php
// carga differentes controlados y los manda a home.php para ser mostrado en la pagina de web
include_once 'UserController.php';
include_once 'ProductController.php';
include_once 'SupplierController.php';

class HomeController {
    public function index() {
        $data = array(); // Inicializa un arreglo vacío para almacenar los datos

        $userController = new UserController();
        $data['users'] = $userController->listUsers(); // Almacena los usuarios en $data['users']

        $productController = new ProductController();
        $data['products'] = $productController->listProducts(); // Almacena los productos en $data['products']

        $supplierController = new SupplierController();
        $data['suppliers'] = $supplierController->listSuppliers(); // Almacena los proveedores en $data['suppliers']

        // Incluye la vista y pasa los datos a la misma
        include 'app/views/home.php';
    }
}
?>
