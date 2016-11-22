<?php /* Smarty version Smarty-3.1.18, created on 2016-11-14 06:06:37
         compiled from "..\webApp\vieuws\tpl_files\private\user-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22986580c57edbff399-35976379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d3e190f79b4177baeb0ac25d13dc9db7a1403f' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\private\\user-home.tpl',
      1 => 1479103584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22986580c57edbff399-35976379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580c57eddd1202_01287819',
  'variables' => 
  array (
    'index' => 0,
    'dash' => 0,
    'lessen' => 0,
    'technologie' => 0,
    'forum' => 0,
    'artikel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580c57eddd1202_01287819')) {function content_580c57eddd1202_01287819($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/user.css"/>
        <link rel="stylesheet" href="../public/css/global.css"/>
        <script src="../public/javascript/user.js"></script>

        <title>MyBand</title>
  </head>
  <body>

    <header>

      <div id="menu">
              <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" id="logo">
               <img src="" alt="Logo">
              </a>
               <nav>
                   <ul>
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['dash']->value;?>
" id="dash">Dashboard</a></li>
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['lessen']->value;?>
" id="lessen">Lessen</a></li>
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['technologie']->value;?>
" id="tech">Technologieen</a></li>
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['forum']->value;?>
" id="forum">Forum</a></li>
                       <li><a href="index.php?action=user-about" id="lessen">About</a></li>
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['artikel']->value;?>
" id="contact">Artikel</a></li>
                   </ul>
               </nav>
               <div id="sociaal">

                   <a href=""><img src="" alt="facebook"></a>
               <a href=""><img src="" alt="twitter"></a>
               <a href=""><img src="" alt="mail"></a>

               </div>



           </div>

           <div id="user_parameter">

             <img src="" alt="" id="user_avatar">
             <div id="parameter">

                <a href=""><img src="" alt="" id="params"></a>
                <a href="../public/logout.php"><img src="../public/media/images/logout.png" alt="" id="logout"></a>

             </div>

           </div>

           <div id="core">



               <div class="dashcontainer">

                   <div class="daschboard">

                       <a href="" class="less">

                           <img src="" alt="">

                           <p class="aantalLess">Gevolgd Lessen:</p>

                       </a>

                       <a href="" class="less">

                           <img src="" alt="">

                           <p class="aantalLess">Gegeven Lessen:</p>

                       </a>

                   </div>

                   <div class="daschboard">

                       <a href="" class="percentageLess">
                           <img src="" alt="" class="lessImg">

                           <span class="percentage">
                               <span class="canvasPercentage"></span>
                               <p class="aantalPercentage"></p>
                           </span>

                       </a>

                       <a href="" class="percentageLess">

                           <img src="" alt="" class="lessImg">

                           <span class="percentage">
                               <span class="canvasPercentage"></span>
                               <p class="aantalPercentage"></p>
                           </span>

                       </a>

                       <a href="" class="percentageLess">

                           <img src="" alt="" class="lessImg">

                           <span class="percentage">
                               <span class="canvasPercentage"></span>
                               <p class="aantalPercentage"></p>
                           </span>

                       </a>

                   </div>

                   <div class="daschboard">



                   </div>

               </div>

               <div id="interressante" class="container">



               </div>

               <div class="container" id="lecons">

                 <h1>Lessen</h1>
                 <div id="lessonArrContainer"></div>

               </div>

               <div class="container" id="geplubliceerd">

                   <h1>Last Nieuwheid Gepubliceerd</h1>
                   <div id="publishArrContainer"></div>

               </div>

               <div class="container" id="gebeurtenissen">

                  <h1>Gebeurtenissen</h1>
                  <div id="gebeurtenissenContainer"></div>

               </div>

           </div>

    </header>

    <footer>



    </footer>

    </body>
</html>
<?php }} ?>
