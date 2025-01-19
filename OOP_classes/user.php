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
            die('error signing up') . $e->getMessage();
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
            die('error signing in') . $e->getMessage();
        }
    }
    public static function log_out()
    {
        session_unset();
        session_destroy();

        header('location: index.php');
        exit();
    }

    public function fetchusers()
    {
        try {

            $stmt = $this->conn->prepare("SELECT * FROM users");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('error fetching users') . $e->getMessage();
        }
    }
}

class admin extends User
{
    public function __construct($fullname, $email, $password, $role)
    {
        parent::__construct($fullname, $email, $password, $role);
    }


    public function activateaccount($user_id, $user_status)
    {

        try {
            $active = 1;
            $not_active = 0;


            if ($user_status === '0') {
                $stmt = $this->conn->prepare("UPDATE users SET is_active = :is_active WHERE user_id = :userid");
                $stmt->bindParam(':is_active', $active);
                $stmt->bindParam(':userid', $user_id);
                $stmt->execute();



            } else {
                $stmt = $this->conn->prepare("UPDATE users SET is_active = :is_active WHERE user_id = :userid");
                $stmt->bindParam(':is_active', $not_active);
                $stmt->bindParam(':userid', $user_id);
                $stmt->execute();
            }

            
            header('location: admin_dashboard.php');
            exit();
        } catch (PDOException $e) {

            die('error activating account' . $e->getMessage());
        }
    }

    public function deleteaccount($user_id)
    {
        try {
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare("DELETE FROM library WHERE user_id = :userid");
            $stmt->bindParam(':userid', $user_id);
            $stmt->execute();

            $stmt = $this->conn->prepare("DELETE FROM users WHERE user_id = :userid");
            $stmt->bindParam(':userid', $user_id);
            $stmt->execute();

            $this->conn->commit();

            header("Location: " . $_SERVER['REQUEST_URI']);
            exit();
        } catch (PDOException $e) {
            $this->conn->rollBack();
            die('error deleting account' . $e->getMessage());
        }
    }



    public function suspenduser($user_id, $user_status) {


        try {

            $banned = 1;
            $not_banned = 0;


            if ($user_status === '0') {
                $stmt = $this->conn->prepare("UPDATE users SET is_suspended = :is_suspended WHERE user_id = :userid");
                $stmt->bindParam(':is_suspended', $banned);
                $stmt->bindParam(':userid', $user_id);
                $stmt->execute();
            } else {
                $stmt = $this->conn->prepare("UPDATE users SET is_suspended = :is_suspended WHERE user_id = :userid");
                $stmt->bindParam(':is_suspended', $not_banned);
                $stmt->bindParam(':userid', $user_id);
                $stmt->execute();

            }
            
            header('location: admin_dashboard.php');
            exit();

        } catch (PDOException $e) {
            die('error suspending account' . $e->getMessage());
        }
    }

    public function topteacher(){

        try{

            $stmt = $this->conn->prepare("SELECT user_fullname,COUNT(l.course_id) AS inscriptions_count FROM users u join courses c on u.user_id = c.Teacher_id join library l on c.course_id = l.course_id group by u.user_id order by inscriptions_count DESC limit 1 ");
            $stmt->execute();
             return $stmt->fetch(PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            die('error fetching top teacher'.$e->getMessage());
        }
    }

    public function addTag() {}

    public function addcategory() {}
}



class teacher extends User
{
    private $is_active;

    public function __construct($is_active, $fullname, $email, $password, $role)
    {
        $this->is_active = $is_active;
        parent::__construct($fullname, $email, $password, $role);
    }

    public function fetch_inscriptions()
    {
        try {

            $stmt = $this->conn->prepare("SELECT * FROM library");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('error fetching total inscriptions') . $e->getMessage();
        }
    }

    public function top2courses()
    {
        try {
            $stmt = $this->conn->prepare("SELECT 
                c.course_title, 
                COUNT(l.course_id) AS insertion_count
            FROM 
                library l
            JOIN 
                courses c ON l.course_id = c.course_id
            GROUP BY 
                c.course_id
            ORDER BY 
                insertion_count DESC
            LIMIT 2");
            $stmt->execute();
            return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('error getting the top 2 courses') . $e->getMessage();
            return [];
        }
    }

    public function inscriptions_per_course($course_id)
    {
        try {
            $stmt = $this->conn->prepare("SELECT count(*) AS total FROM library WHERE course_id = :courseid");
            $stmt->bindParam(':courseid', $course_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result && isset($result['total'])) {
                return $result['total'];
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            die('error getting the top 2 courses') . $e->getMessage();
        }
    }
}

class student extends User{

    public function __construct($fullname, $email, $password, $role)
    {
        parent::__construct($fullname, $email, $password, $role);
    }

    public function removecourse_from_library($course_id,$user_id){

        try{
            $stmt=$this->conn->prepare("DELETE FROM library WHERE user_id =:user_id and course_id = :course_id");
            $stmt->bindParam(':user_id',$user_id);
            $stmt->bindParam(':course_id',$course_id);
            $stmt->execute();
            header('location: library.php');
        }catch(PDOException $e){
            die('Error removing course from your library' .$e->getMessage());
        }
    }
}