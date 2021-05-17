<?php

class PostDB
{
    public $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    
    public function add($post)
    {   
        $sql = "INSERT INTO posts (title, teaser, teaser_img, content, author, created, category_id, user_id) VALUES (?,?,?,?,?,?,?,?)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $post->title);
        $stm->bindParam(2, $post->teaser);
        $stm->bindParam(3, $post->teaser_img);
        $stm->bindParam(4, $post->content);
        $stm->bindParam(5, $post->author);
        $stm->bindParam(6, $post->created);
        $stm->bindParam(7, $post->category_id);
        $stm->bindParam(8, $post->user_id);
        return $stm->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
     
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getDetail($id)
    {
        $sql = "SELECT posts.id, posts.title, posts.teaser, posts.teaser_img, posts.content, posts.author, posts.created, categories.name_category, users.username FROM posts
        INNER JOIN categories ON posts.category_id = categories.id
        INNER JOIN users ON posts.user_id = users.id
        WHERE posts.id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id, $post)
    {
        $sql = "UPDATE `posts` SET `title` = ?, `teaser` = ?, `teaser_img` = ?, `content` = ?, `author` = ?, `created` = ?, `category_id` = ?, `user_id` = ? WHERE `id` = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $post->title);
        $stm->bindParam(2, $post->teaser);
        $stm->bindParam(3, $post->teaser_img);
        $stm->bindParam(4, $post->content);
        $stm->bindParam(5, $post->author);
        $stm->bindParam(6, $post->created);
        $stm->bindParam(7, $post->category_id);
        $stm->bindParam(8, $post->user_id);
        $stm->bindParam(9, $id);
        return $stm->execute();

    }

    public function delete($id)
    {
        $sql = "DELETE FROM posts WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        return $stm->execute();
    }

    public function search($choose, $search)
    {
        $sql = "SELECT * FROM `posts` WHERE `$choose` LIKE '%$search%'";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}