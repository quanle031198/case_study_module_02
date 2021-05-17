<?php
require_once "./App/Model/DBConnection.php";
require_once "./App/Model/Category.php";
require_once "./App/Model/CatagoryModel.php";

class CategoryController {
    public $categoryModel;
    public function __construct()
    {
        $connection = new DBConnection();
        $this->categoryModel = new CategoryModel($connection->connect());
        
    }
    
    public function list()
    {
        $CategoryList = $this->categoryModel->getAll();
        include 'App/View/admin/pages/category/list.php';
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'App/View/admin/pages/category/add.php';
        } else {
            $name_category = $_POST['name_category'];
            
            if(isset($_FILES['img_category']) && $_FILES['img_category']["name"]!=null)
            {
                //lấy tên của file:
				$file_name = $_FILES['img_category']["name"];
				//lấy đường dẫn tạm lưu nội dung file:
				$file_tmp =$_FILES['img_category']['tmp_name'];
				//tạo đường dẫn lưu file trên host:
				$path ="uploads/".$file_name;
				//upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
				move_uploaded_file($file_tmp,$path);
            }
            $img_category = $path;

            $category = new Category($name_category, $img_category);
            $this->categoryModel->add($category);
            header("location:http://localhost/case/CategoryController/list");
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $categoryEdit = $this->categoryModel->getById($id);
            include 'App/View/admin/pages/category/edit.php';
        } else {
            $name_category = $_POST['name_category'];
            if(isset($_FILES['img_category']) && $_FILES['img_category']["name"]!=null)
            {
                //lấy tên của file:
				$file_name = $_FILES['img_category']["name"];;
				//lấy đường dẫn tạm lưu nội dung file:
				$file_tmp =$_FILES['img_category']['tmp_name'];
				//tạo đường dẫn lưu file trên host:
				$path ="uploads/".$file_name;
				//upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
				move_uploaded_file($file_tmp,$path);
            }
            $img_category = $path;

            $category = new Category($name_category, $img_category);
            $this->categoryModel->update($id, $category);
            
            header("location:http://localhost/case/CategoryController/list");
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
            $categoryDelete = $this->categoryModel->getById($id);
            include 'App/View/admin/pages/category/delete.php';
        } else {
            
            $this->categoryModel->delete($id);
            header("location:http://localhost/case/CategoryController/list");
        }
    }
}