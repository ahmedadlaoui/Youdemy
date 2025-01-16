<?php

    require_once 'OOP_classes/database_connection.php';


abstract class course{
    protected $course_title;
    protected $course_description;
    protected $category_id;
    protected $course_banner;
    protected $course_type;
    protected $conn;
  
    public function __construct($course_title,$course_description,$category_id,$course_banner,$course_type)
    {
        $this->course_title = $course_title;
        $this->course_description = $course_description;
        $this->category_id = $category_id;
        $this->course_banner = $course_banner;
        $this->course_type = $course_type;
        $dbconn = database_connection::getinstance();
        $this->conn = $dbconn->getconnection();
    }
    public abstract function addcourse();

}

class text_course extends course{
    private $text_content;

    public function __construct($text_content,$course_title, $course_description, $category_id, $course_banner, $course_type)
    {
        $this->text_content = $text_content;
        parent::__construct($course_title, $course_description, $category_id, $course_banner, $course_type);
    }
    public function addcourse(){
        try {
            $stmt = $this->conn->prepare("
                INSERT INTO courses (course_title, course_description, category_id, course_banner, course_type, text_content) 
                VALUES (:course_title, :course_description, :category_id, :course_banner, :course_type, :text_content)");

            $stmt->bindParam(':course_title', $this->course_title);
            $stmt->bindParam(':course_description', $this->course_description);
            $stmt->bindParam(':category_id', $this->category_id);
            $stmt->bindParam(':course_banner', $this->course_banner);
            $stmt->bindParam(':course_type', $this->course_type);
            $stmt->bindParam(':text_content', $this->text_content);

            $stmt->execute();
            echo "Course added successfully!";
            exit();
        } catch (PDOException $e) {
            echo "Error adding course: " . $e->getMessage();
        }
    }
}

?>
