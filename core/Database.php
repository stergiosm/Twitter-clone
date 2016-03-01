<?php

class Database 
{
	
    private static $instance = null;
    private $connection,
            $query,
            $results,
            $error = false,
            $count = 0;

	private function __construct() 
	{
        $dsn = 'mysql:dbname=re-social;host=localhost';
        $user = 'root';
        $password = 'root';
        try {
            $this->connection = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

	public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    public function query($sql, $data) {

        $stm = $this->getConnection()->prepare($sql);
        foreach( $data as $key => &$value ) {
            $stm->bindParam($key, $value);
        }
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

     public function getValues() {

        $stm = $this->getConnection()->prepare("SELECT * FROM posts");
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getFollowingUsers() {

     $stm = $this->getConnection()->prepare("SELECT * FROM users
                                             INNER JOIN fellowships
                                             ON users.user_id = fellowships.following_id");
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $result;   
    }

    
    public function getUsers() {

        $stm = $this->getConnection()->prepare("SELECT * FROM users");
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    // public function getFields() {

    //     return '(username, password)';
    // }

    // public function insert($table, $data) {

    //     $fields = $this->getFields();
    //     $values = $this->getValues();
    //     $stm = $this->getConnection()->prepare("INSERT INTO $table $fields VALUES $values ");
    //     $stm->execute();
    // }

    


}