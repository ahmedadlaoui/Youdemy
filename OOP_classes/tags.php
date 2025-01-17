<?php

require_once 'OOP_classes/database_connection.php';

class tags
{

    private $tag_id;
    private $tag_title;
    private $conn;

    public function __construct($tag_id, $tag_title)
    {
        $this->tag_id = $tag_id;
        $this->tag_title = $tag_title;
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
}
