<?php
// maneja la informacion de la tabla de suplidores
include_once 'app/models/SupplierModel.php';
include_once 'app/config/Database.php';

class SupplierController {
    private $supplierModel;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->supplierModel = new SupplierModel($db);
    }

    public function index() {
        $data = $this->listSuppliers();
        include 'app/views/home.php';
    }

    public function create() {
        // Cargar la vista del formulario de creación
        $data['view'] = 'app/views/supplier/create.php';
        include 'app/views/home.php';
    }

    public function read($id) {
        $supplier = $this->supplierModel->read($id);
        if ($supplier) {
            $data['supplier'] = $supplier;
            $data['view'] = 'app/views/supplier/read.php';
            include 'app/views/home.php';
        } else {
            echo 'Error reading the record.';
            // Mostrar un mensaje de error o redirigir
        }
    }

    public function update($id) {
        // Cargar la vista del formulario de actualización
        $data['supplier'] = $this->supplierModel->read($id);
        $data['view'] = 'app/views/supplier/update.php';
        include 'app/views/home.php';
    }

    public function save() {
        $new_data = [
            'id' => $_POST['id'],
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono']
        ];

        if ($_POST['id'] == 0) {
            $result = $this->supplierModel->create($new_data);
        } else {
            $result = $this->supplierModel->update($new_data);
        }

        if ($result) {
            if ($_POST['id'] == 0) {
                // Se pudo añadir con éxito
                $data['message'] = 'Récord añadido con éxito.';
            } else {
                // Se pudo actualizar, mensaje de éxito
                $data['message'] = 'Récord actualizado con éxito.';
            }
        } else {
            // No se pudo actualizar, mensaje de error
            $data['message'] = 'Récord NO pudo ser actualizado.';
        }

        $data['view'] = 'app/views/supplier/list.php';
        $data['suppliers'] = $this->supplierModel->getAll();
        include 'app/views/home.php';
    }

    public function delete($id) {
        // Cargar la vista del formulario de eliminación
        $data['supplier'] = $this->supplierModel->read($id);
        $data['view'] = 'app/views/supplier/delete.php';
        include 'app/views/home.php';
    }

    public function remove($id) {
        $result = $this->supplierModel->delete($id);
        if ($result) {
            // Redirigir o mostrar un mensaje de éxito
        } else {
            // Mostrar un mensaje de error
        }
        $this->index();
    }

    public function listSuppliers() {
        $data['suppliers'] = $this->supplierModel->getAll();
        $data['view'] = 'app/views/supplier/list.php';
        return $data;
    }
}
?>
