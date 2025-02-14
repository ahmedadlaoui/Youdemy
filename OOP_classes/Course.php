<?php



abstract class course
{
    protected $course_id;
    protected $course_title;
    protected $course_description;
    protected $category_id;
    protected $course_banner;
    protected $course_type;
    protected $conn;
    protected $user_id;

    public function __construct($course_id,$course_title, $course_description, $category_id, $course_banner, $course_type, $user_id)
    {
        $this->course_id = $course_id;
        $this->course_title = $course_title;
        $this->course_description = $course_description;
        $this->category_id = $category_id;
        $this->course_banner = $course_banner;
        $this->course_type = $course_type;
        $dbconn = database_connection::getinstance();
        $this->conn = $dbconn->getconnection();
        $this->user_id  = $user_id;
    }
    public abstract function addcourse(array $tags);

    public static function fetchallcourses()
    {
        try {
            $dbconn = database_connection::getinstance();
            $connection = $dbconn->getconnection();
            $stmt = $connection->prepare("SELECT * FROM courses");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('error fetching courses') . $e->getMessage();
        }
    }

    public static function fetchallcoursesindex($current_page)
    {
        $courses_limit = ($current_page - 1) * 8;
        try {
            $dbconn = database_connection::getinstance();
            $connection = $dbconn->getconnection();
            $stmt = $connection->prepare("SELECT * FROM courses LIMIT $courses_limit,8");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('error fetching page courses') . $e->getMessage();
        }
    }

    public static function fetchteachercourses($teacher_ID)
    {
        try {
            $dbconn = database_connection::getinstance();
            $connection = $dbconn->getconnection();
            $stmt = $connection->prepare("SELECT * FROM courses WHERE Teacher_ID = :teacher_id");
            $stmt->bindParam(':teacher_id', $teacher_ID);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('error fetching your courses') . $e->getMessage();
        }
    }

    public static function deletecourse($course_id)
    {
        try {

            $dbconn = database_connection::getinstance();
            $connection = $dbconn->getconnection();

            $stmt = $connection->prepare("DELETE FROM library WHERE course_id = :courseid");
            $stmt->bindParam(':courseid', $course_id);
            $stmt->execute();

            $stmt = $connection->prepare("DELETE FROM assigned_tags WHERE course_id = :courseid");
            $stmt->bindParam(':courseid', $course_id);
            $stmt->execute();

            $stmt = $connection->prepare("DELETE FROM courses WHERE course_id = :courseid");
            $stmt->bindParam(':courseid', $course_id);
            $stmt->execute();

            header('location: admin_dashboard.php');
            exit();
        } catch (PDOException $e) {
            die('error deleting the course' . $e->getMessage());
        }
    }
    public static function fetchcourseinfos($course_id)
    {
        $dbconn = database_connection::getinstance();
        $connection = $dbconn->getconnection();

        $stmt = $connection->prepare("SELECT * FROM courses WHERE course_id = :course_id");
        $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
        $stmt->execute();
        return  $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function fetchstudent_courses($user_id,$current_page)
    {
        try {
            $courses_limit = ($current_page - 1) * 8;
            $dbconn = database_connection::getinstance();
            $connection = $dbconn->getconnection();
            $stmt = $connection->prepare("SELECT * FROM library l  join courses c on l.course_id = c.course_id WHERE user_id = :user_id LIMIT $courses_limit,8 ");
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $stmt->execute();
            return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('error fetching your courses' . $e->getMessage());
        }
    }
    
    public static function fetchstudent_coursess($user_id)
    {
        try {

            $dbconn = database_connection::getinstance();
            $connection = $dbconn->getconnection();
            $stmt = $connection->prepare("SELECT * FROM library l  join courses c on l.course_id = c.course_id WHERE user_id = :user_id  ");
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $stmt->execute();
            return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('error fetching your courses' . $e->getMessage());
        }
    }


    public static function addcourse_tolibrary($course_id, $user_id)
    {

        try {
            $dbconn = database_connection::getinstance();
            $connection = $dbconn->getconnection();
            $stmt = $connection->prepare("INSERT INTO library(course_id,user_id) VALUES(:course_id,:user_id)");
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
            $stmt->execute();
            header('location: index.php');
            exit();
        } catch (PDOException $e) {
            die('error adding  course to your library' . $e->getMessage());
        }
    }
    public static function getcontent_type($course_id){
        try{
            $dbconn = database_connection::getinstance();
            $connection = $dbconn->getconnection();
            $stmt = $connection->prepare("SELECT course_type FROM courses WHERE course_id = :course_id");
            $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            die('error getting the content type' . $e->getMessage());
        }
    }
}


class text_course extends course
{
    private $text_content;

