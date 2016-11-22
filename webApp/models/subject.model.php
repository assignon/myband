<?php

require "../webApp/core/model.php";

class subject_model extends model{

  public function __construct(){

     parent::__construct();

  }

  public function get_subject($parent_name){


      $subject = $this->getPDO()->prepare("SELECT*FROM subject WHERE parent_name=?");
      $subject->execute(array($parent_name));

      return $subject;

  }

}

 ?>
