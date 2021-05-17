<?php
require_once "./App/Model/DBConnection.php";
require_once "./App/Model/Post.php";
require_once "./App/Model/PostModel.php";
require_once "./App/Model/User.php";
require_once "./App/Model/UserModel.php";
require_once "./App/Model/Category.php";
require_once "./App/Model/CatagoryModel.php";

class PostController
{
    public $postDB;
    public $categoryModel;
    public $userModel;
    public function __construct()
    {
        $connection = new DBConnection();
        $this->postDB = new PostDB($connection->connect());
        $this->categoryModel = new CategoryModel($connection->connect());
        $this->userModel = new UserModel($connection->connect());
    }

    public function add()
    {
        
       
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $categoryList = $this->categoryModel->getAll();
            $userList = $this->userModel->getAll();
            include 'App/View/admin/pages/post/add.php';
        } else {
            $title = $_POST['title'];
            $teaser = $_POST['teaser'];
            
            if(isset($_FILES['teaser_img']) && $_FILES['teaser_img']["name"]!=null)
            {
                //lấy tên của file:
				$file_name = $_FILES['teaser_img']["name"];
				//lấy đường dẫn tạm lưu nội dung file:
				$file_tmp =$_FILES['teaser_img']['tmp_name'];
				//tạo đường dẫn lưu file trên host:
				$path ="uploads/".$file_name;
				//upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
				move_uploaded_file($file_tmp,$path);
            }
            $teaser_img = $path;

            $content = $_POST['content'];
            $author = $_POST['author'];
            $created = $_POST['created'];
            $category_id = $_POST['category_id'];
            $user_id = $_POST['user_id'];
            $post = new Post($title, $teaser, $teaser_img, $content, $author, $created, $category_id, $user_id);
            $this->postDB->add($post);
            header("location:http://localhost/case/PostController/list");
        }
    }

    public function list()
    {
        $postList = $this->postDB->getAll();
        include 'App/View/admin/pages/post/list.php';
    }

    public function view($id)
    {
       
        $postDetail = $this->postDB->getDetail($id);
        include 'App/View/admin/pages/post/view.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $postEdit = $this->postDB->getById($id);
            include 'App/View/admin/pages/post/edit.php';
        } else {
            $title = $_POST['title'];
            $teaser = $_POST['teaser'];
            if(isset($_FILES['teaser_img']) && $_FILES['teaser_img']["name"]!=null)
            {
                //lấy tên của file:
				$file_name = $_FILES['teaser_img']["name"];;
				//lấy đường dẫn tạm lưu nội dung file:
				$file_tmp =$_FILES['teaser_img']['tmp_name'];
				//tạo đường dẫn lưu file trên host:
				$path ="uploads/".$file_name;
				//upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
				move_uploaded_file($file_tmp,$path);
            }
            $teaser_img = $path;
            $content = $_POST['content'];
            $author = $_POST['author'];
            $created = $_POST['created'];
            $category_id = $_POST['category_id'];
            $user_id = $_POST['user_id'];

            $post = new Post($title, $teaser, $teaser_img , $content, $author, $created, $category_id, $user_id);
            $this->postDB->update($id, $post);
            header("location:http://localhost/case/PostController/list");
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
            $postDelete = $this->postDB->getById($id);
            include 'App/View/admin/pages/post/delete.php';
        } else {
            
            $this->postDB->delete($id);
            header("location:http://localhost/case/PostController/list");
        }
    }
    
    public function search()
    {
     
            $search = $_POST['search'];
        
            $choose = $_POST['choose'];
            $postSearch = $this->postDB->search($choose,$search);
            include 'App/View/admin/pages/post/search.php';
        
    }

}
