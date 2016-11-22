<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 10:06:56
         compiled from "..\webApp\vieuws\tpl_files\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25121580ac67e819042-98632860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb1ff02738b54385f5194c5d86c82e82c2bbacf7' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\login.tpl',
      1 => 1478167614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25121580ac67e819042-98632860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580ac67ed8a9d1_75506603',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580ac67ed8a9d1_75506603')) {function content_580ac67ed8a9d1_75506603($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/login.css"/>
        <link rel="stylesheet" href="../public/css/global.css"/>
        <script src="../public/javascript/login.js"></script>
        <title>MyBand</title>
  </head>
  <body>

    <header>

       <div id="menu">

          <a href="index.php?action=home" id="logos"><img src="" alt="logo"></a>

           <p id="error">



           </p>

           <form action="" method="post">

               <input type="text" name="username" placeholder="Gebruikersnaam">
               <input type="password" name="password" placeholder="Wachtwoord">
               <input type="submit" name="signin" value="LoogIn">

           </form>

       </div>

       <div id="core">


           <div id="infos">

               <a href=""><img src="" alt=""><p>Niew Wachtwoord</p></a>

               <p id="micro">

                 Dit is onze inspiratie, de drijvende kracht achter ons werk en wat ons pusht elke dag uitdagingen aan te gaan. Natuurlijk werken we hard, maar het zijn dan ook mooie ambities die we willen waarmaken. We willen dat iedereen de vrijheid en het bereik heeft om te helpen een verschil te maken in de wereld.

                 Heb je een afspraak bij ons of heb je een vraag? Bezoek ons op de Evert van de Beekstraat 354 te Schiphol of neem contact op met onze klantenservice via 020-5001500.

               </p>

           </div>

           <form action="" method="post">
               <p id="loginError">j affiche les erreurs</p>
               <input type="text" name="username" placeholder="Gebruikersnaam">
               <input type="email" name="email" placeholder="Email">
               <input type="email" name="email_beves" placeholder="Email Bevestiging">
               <input type="password" name="password" placeholder="Wachtwoord">
               <input type="password" name="pass_beves" placeholder="Wachtwoord Bevestiging">
               <input type="submit" name="singup" value="Inschrijving">

           </form>

       </div>

    </header>

    <footer>



    </footer>


    </body>

</html>
<?php }} ?>
