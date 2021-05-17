<?php
class CategoryModel
{
    public $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM categories ORDER BY id DESC";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($category)
    {
        $sql = "INSERT INTO categories (name_category, img_category) VALUES (?,?)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $category->name_category);
        $stm->bindParam(2, $category->img_category);
        return $stm->execute();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM categories WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id, $category)
    {
        $sql = "UPDATE `categories` SET `name_category` = ?, `img_category` = ? WHERE `id` = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $category->name_category);
        $stm->bindParam(2, $category->img_category);
        $stm->bindParam(3, $id);
        return $stm->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM categories WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        return $stm->execute();
    }

}
