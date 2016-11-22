<?php

 require "../webApp/core/model.php";
  class artikel_model extends model{


      public function __construct(){


          parent::__construct();
      }

     public function artikel_display($begin_page,$end_page){

         $select = $this->query("SELECT*FROM newsarticles ORDER BY date_created DESC LIMIT ". (($begin_page-1)*$end_page).", $end_page");

         return $select;

     }

  }

?>
