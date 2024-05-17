<?php
// maneja la informacion de la tabla de usuarios
include_once 'app/models/UserModel.php';
include_once 'app/config/Database.php';

class UserController {
    private $userModel;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->userModel = new UserModel($db);
    }

    public function index() {
        $data = $this->listUsers();
        include 'app/views/home.php';
        exit;
    }

    public function create() {
        $data['view'] = 'app/views/user/create.php';
        include 'app/views/home.php';
        exit;
    }

    public function read($id) {
        $user = $this->userModel->read($id);
        if ($user) {
            $data['user'] = $user;
            $data['view'] = 'app/views/user/read.php';
            include 'app/views/home.php';
        } else {
            echo 'Error reading the record.';
        }
        exit;
    }

    public function update($id) {
        $data['user'] = $this->userModel->read($id);
        $data['view'] = 'app/views/user/update.php';
        include 'app/views/home.php';
        exit;
    }

    public function save() {
        $new_data = [
            'id' => $_POST['id'],
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'clave' => $_POST['clave']
        ];

        if ($_POST['id'] == 0) {
            $result = $this->userModel->create($new_data);
        } else {
            $result = $this->userModel->update($new_data);
        }

        if ($result) {
            $data['message'] = $_POST['id'] == 0 ? 'Récord añadido con éxito.' : 'Récord actualizado con éxito.';
        } else {
            $data['message'] = 'Récord NO pudo ser actualizado.';
        }

        $data['view'] = 'app/views/user/list.php';
        $data['users'] = $this->userModel->getAll();
        include 'app/views/home.php';
        exit;
    }

    public function delete($id) {
        $data['user'] = $this->userModel->read($id);
        $data['view'] = 'app/views/user/delete.php';
        include 'app/views/home.php';
        exit;
    }

    public function remove($id) {
        $result = $this->userModel->delete($id);
        $data['message'] = $result ? 'Usuario eliminado exitosamente' : 'No se pudo eliminar el usuario';
        $this->index();
        exit;
    }

    public function listUsers() {
        $data['users'] = $this->userModel->getAll();
        $data['view'] = 'app/views/user/list.php';
        return $data;
    }
}
?>
