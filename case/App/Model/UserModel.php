<?php
class UserModel {
    
    public $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function getAll()
    {
        $sql = "SELECT * FROM users ORDER BY id DESC";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
     
    }

    public function add($user)
    {   
        $sql = "INSERT INTO users (username, fullname, birthday_user, phone_number, gmail, address, img, permission, password) VALUES (?,?,?,?,?,?,?,?,?)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $user->username);
        $stm->bindParam(2, $user->fullname);
        $stm->bindParam(3, $user->birthday_user);
        $stm->bindParam(4, $user->phone_number);
        $stm->bindParam(5, $user->gmail);
        $stm->bindParam(6, $user->address);
        $stm->bindParam(7, $user->img);
        $stm->bindParam(8, $user->permission);
        $stm->bindParam(9, $user->password);
        return $stm->execute();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getDetail($id)
    {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id, $user)
    {
        $sql = "UPDATE `users` SET `username` = ?, `fullname` = ?, `birthday_user` = ?, `phone_number` = ?, `gmail` = ?, `address` = ?, `img` = ?, `permission` = ?, `password` = ? WHERE `id` = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $user->username);
        $stm->bindParam(2, $user->fullname);
        $stm->bindParam(3, $user->birthday_user);
        $stm->bindParam(4, $user->phone_number);
        $stm->bindParam(5, $user->gmail);
        $stm->bindParam(6, $user->address);
        $stm->bindParam(7, $user->img);
        $stm->bindParam(8, $user->permission);
        $stm->bindParam(9, $user->password);
        $stm->bindParam(10, $id);
        return $stm->execute();

    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        return $stm->execute();
    }

    public function search($choose, $search)
    {
        $sql = "SELECT * FROM `users` WHERE `$choose` LIKE '%$search%'";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}