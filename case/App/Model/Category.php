<?php 
class Category {
    public $id;
    public $name_category;
    public $img_category;
   
    public function __construct($name_category, $img_category)
    {
        $this->name_category = $name_category;
        $this->img_category = $img_category;
        
    }
}