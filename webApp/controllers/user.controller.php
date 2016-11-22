<?php
  require '../webApp/core/controller.php';
  class user_controller extends controllers{


      public function __construct(){

          parent::__construct();


      }

      public function user_page(){


          $smarty = $this->smarty_instance('Smarty');

          $dash = "user-home.php?id=".$_SESSION['id'];
          $smarty->assign('dash',$dash );

           $index = "index.php?id=".$_SESSION['id']."&action=private-home";
           $smarty->assign('index',$index );



          $lessen= "index.php?id=".$_SESSION['id']."&action=user-lessen";
          $smarty->assign('lessen',$lessen );

          $technologie = "index.php?id=".$_SESSION['id']."&action=user-technologie";
          $smarty->assign('technologie',$technologie );

          $forum = "index.php?id=".$_SESSION['id']."&action=user-forum";
          $smarty->assign('forum',$forum );

          $about = "index.php?id=".$_SESSION['id']."&action=user-about";
          $smarty->assign('about',$about );

          $artikel = "index.php?id=".$_SESSION['id']."&action=user-artikel";
          $smarty->assign('artikel',$artikel );



      /*    if(isset($getAction) AND !empty($getAction)){

            $getAction = $_GET['action'];

          if($getAction == 'home'){

               require '../webApp/core/web.php';
               $home = new web_app();
              $smarty->display('../webApp/vieuws/tpl_files/private/home.tpl');



          }else if($getAction == 'lessen'){

              require '../public/lessen.php';

              $smarty->display('../webApp/vieuws/tpl_files/private/lessen.tpl');

          }else if($getAction == 'technologie'){

              require '../public/technologie.php';

              $smarty->display('../webApp/vieuws/tpl_files/private/technologie.tpl');

          }else if($getAction == 'forum'){

             require '../public/forum.php';

              $smarty->display('../webApp/vieuws/tpl_files/private/forum.tpl');

          }else if($getAction == 'artikel'){

             require '../public/artikel.php';

              $smarty->display('../webApp/vieuws/tpl_files/private/artikel.tpl');

          }else if($getAction == 'about'){

             require '../public/about.php';

              $smarty->display('../webApp/vieuws/tpl_files/private/about.tpl');

          }else if($getAction == 'dash'){

              //require '../public/user-home.php';

              $smarty->display('../webApp/vieuws/tpl_files/private/user-home.tpl');

          }



      }*/

    //
      $smarty->display("../webApp/vieuws/tpl_files/private/user-home.tpl");

  }
}

?>
