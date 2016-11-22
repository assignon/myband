<?php /* Smarty version Smarty-3.1.18, created on 2016-11-14 06:06:39
         compiled from "..\webApp\vieuws\tpl_files\private\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16929581a797f853fb3-18582539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '440d58f2aa1e30fbef0b29b45ae2cabd60c9aaba' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\private\\about.tpl',
      1 => 1478130295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16929581a797f853fb3-18582539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581a797f8d7a07_23581396',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581a797f8d7a07_23581396')) {function content_581a797f8d7a07_23581396($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/artikel.css"/>
        <link rel="stylesheet" href="../public/css/global.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../public/javascript/artikel.js"></script>
        <title>MyBand</title>
  </head>
  <body>
    <header>

       <div id="menu">
              <a href="index.php?action=private-home" id="logo">
               <img src="" alt="Logo">
              </a>
               <nav>
                   <ul>

                     <li><a href="index.php?action=user-lessen" id="home">Dashboard</a></li>
                     <li><a href="index.php?action=user-lessen" id="home">Lessen</a></li>
                     <li><a href="index.php?action=user-technologie" id="tech">Technologieen</a></li>
                     <li><a href="index.php?action=user-forum" id="forum">Forum</a></li>
                     <li><a href="index.php?action=user-about" id="lessen">About</a></li>
                     <li><a href="index.php?action=user-artikel" id="contact">Artikel</a></li>
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

          <div id="artikelen"></div>

      </header>

      <footer>



      </footer>

    </body>
</html>
<?php }} ?>
