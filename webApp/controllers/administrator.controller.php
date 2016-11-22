<?php
  require '../webApp/core/controller.php';
  class administrator_controller extends controllers{


      public function __construct(){

          parent::__construct();

      }

      public function administrator_page(){

          $smarty = $this->smarty_instance('Smarty');

          $ex = "ADMIN PAGE";
          $smarty->assign('ex',$ex);
          $smarty->display("../webApp/vieuws/tpl_files/private/administrator-home.tpl");

      }

  }

?>
