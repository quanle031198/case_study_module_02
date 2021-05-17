<?php
class User
{
    public $id;
    public $username;
    public $fullname;
    public $birthday_user;
    public $phone_number;
    public $gmail;
    public $address;
    public $img;
    public $permission;
    public $password;
    public function __construct($username, $fullname, $birthday_user, $phone_number, $gmail,$address, $img, $permission, $password)
    {
        $this->username = $username;
        $this->fullname = $fullname;
        $this->birthday_user = $birthday_user;
        $this->phone_number = $phone_number;
        $this->gmail = $gmail;
        $this->address = $address;
        $this->img = $img;
        $this->permission = $permission;
        $this->password = $password;
    }
}
