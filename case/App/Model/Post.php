<?php 
class Post {
    public $id;
    public $title;
    public $teaser;
    public $teaser_img;
    public $content;
    public $author;
    public $created;
    public $category_id;
    public $user_id;
    public function __construct($title,$teaser,$teaser_img,$content,$author,$created,$category_id,$user_id)
    {
        $this->title = $title;
        $this->teaser = $teaser;
        $this->teaser_img = $teaser_img;
        $this->content = $content;
        $this->author = $author;
        $this->created = $created;
        $this->category_id = $category_id;
        $this->user_id = $user_id;
    }
}