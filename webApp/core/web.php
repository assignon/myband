<?php

  class web_app{

      public function __construct(){

          //include '../includes/smarty_instance.php';
          //include '../includes/bootstrap.php';
          require '../webApp/core/controller.php';
          require '../webApp/core/model.php';
          require '../webApp/models/home.model.php';
          $homeModel = new home_model();

          $smarty = new Smarty();

          //$menu = require '../webApp/vieuws/tpl_files/menu.tpl';
          //$smarty->assign('select',$select);
          //$smarty->display('../webApp/vieuws/tpl_files/home.tpl');

          $homeModel->display_news();
          $homeModel->display_invention();
          $homeModel->display_lesson();
          $homeModel->display_technologie();

      }

  }

?>
