<?php /* Smarty version Smarty-3.1.18, created on 2016-11-14 07:37:14
         compiled from "..\webApp\vieuws\tpl_files\forum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1079757f7f407ec1ec9-61520428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40f3ec6972f03251adb9edae837b67f4ef0130d4' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\forum.tpl',
      1 => 1479108722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1079757f7f407ec1ec9-61520428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f7f407f02f01_03553424',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f7f407f02f01_03553424')) {function content_57f7f407f02f01_03553424($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/forum.css"/>
        <link rel="stylesheet" href="../public/css/global.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../public/javascript/global_js.js"></script>
        <script src="../public/javascript/forum.js"></script>
        <title>Forum</title>
  </head>
  <body>


    <header>

      <div id="menu">
              <a href="index.php?action=home" id="logo">
               <img src="" alt="Logo">
              </a>
               <nav>
                   <ul>


                       <li><a href="index.php?action=lessen" id="home">Lessen</a></li>
                       <li><a href="index.php?action=technologie" id="tech">Technologieen</a></li>
                       <li><a href="index.php?action=forum" id="forum">Forum</a></li>

                       <li><a href="index.php?action=artikel" id="contact">Artikel</a></li>
                   </ul>
               </nav>
               <div id="sociaal">

                   <a href=""><img src="" alt="facebook"></a>
               <a href=""><img src="" alt="twitter"></a>
               <a href=""><img src="" alt="mail"></a>

               </div>
               <a href="login.php" id="login">Login</a>

           </div>


          <div id="core">



         </div>

    </header>

    <footer>



    </footer>

    </body>
</html>
<?php }} ?>
