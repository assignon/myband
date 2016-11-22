<?php
  //require '../webApp/core/controller.php';
  class artikel_controller extends controllers{


      public function __construct(){

          parent::__construct();

      }

      public function artikel_page(){

          $smarty = $this->smarty_instance('Smarty');

          $ex = "artikel PAGE";
          $smarty->assign('ex',$ex);
          $smarty->display("../webApp/vieuws/tpl_files/artikel.tpl");

      }

  }

?>