    public function __construct($course_id,$text_content, $course_title, $course_description, $category_id, $course_banner, $course_type, $user_id)
    {
        $this->text_content = $text_content;
        parent::__construct($course_id,$course_title, $course_description, $category_id, $course_banner, $course_type, $user_id);
    }
    public function addcourse(array $tags)
    {
        try {
            $stmt = $this->conn->prepare("
                INSERT INTO courses (course_title, course_description, category_id, course_banner, course_type, text_content,Teacher_ID) 
                VALUES (:course_title, :course_description, :category_id, :course_banner, :course_type, :text_content,:Teacher_ID)");

            $stmt->bindParam(':course_title', $this->course_title);
            $stmt->bindParam(':course_description', $this->course_description);
            $stmt->bindParam(':category_id', $this->category_id);
            $stmt->bindParam(':course_banner', $this->course_banner);
            $stmt->bindParam(':course_type', $this->course_type);
            $stmt->bindParam(':text_content', $this->text_content);
            $stmt->bindParam(':Teacher_ID', $this->user_id);
            $stmt->execute();
            $last_id = $this->conn->lastInsertId();
            var_dump($tags);

            for ($i = 0; $i < count($tags); $i++) {
                $tagti = (int)$tags[$i];
                $stmt = $this->conn->prepare("INSERT INTO assigned_tags(course_id, tag_id) VALUES(:lastid, :tag_id)");
                $stmt->bindParam(':lastid', $last_id);
                $stmt->bindParam(':tag_id', $tagti, PDO::PARAM_INT);
                $stmt->execute();
            }
            header('location: teacher_dashboard.php');
            exit();
        } catch (PDOException $e) {
            echo "Error adding course: " . $e->getMessage();
        }
    }
    public function modifycourse(array $tags, $course_id)
    {
        try {
            $stmt = $this->conn->prepare("
                UPDATE courses
                SET course_title = :course_title,
                    course_description = :course_description,
                    category_id = :category_id,
                    course_banner = :course_banner,
                    course_type = :course_type,
                    text_content = :text_content
                WHERE course_id = :course_id");

            $stmt->bindParam(':course_title', $this->course_title);
            $stmt->bindParam(':course_description', $this->course_description);
            $stmt->bindParam(':category_id', $this->category_id);
            $stmt->bindParam(':course_banner', $this->course_banner);
            $stmt->bindParam(':course_type', $this->course_type);
            $stmt->bindParam(':text_content', $this->text_content);
            $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
            $stmt->execute();

            $stmt = $this->conn->prepare("DELETE FROM assigned_tags WHERE course_id = :course_id");
            $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
            $stmt->execute();

            for ($i = 0; $i < count($tags); $i++) {
                $tagti = (int)$tags[$i];
                $stmt = $this->conn->prepare("INSERT INTO assigned_tags(course_id, tag_id) VALUES(:course_id, :tag_id)");
                $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
                $stmt->bindParam(':tag_id', $tagti, PDO::PARAM_INT);
                $stmt->execute();
            }

            header('location: teacher_dashboard.php');
            exit();
        } catch (PDOException $e) {
            echo "Error modifying course: " . $e->getMessage();
        }
    }

    public function display($course_id){
        try{

            $stmt = $this->conn->prepare("SELECT * FROM courses WHERE course_id = :course_id");
            $stmt->bindParam(':course_id',$course_id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            echo "Error fetching course details: " . $e->getMessage();
        }
    }
}


class video_course extends course
{

    private $video_content;

    public function __construct($course_id,$video_content, $course_title, $course_description, $category_id, $course_banner, $course_type, $user_id)
    {
        $this->video_content = $video_content;
        parent::__construct($course_id,$course_title, $course_description, $category_id, $course_banner, $course_type, $user_id);
    }
    public function addcourse(array $tags)
    {
        try {
            $stmt = $this->conn->prepare("
                INSERT INTO courses (course_title, course_description, category_id, course_banner, course_type, video_content,Teacher_ID) 
                VALUES (:course_title, :course_description, :category_id, :course_banner, :course_type, :video_content,:Teacher_ID)");

            $stmt->bindParam(':course_title', $this->course_title);
            $stmt->bindParam(':course_description', $this->course_description);
            $stmt->bindParam(':category_id', $this->category_id);
            $stmt->bindParam(':course_banner', $this->course_banner);
            $stmt->bindParam(':course_type', $this->course_type);
            $stmt->bindParam(':video_content', $this->video_content);
            $stmt->bindParam(':Teacher_ID', $this->user_id);
            $stmt->execute();
            $last_id = $this->conn->lastInsertId();


            for ($i = 0; $i < count($tags); $i++) {
                $tagti = (int)$tags[$i];
                $stmt = $this->conn->prepare("INSERT INTO assigned_tags(course_id, tag_id) VALUES(:lastid, :tag_id)");
                $stmt->bindParam(':lastid', $last_id);
                $stmt->bindParam(':tag_id', $tagti, PDO::PARAM_INT);
                $stmt->execute();
            }


            header('location: teacher_dashboard.php');
            exit();
        } catch (PDOException $e) {
            echo "Error adding course: " . $e->getMessage();
        }
    }
    public function modifycourse(array $tags, $course_id)
    {
        try {
            $stmt = $this->conn->prepare("
                UPDATE courses
                SET course_title = :course_title,
                    course_description = :course_description,
                    category_id = :category_id,
                    course_banner = :course_banner,
                    course_type = :course_type,
                    video_content = :video_content
                WHERE course_id = :course_id");

            $stmt->bindParam(':course_title', $this->course_title);
            $stmt->bindParam(':course_description', $this->course_description);
            $stmt->bindParam(':category_id', $this->category_id);
            $stmt->bindParam(':course_banner', $this->course_banner);
            $stmt->bindParam(':course_type', $this->course_type);
            $stmt->bindParam(':video_content', $this->video_content);
            $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
            $stmt->execute();

            $stmt = $this->conn->prepare("DELETE FROM assigned_tags WHERE course_id = :course_id");
            $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
            $stmt->execute();

            for ($i = 0; $i < count($tags); $i++) {
                $tagti = (int)$tags[$i];
                $stmt = $this->conn->prepare("INSERT INTO assigned_tags(course_id, tag_id) VALUES(:course_id, :tag_id)");
                $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
                $stmt->bindParam(':tag_id', $tagti, PDO::PARAM_INT);
                $stmt->execute();
            }

            header('location: teacher_dashboard.php');
            exit();
        } catch (PDOException $e) {
            echo "Error modifying course: " . $e->getMessage();
        }
    }

    public function display(){
        try{

            $stmt = $this->conn->prepare("SELECT * FROM courses WHERE course_id = :course_id");
            $stmt->bindParam(':course_id',$this->course_id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            echo "Error fetching course details: " . $e->getMessage();
        }
    }
}




class coursefactory
{
    public static function createcourse_instance($course_id,$content, $course_title, $course_description, $category_id, $course_banner, $course_type, $teacher_id)
    {
        if ($course_type === 'text') {
            return new text_course($course_id,$content, $course_title, $course_description, $category_id, $course_banner, $course_type, $teacher_id);
        } else {
            return new video_course($course_id,$content, $course_title, $course_description, $category_id, $course_banner, $course_type, $teacher_id);
        }
    }
}
