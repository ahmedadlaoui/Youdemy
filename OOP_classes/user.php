<?php
session_start();
require 'OOP_classes/database_connection.php';

class User
{

    protected $fullname;
    protected $email;
    protected $password;
    protected $conn;
    protected $role;

    public function __construct($fullname, $email, $password, $role)
    {
        $this->role = $role;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
        $dbconn = database_connection::getinstance();
        $this->conn = $dbconn->getconnection();
    }


    public function sign_up()
    {
        try {

            $hashed_password = password_hash($this->password, PASSWORD_DEFAULT);
            $stmt = $this->conn->prepare("INSERT INTO users(user_fullname,email,password,role,is_active) VALUES(:fullname , :email, :password ,:role,:is_active)");
            $stmt->bindParam(':fullname', $this->fullname);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->bindParam(':role', $this->role);
            if ($this->role === 'student') {
                $isActive = 1;
                $stmt->bindParam(':is_active', $isActive);
            } else {
                $isActive = 0;
                $stmt->bindParam(':is_active', $isActive);
            }
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'error signing up' . $e->getMessage();
        }
    }

    public function sign_in($connectionemail, $connectionpassword)
    {
        try {

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $connectionemail);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($connectionpassword, $user['password'])) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_fullname'] = $user['user_fullname'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['profile_pic'] = $user['profile_pic'];
                $_SESSION['is_suspended'] = $user['is_suspended'];
                $_SESSION['is_active'] = $user['is_active'];
            }
        } catch (PDOException $e) {
            echo 'error signing in' . $e->getMessage();
        }
    }
}

class admin extends User
{public function __construct()
    {
        parent::__construct();
    }


    public function activateaccount() {
        
    }

    public function suspenduser() {
        
    }

    public function revokesuspension(){

    }

    public function addTag() {
        
    }

    public function addcategory() {
        
    }
}



class teacher extends User
{

    private $is_active;

    public function __construct($is_active)
    {
        $this->is_active = $is_active;
    }

}
