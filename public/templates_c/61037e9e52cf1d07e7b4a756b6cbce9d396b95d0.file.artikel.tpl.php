<?php /* Smarty version Smarty-3.1.18, created on 2016-11-14 09:01:25
         compiled from "..\webApp\vieuws\tpl_files\private\artikel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2184581a7979a7dbd6-70963575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61037e9e52cf1d07e7b4a756b6cbce9d396b95d0' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\private\\artikel.tpl',
      1 => 1479106980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2184581a7979a7dbd6-70963575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581a7979a7f834_35598803',
  'variables' => 
  array (
    'dash' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581a7979a7f834_35598803')) {function content_581a7979a7f834_35598803($_smarty_tpl) {?><!DOCTYPE html>
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

                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['dash']->value;?>
" id="home">Dashboard</a></li>
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


           </div>
          

          <div id="artikelen"></div>

      </header>

      <footer>



      </footer>

    </body>
</html>
<?php }} ?>
