<?php
//  require '../webApp/core/controller.php';
  class lessen_controller extends controllers{


      public function __construct(){

          parent::__construct();

      }

      public function lessen_page(){

          $smarty = $this->smarty_instance('Smarty');

          $ex = "LESSEN PAGE";
          $smarty->assign('ex',$ex);
          $smarty->display("../webApp/vieuws/tpl_files/lessen.tpl");

      }

  }

?>
