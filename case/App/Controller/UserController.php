<?php
require_once "./App/Model/DBConnection.php";
require_once "./App/Model/User.php";
require_once "./App/Model/UserModel.php";

class UserController
{

    public $userModel;
    public function __construct()
    {
        $connection = new DBConnection();
        $this->userModel = new UserModel($connection->connect());
    }

    public function list()
    {
        $userList = $this->userModel->getAll();
        include 'App/View/admin/pages/user/list.php';
    }

    public function add()
    {


        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            include 'App/View/admin/pages/user/add.php';
        } else {

            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $birthday_user = $_POST['birthday_user'];
            $phone_number = $_POST['phone_number'];
            $gmail = $_POST['gmail'];
            $address = $_POST['address'];

            if (isset($_FILES['img']) && $_FILES['img']["name"] != null) {
                //lấy tên của file:
                $file_name = $_FILES['img']["name"];
                //lấy đường dẫn tạm lưu nội dung file:
                $file_tmp = $_FILES['img']['tmp_name'];
                //tạo đường dẫn lưu file trên host:
                $path = "uploads/" . $file_name;
                //upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
                move_uploaded_file($file_tmp, $path);
            }
            $img = $path;
            $permission = $_POST['permission'];
            $password = $_POST['password'];
            $user = new User($username, $fullname, $birthday_user, $phone_number, $gmail, $address, $img, $permission, $password);
            var_dump($user);
            $this->userModel->add($user);
            header("location:http://localhost/case/UserController/list");
        }
    }

    public function view($id)
    {

        $userDetail = $this->userModel->getDetail($id);
        include 'App/View/admin/pages/user/view.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $userEdit = $this->userModel->getById($id);
            include 'App/View/admin/pages/user/edit.php';
        } else {
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $birthday_user = $_POST['birthday_user'];
            $phone_number = $_POST['phone_number'];
            $gmail = $_POST['gmail'];
            $address = $_POST['address'];
            if(isset($_FILES['img']) && $_FILES['img']["name"]!=null)
            {
                //lấy tên của file:
				$file_name = $_FILES['img']["name"];;
				//lấy đường dẫn tạm lưu nội dung file:
				$file_tmp =$_FILES['img']['tmp_name'];
				//tạo đường dẫn lưu file trên host:
				$path ="uploads/".$file_name;
				//upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
				move_uploaded_file($file_tmp,$path);
            }
            $img = $path;
            $permission = $_POST['permission'];
            $password = $_POST['password'];

            $user = new User($username, $fullname, $birthday_user , $phone_number, $gmail, $address, $img, $permission, $password);
            var_dump($user);
            $this->userModel->update($id, $user);
            header("location:http://localhost/case/UserController/list");
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
            $userDelete = $this->userModel->getById($id);
            include 'App/View/admin/pages/user/delete.php';
        } else {
            
            $this->userModel->delete($id);
            header("location:http://localhost/case/UserController/list");
        }
    }
    
    public function search()
    {
     
            $search = $_POST['search'];
            $choose = $_POST['choose'];
            $userSearch = $this->userModel->search($choose,$search);
            include 'App/View/admin/pages/user/search.php';
        
    }
}
