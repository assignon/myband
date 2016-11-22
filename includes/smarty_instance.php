<?php

   define('MAIN_PATH',getcwd());


   // Initialise template parser
   require "../libs/smarty-3.1.30/libs/Smarty.class.php";
   $smarty = new Smarty();
   $smarty->setTemplateDir(MAIN_PATH.'/tpl');
   $smarty->compile_dir = "views/compiled";

?>