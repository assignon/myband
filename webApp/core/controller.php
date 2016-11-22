<?php

  class controllers{

      public function __construct(){

          require 'vieuw.php';
          //require 'model.php';
          //include '../includes/smarty_instance.php';
        //  include '../includes/bootstrap.php';


      }

      public function vieuw($vieuw){

          return new $vieuw;

      }

      public function model($model){
          require 'model.php';
          return new $model;

      }

      public function smarty_instance($smarty){
          include '../includes/bootstrap.php';
          return new $smarty;

      }


  }

?>
