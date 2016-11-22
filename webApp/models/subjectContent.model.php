<?php

require "../webApp/core/model.php";

class subjectContent_model extends model{

  public function __construct(){

     parent::__construct();

  }

  public function get_subjectContent_public($parent_name, $visible){


      $subject = $this->getPDO()->prepare("SELECT*FROM lessons_video WHERE parent_name=? AND visibility=?");
      $subject->execute(array($parent_name, $visible));

      return $subject;

  }

}

 ?>
