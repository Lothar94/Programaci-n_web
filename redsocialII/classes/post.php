<?php
  class Post{
    private $title;
    private $user_id;
    private $content;
    private $id;
    private $date;
    private $time;

    public function __construct($title, $user_id, $content, $id, $date, $time){
      $this->title = $title;
      $this->user_id = $user_id;
      $this->content = $content;
      $this->id = $id;
      $this->date = $date;
      $this->time = $time;
    }

    public function get_title(){
      return $this->title;
    }

    public function get_user_id(){
      return $this->user_id;
    }

    public function get_content(){
      return $this->content;
    }

    public function get_id(){
      return $this->id;
    }

    public function get_date(){
      return $this->date;
    }

    public function get_time(){
      return $this->time;
    }

    public function get_150_content(){
      return substr($this->content, 0, 149);
    }
  }
?>
