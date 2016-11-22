<?php
session_start();
  require '../webApp/core/web.php';

  include '../includes/bootstrap.php';

  $smarty = new Smarty();



  if(isset($_SESSION['id'])){

     $dash = "user-home.php?id=".$_SESSION['id'];
     $smarty->assign('dash',$dash );

  }

//$smarty->display('../webApp/vieuws/tpl_files/home.tpl');



   if(isset($_GET['action']) AND !empty($_GET['action'])){

     $getAction = $_GET['action'];


   if($getAction == 'home'){


        $home = new web_app();
       $smarty->display('../webApp/vieuws/tpl_files/home.tpl');




   }else if($getAction == 'lessen'){

       require 'lessen.php';

       $smarty->display('../webApp/vieuws/tpl_files/lessen.tpl');

   }else if($getAction == 'technologie'){

       require 'technologie.php';

       $smarty->display('../webApp/vieuws/tpl_files/technologie.tpl');

   }else if($getAction == 'forum'){

      require 'forum.php';

       $smarty->display('../webApp/vieuws/tpl_files/forum.tpl');

   }else if($getAction == 'artikel'){

      require 'artikel.php';

       $smarty->display('../webApp/vieuws/tpl_files/artikel.tpl');

   }else if($getAction == 'about'){

      require 'about.php';

       $smarty->display('../webApp/vieuws/tpl_files/about.tpl');

   }else if($getAction == 'subject'){

      require 'subject.php';

       $smarty->display('../webApp/vieuws/tpl_files/subject.tpl');

   }else if($getAction == 'subjectContent'){

      require 'subjectContent.php';

       $smarty->display('../webApp/vieuws/tpl_files/subjectContent.tpl');

   }else if($getAction == 'private-home'){


        $home = new web_app();
       $smarty->display('../webApp/vieuws/tpl_files/private/home.tpl');


   }if($getAction == 'user-technologie'){


        require 'technologie.php';
       $smarty->display('../webApp/vieuws/tpl_files/private/technologie.tpl');

   }if($getAction == 'user-artikel'){


        require 'artikel.php';
       $smarty->display('../webApp/vieuws/tpl_files/private/artikel.tpl');

   }else if($getAction == 'user-forum'){

      require 'forum.php';

       $smarty->display('../webApp/vieuws/tpl_files/private/forum.tpl');

   }else if($getAction == 'user-about'){

      require 'about.php';

       $smarty->display('../webApp/vieuws/tpl_files/private/about.tpl');

   }else if($getAction == 'user-lessen'){

       require 'user-lessen.php';

       $smarty->display('../webApp/vieuws/tpl_files/private/lessen.tpl');

   }else if($getAction == 'dashboard'){

       require 'user-home.php';

       $smarty->display('../webApp/vieuws/tpl_files/private/user-home.tpl');

   }else if($getAction == 'user-subject'){

      require 'user-subject.php';

       $smarty->display('../webApp/vieuws/tpl_files/private/subject.tpl');

   }else if($getAction == 'user-subjectContent'){

      require 'user-subjectContent.php';

       $smarty->display('../webApp/vieuws/tpl_files/private/subjectContent.tpl');

   }

   /*else if($getAction == 'login'){

       require 'login.php';

       $smarty->display('../webApp/vieuws/tpl_files/login.tpl');

   }else if($getAction == 'administrator'){

      require 'administrator.php';

       $smarty->display('../webApp/vieuws/tpl_files/administrator.tpl');

   }else if($getAction == 'user_home'){

      //require 'user-home.php';

       //$smarty->display('../webApp/vieuws/tpl_files/private/user-home.tpl');

   }*/
 }


 ?>
