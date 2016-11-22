<?php
  require '../webApp/core/controller.php';
  class forum_controller extends controllers{


      public function __construct(){

          parent::__construct();

      }

      public function forum_page(){

        //  $smarty = $this->smarty_instance('Smarty');

          $ex = "FORUM PAGE";
          $smarty->assign('ex',$ex);
          //$smarty->display("../webApp/vieuws/tpl_files/forum.tpl");

      }

      public function user_forum_page(){

        //  $smarty = $this->smarty_instance('Smarty');

          $ex = "FORUM PAGE";
          $smarty->assign('ex',$ex);
          //$smarty->display("../webApp/vieuws/tpl_files/private/forum.tpl");

      }

  }

?>
