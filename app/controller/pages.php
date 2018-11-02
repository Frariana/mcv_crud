<?php
  class Pages extends Controller{
    public function __construct(){
      $this->usersModel = $this->model('user');
    }
    public function index(){
      $users = $this->usersModel->getUsers();
      $data = ['users' => $users];
      $this->view('common/header', $data);
      $this->view('pages/home', $data);
      $this->view('common/footer', $data);
    }

    public function add(){
      #agregar
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data = [
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'phone' => trim($_POST['phone'])
        ];
        if($this->usersModel->insertUSer($data)){
          redireccionar('/pages');
        }else{
          die('Algo salió mal');
        }
      }else{
        $data = [
          'name' => '',
          'email' => '',
          'phone' => ''
        ];
        $this->view('pages/add', $data);
      }
    }

    public function edit($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data = [
          'id_user' => $id,
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'phone' => trim($_POST['phone'])
        ];
        if($this->usersModel->updateUser($data)){
          redireccionar('/pages');
        }else{
          die('Algo salió mal');
        }
      }else{
        $user = $this->usersModel->getUserId($id);
        $data = [
          'id_user' => $user->id_user,
          'name' => $user->name,
          'email' => $user->email,
          'phone' => $user->phone
        ];
        $this->view('pages/edit', $data);
      }
    }

    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data = [
          'id_user' => $id,
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'phone' => trim($_POST['phone'])
        ];
        if($this->usersModel->deleteUser($data)){
          redireccionar('/pages');
        }else{
          die('Algo salió mal');
        }
      }else{
        $user = $this->usersModel->getUserId($id);
        $data = [
          'id_user' => $user->id_user,
          'name' => $user->name,
          'email' => $user->email,
          'phone' => $user->phone
        ];
        $this->view('common/header');
        $this->view('pages/delete', $data);
      }
    }

  }
?>