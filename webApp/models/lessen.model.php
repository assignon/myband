<?php
  require "../webApp/core/model.php";

  class lessen_model extends model{

    public function __construct(){

       parent::__construct();

    }

    public function get_lessen($table_name){

    $course = $this->query("SELECT*FROM $table_name");
    //$courses = $course->fetch();
    return $course;

    }


      public function search($name){


          $subject_search = $this->prepare("SELECT*FROM subject WHERE parent_name=?",array($name));


          return $subject_search;

      }



  }

 ?>
