<?php
/* Smarty version 3.1.30, created on 2016-10-07 17:19:18
  from "C:\wamp\www\leerjaar2\projecten\MyBand\webApp\vieuws\tpl_files\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f7d916365a72_86225052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16191979a2a469898c5ad8746ac9f192a6ae548a' => 
    array (
      0 => 'C:\\wamp\\www\\leerjaar2\\projecten\\MyBand\\webApp\\vieuws\\tpl_files\\home.tpl',
      1 => 1475860756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f7d916365a72_86225052 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/home.css"/>
        <link rel="stylesheet" href="../public/css/global.css"/>
        <?php echo '<script'; ?>
 src="../public/js/home.js"><?php echo '</script'; ?>
>
        <title>MyBand</title>
  </head>
  <body>
    <header>

       <div id="menu">
              <a href="index.php" id="logo">
               <img src="" alt="Logo">
              </a>
               <nav>
                   <ul>
                       <li><a href="lessen.php" id="home">Lessen</a></li>
                       <li><a href="technologie.php" id="tech">Technologieen</a></li>
                       <li><a href="forum.php" id="forum">Forum</a></li>
                       <li><a href="about.php" id="lessen">About</a></li>
                       <li><a href="contact.php" id="contact">Contact</a></li>
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
              <div id="slider">
                  
                  <div id="entete">
                      <video src="" controls></video>
                      <div id="news">
                          
                          <div class="lastNews"></div>
                          <div class="lastNews"></div>
                          
                      </div>
                  </div>
                  
                  <div id="flux">
                      
                  </div>
                  
              </div>

              <div id="invention">
                  
                  <div class="lastInvention"></div>
                  <div class="lastInvention"></div>
                  <div class="lastInvention"></div>
              </div>



          </div>

    </header>

    <footer>



    </footer>

  </body>
</html>
<?php }
}
