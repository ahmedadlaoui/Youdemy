<?php
require_once 'OOP_classes/database_connection.php';

class category
{
    private $category_id;
    private $category_title;
    private $conn;

    public function __construct($category_id, $category_title)
    {
        $this->category_id = $category_id;
        $this->category_title = $category_title;
        $dbconn = database_connection::getinstance();
        $this->conn = $dbconn->getconnection();
    }

    public function fetchallcategories()
    {
        try {
            $stmt =  $this->conn->prepare("SELECT * FROM category");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            exit();
        } catch (PDOException $e) {
            die('error fetching categories') . $e->getMessage();
        }
    }

    public function insertcategories(array $categories){
        try{

            foreach($categories as $category):

                $stmt = $this->conn->prepare("INSERT INTO category(category_title) VALUE(:title)");
                $stmt->bindParam(':title',$category);
                $stmt->execute();
                
            endforeach;

            header('location: admin_dashboard.php');
            exit();

        }catch(PDOException $e){
        die('error inserting categories') . $e->getMessage();
        }
    }

    public function Deletecategory($category_title){
        try{

            $stmt = $this->conn->prepare("DELETE FROM category WHERE category_title = :title");
            $stmt->bindParam(':title',$category_title);
            $stmt->execute();
            header('location: admin_dashboard.php');
            exit();

        }catch(PDOException $e){
            die('error deleting category'.$e->getMessage());
        }
    }
    public function Editcategory($category_title,$old){
        try{

            $stmt = $this->conn->prepare("UPDATE category SET category_title = :title WHERE category_title = :old_title");
            $stmt->bindParam(':title',$category_title);
            $stmt->bindParam(':old_title',$old);
            $stmt->execute();
            header('location: admin_dashboard.php');
            exit();

        }catch(PDOException $e){
            die('error editing category'.$e->getMessage());
        }
    }
}
