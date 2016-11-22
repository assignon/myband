<?php
  require '../webApp/core/controller.php';
  class technologie_controller extends controllers{


      public function __construct(){

          parent::__construct();

      }

      public function technologie_page(){

          $smarty = $this->smarty_instance('Smarty');

          $ex = "TECHNOLOGIE PAGE";
          $smarty->assign('ex',$ex);
          $smarty->display("../webApp/vieuws/tpl_files/technologie.tpl");

      }

  }

?>
