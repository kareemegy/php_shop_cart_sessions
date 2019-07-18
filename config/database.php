<?php
class Database
{

    private $host = "localhost";
    private $db_name = "shop_cart_sessions_1";
    private $user_name = "root";
    private $password = "";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->user_name, $this->password);
        } catch (PDOEXception $exception) {
            echo "Connection Error" . $exception->getMessage();
            // throw new EXception($exception->getMessge());
        }
        return $this->conn;
    }
}
