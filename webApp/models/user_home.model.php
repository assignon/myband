<?php
require '../webApp/core/model.php';

  class user_homeModel extends model{

    public function __construct(){

       parent::__construct();

    }

    public function get_user_data($table_name, $id){

       $data = $this->prepare_fetch("SELECT*FROM $table_name WHERE id=?",array($id));
       return $data;

    }

    public function get_lesson(){

       $lessen = $this->query("SELECT * FROM subject ORDER BY id DESC LIMIT 6");
       return $lessen;

    }

     public function get_publish()
    {
      $publish = $this->query("SELECT*FROM new_publish ORDER BY id DESC LIMIT 3");
      return $publish;
    }

   public function get_event()
    {
      $publish = $this->query("SELECT*FROM event ORDER BY id DESC LIMIT 3");
      return $publish;
    }

  }
 ?>
