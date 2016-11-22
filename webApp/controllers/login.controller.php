<?php
  require '../webApp/core/controller.php';
  class login_controller extends controllers{


      public function __construct(){

          parent::__construct();

      }

      public function login_page(){

          $smarty = $this->smarty_instance('Smarty');

          $ex = "login PAGE";
          $smarty->assign('ex',$ex);
          $smarty->display("../webApp/vieuws/tpl_files/login.tpl");

      }
      
      public function input_values($value1,$value2,$value3){
          
          require '../webApp/core/model.php';
          
          $model = new model();
          
          $val1 = $model->getPOST($value1);
          $val2 = $model->getPOST($value2);
          $val3 = $model->getPOST($value3);
          
          return $smarty->assign('val1',$val1);
          return $smarty->assign('val2',$val2);
          return $smarty->assign('val3',$val3);
          
          
          
      }

  }

?>
