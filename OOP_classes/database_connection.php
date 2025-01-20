<?php 
    class database_connection{
        private static $instance = NULL;
        protected $connection;

        private  function __construct()
        {
            $servername = "localhost";
            $username = "root";
            $password = "06database@SM23";
            $dbname = "Youdemy";
            $port = 3306;

            try {
                $this->connection = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'error connecting to the data base ' . $e->getMessage();
            }
        }
        public static function getinstance()
        {
            if (self::$instance === NULL) {
                self::$instance = new database_connection();
                return self::$instance;
            }
            return self::$instance;
        }
        public  function getconnection()
        {
            return $this->connection;
        }
    }
?>