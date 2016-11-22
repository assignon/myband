<?php
  require '../webApp/core/controller.php';
  class home_controller extends controllers{


      public function __construct(){

          parent::__construct();

      }

      public function home_page(){

          $smarty = $this->smarty_instance('Smarty');

          $ex = "Home PAGE";
          $smarty->assign('ex',$ex);
          $smarty->display("../webApp/vieuws/tpl_files/home.tpl");

      }

  }

?>
