<?php /* Smarty version Smarty-3.1.18, created on 2016-11-14 07:37:17
         compiled from "..\webApp\vieuws\tpl_files\lessen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24492580975ea82d240-05212686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5ebce45d57b579fc40316a5053c6125fe91919b' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\lessen.tpl',
      1 => 1479108881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24492580975ea82d240-05212686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580975ec58ca51_94910567',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580975ec58ca51_94910567')) {function content_580975ec58ca51_94910567($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/lessen.css"/>
        <link rel="stylesheet" href="../public/css/global.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../public/javascript/lessen.js"></script>
        <title>MyBand</title>
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
                    <li><a href="index.php?action=about" id="tech">About</a></li>
                    <li><a href="index.php?action=forum" id="forum">Forum</a></li>
                    <li><a href="index.php?action=technologie" id="tech">Technologieen</a></li>
                    <li><a href="index.php?action=artikel" id="contact">Artikel</a></li>
                </ul>
                  </ul>
              </nav>
              <div id="sociaal">

                  <a href=""><img src="" alt="facebook"></a>
              <a href=""><img src="" alt="twitter"></a>
              <a href=""><img src="" alt="mail"></a>

              </div>
              <a href="login.php" id="login">Login</a>

          </div>

     <div id="slider"></div>

     <div id="zoekContainer"></div>



     <div id="lesson_container">

           <div id="lesson">

           </div>

           <div id="subject"></div>

     </div>

    </header>

    <footer>



    </footer>

  </body>
</html>
<?php }} ?>
