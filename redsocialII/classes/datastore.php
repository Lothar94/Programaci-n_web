<?php
  require_once("./classes/post.php");

  class DataStore{

    private $mysqli;
    private $SQL_server;
    private $SQL_username;
    private $SQL_password;
    private $SQL_database;

    public function __construct($server, $username, $password, $database){
      $this->SQL_server = $server;
      $this->SQL_username = $username;
      $this->SQL_password = $password;
      $this->mysqli = 0;
      $this->SQL_database = $database;
    }

    private function connect_database(){
      $this->mysqli = new mysqli($this->SQL_server,  $this->SQL_username , $this->SQL_password, $this->SQL_database);

      if ($this->mysqli->connect_errno) {
        echo "Falló la conexión";
      }
    }

    private function disconnect_database(){
      $this->mysqli->close();
    }

    private function query($SQL_query){
      $result = $this->mysqli->query($SQL_query);
      if(!$result)
        echo "Falló la creación de la tabla: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
      return $result;
    }

    private function instant_query($SQL_query){
      $this->connect_database();
      $result = $this->query($SQL_query);
      $this->disconnect_database();

      return $result;
    }

    public function insert_user($name, $last_name, $email, $password, $borndate, $phone, $meeting){
      $SQL_query = "INSERT INTO `users`(`Name`, `Last Name`, `Email`, `Password`, `borndate`, `Phone`, `Meeting`) VALUES (\"$name\", \"$last_name\", \"$email\", \"$password\", DATE(\"$borndate\"), \"$phone\", \"$meeting\")";
      $this->instant_query($SQL_query);
    }

    public function update_user($id, $name, $email, $phone){
      $SQL_query = "UPDATE `users` SET `Name`=\"$name\", `Email`=\"$email\", `Phone`=\"$phone\" WHERE id = $id";
      $this->instant_query($SQL_query);
    }

    public function insert_post($title, $user_id, $content, $date){
      $SQL_query = "INSERT INTO `posts`(`Title`, `User_id`, `Content`, `Date`, `Time`) VALUES (\"$title\",\"$user_id\",\"$content\", DATE(\"$date\"), CURTIME())";
      $this->instant_query($SQL_query);
    }

    public function get_posts(){
      $posts = array();
      $SQL_query = "SELECT * from posts";
      $posts_results = $this->instant_query($SQL_query);
      while($row = $posts_results->fetch_array(MYSQLI_NUM)){
        array_push($posts, new Post($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]));
      }
      $posts_results->free();
      return $posts;
    }

    public function get_users(){
      $users = array();
      $SQL_query = "SELECT * from users";
      $user_result = $this->instant_query($SQL_query);
      while($row = $user_result->fetch_array(MYSQLI_NUM)){
        array_push($users, new User($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]));
      }
      $user_result->free();
      return $posts;
    }

    public function get_user($name){
      $SQL_query = "SELECT * from users where name = $name";
      $user_result = $this->instant_query($SQL_query);
      $row = $user_result->fetch_array(MYSQLI_NUM);
      $user = new User($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
      $user_result->free();
      return $user;
    }
  }
?>
