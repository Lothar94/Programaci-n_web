<?php
  class User{

    private $id;
    private $name;
    private $email;
    private $last_name;
    private $phone;
    private $borndate;

    public function __construct($id, $name, $email, $last_name, $phone, $borndate){
      $this->id = $id;
      $this->name = $name;
      $this->email = $email;
      $this->last_name = $last_name;
      $this->phone = $phone;
      $this->borndate = $borndate;
    }

    public function get_id(){
      return $this->id;
    }

    public function get_name(){
      return $this->name;
    }

    public function get_email(){
      return $this->email;
    }

    public function get_last_name(){
      return $this->last_name;
    }

    public function get_phone(){
      return $this->phone;
    }

    public function get_borndate(){
      return $this->borndate;
    }

    public function change_img(){

    }

    public function set_email($email){
      $this->email = $email;
    }

    public function set_name($name){
      $this->name = $name;
    }
  }
?>
