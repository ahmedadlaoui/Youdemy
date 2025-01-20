<?php

require_once 'OOP_classes/database_connection.php';

class tags
{
    private $conn;

    public function __construct()
    {
        $db_instance = database_connection::getinstance();
        $this->conn  = $db_instance->getconnection();
    }

    public function fetchalltags()
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM tags");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            exit();
        } catch (PDOException $e) {
            die('error signing up'). $e->getMessage();
        }
    }
    public static function fetchspecifictags($course_id){
        $dbconn = database_connection::getinstance();
        $connection = $dbconn->getconnection();

        $stmt = $connection->prepare("SELECT * FROM assigned_tags WHERE course_id = :course_id");
        $stmt ->bindParam(':course_id',$course_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function inserttags(array $tags){
        try{

            foreach($tags as $tag):
                $stmt = $this->conn->prepare("INSERT INTO tags(tag_title) VALUE(:title)");
                $stmt->bindParam(':title',$tag);
                $stmt->execute();
            endforeach;

            header('location: admin_dashboard.php');
            exit();
        }catch(PDOException $e){
        die('error inserting tags'. $e->getMessage()) ;
        }
    }

    public function Edittag($tag_title,$old){
        try{

            $stmt = $this->conn->prepare("UPDATE tags SET tag_title = :title WHERE tag_title = :old_title");
            $stmt->bindParam(':title',$tag_title);
            $stmt->bindParam(':old_title',$old);
            $stmt->execute();
            header('location: admin_dashboard.php');
            exit();

        }catch(PDOException $e){
            die('error editing tag'.$e->getMessage());
        }
    }
    public function Deletetag($tag_title){
        try{

            $stmt = $this->conn->prepare("DELETE FROM tags WHERE tag_title = :title");
            $stmt->bindParam(':title',$tag_title);
            $stmt->execute();
            header('location: admin_dashboard.php');
            exit();

        }catch(PDOException $e){
            die('error deleting category'.$e->getMessage());
        }
    }
}
