<?php /* Smarty version Smarty-3.1.18, created on 2016-11-13 11:08:55
         compiled from "..\webApp\vieuws\tpl_files\subjectContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26552582820696dcd17-75853263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c30905f2c4bf62c7e24fd0bd449026331a491db' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\subjectContent.tpl',
      1 => 1479034748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26552582820696dcd17-75853263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5828206971d6b7_59640332',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5828206971d6b7_59640332')) {function content_5828206971d6b7_59640332($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/subjectContent.css"/>
        <link rel="stylesheet" href="../public/css/global.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../public/javascript/subjectContent.js"></script>
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
                    <li><a href="index.php?action=tecnologie" id="forum">Technologie</a></li>
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
          <div id="filmContainer">

             
             <h1 id="titre"></h1>
             <div id="lessonsVid"></div>

          </div>

        </header>
      </body>

  </html>
<?php }} ?>
