<?php /* Smarty version Smarty-3.1.18, created on 2016-11-14 09:01:18
         compiled from "..\webApp\vieuws\tpl_files\private\forum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2016581a628123b494-55415821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423ff77b784c123646e58d74a61fdbea4d4635e0' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\private\\forum.tpl',
      1 => 1479106972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2016581a628123b494-55415821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581a628123dbe0_72374518',
  'variables' => 
  array (
    'dash' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581a628123dbe0_72374518')) {function content_581a628123dbe0_72374518($_smarty_tpl) {?><!DOCTYPE html>
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
               </nav>
               <div id="sociaal">

                   <a href=""><img src="" alt="facebook"></a>
               <a href=""><img src="" alt="twitter"></a>
               <a href=""><img src="" alt="mail"></a>

               </div>


           </div>
          

           <div id="forumOptions">

               <form action="" method="post">

                   <input type="search" name="search_forum" placeholder="Zoek in de forum">

               </form>
               <button id="add">

                   Plaats een vraag of beantwoord een vraag

               </button>

           </div>

          <div id="container">

              <div id="searchBox">


              </div>

              <form action="" method="post" id="form">

                  <input type="text" name="user_name" placeholder="Gebruikersnaam">

                  <div id="radios">

                      <p>Vraag</p><input type="radio" name="quetion-answer" value="Vraag" id="question">

                     <p>Antwoord</p><input type="radio" name="quetion-answer" value="Antwoord" id="answer">

                  </div>

                  <input type="text" name="subject" placeholder="Onderwerp" id="subject">




                  <textarea name="qa" id="" cols="30" rows="10"></textarea>

                  <input type="submit" name="post" placeholder="Plaatsen">

              </form>

          </div>

          <div id="core">



         </div>

    </header>

    <footer>



    </footer>

    </body>
</html>
<?php }} ?>
