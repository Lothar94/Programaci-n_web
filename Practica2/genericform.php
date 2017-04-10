<?php
  class genericForm {
    private $fields;

    function __construct($type, $value){
      $this->fields = array();
      if (sizeof($type)==sizeof($value)){
        for ($i=0; $i < sizeof($type); $i++) {
          $this->fields[$i] = array($type[$i], $value[$i]);
        }
      } else {
        echo "<p>Nope</p>";
      }
    }

    function writeForm(){
      echo "<form>";
      for ($i=0; $i < sizeof($this->fields); $i++) {
        $t = $this->fields[$i][0];
        $v = $this->fields[$i][1];
        echo "<input type=\"$t\" value=\"$v\">";
      }
      echo "</form>";
    }
  }
 ?>
