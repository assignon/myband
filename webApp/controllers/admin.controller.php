<?php
  require '../webApp/core/controller.php';
  class admin_controller extends controllers{


      public function __construct(){

          parent::__construct();

      }

      public function admin_page(){

          $smarty = $this->smarty_instance('Smarty');

          $ex = "ADMIN PAGE";
          $smarty->assign('ex',$ex);
          $smarty->display("../webApp/vieuws/tpl_files/private/admin.tpl");

      }

  }

?>
