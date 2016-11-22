<?php
  require '../webApp/core/controller.php';
  class about_controller extends controllers{


      public function __construct(){

          parent::__construct();

      }

      public function about_page(){



          $model_inst = $this->model('model');

          $model_inst->modelChild_path('about.model');
          $exemple = $model_inst->modelChild_instance('about_model');

          $smarty = $this->smarty_instance('Smarty');


          $ex = "ABOUT PAGE";
          $message = $exemple->example('hontoni et ca marche mon frere...');
          $string = $exemple->example('c est un autre test...');
          $smarty->assign('string',$string);
          $smarty->assign('ex',$ex);
          $smarty->assign('message',$message);
        //  $smarty->display("../webApp/vieuws/tpl_files/about.tpl");
          //$this->smartie();

      }

      public function smartie(){

          echo "dis quelque chose...";
      }

  }

?>
