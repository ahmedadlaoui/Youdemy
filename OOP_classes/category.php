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
            $stmt = $this->conn->prepare("SELECT * FROM category");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            exit();
        } catch (PDOException $e) {
            die('error fetching categories') . $e->getMessage();
        }
    }
}
