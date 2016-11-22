<?php

  class vieuw{

      public function __construct(){

          //include "../includes/smarty_instance.php";

      }

      public function render($file){

          include '../webApp/vieuws/'.$file.'.tpl';

      }

      public function getChild_class($class){

          require '../webApp/vieuws/'.$class.'.php';

      }

      public function getChild_instance($instance){

          return new $instance;

      }



  }

?>
