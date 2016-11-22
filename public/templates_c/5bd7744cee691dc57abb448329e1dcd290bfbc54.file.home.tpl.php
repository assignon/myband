<?php /* Smarty version Smarty-3.1.18, created on 2016-11-14 07:37:08
         compiled from "..\webApp\vieuws\tpl_files\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103765809d88fcac259-71088421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bd7744cee691dc57abb448329e1dcd290bfbc54' => 
    array (
      0 => '..\\webApp\\vieuws\\tpl_files\\home.tpl',
      1 => 1479108933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103765809d88fcac259-71088421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5809d890111278_54150121',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5809d890111278_54150121')) {function content_5809d890111278_54150121($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/home.css"/>
        <link rel="stylesheet" href="../public/css/global.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../public/javascript/home.js"></script>
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
                      <div id="slide-post">

                          <video  controls poster="../public/media/images/hololens.jpg" id="video">

                             <source src="../public/media/videos/hololens.mp4" type="video/mp4">
                              Your browser does not support the video tag.

                          </video>
                          <div id="post">

                              <div class="last-post">

                                  <div class="play"></div>

                              </div>

                              <div class="last-post">

                                  <div class="play"></div>

                              </div>

                              <div class="last-post">

                                  <div class="play"></div>

                              </div>

                              <div class="last-post">

                                  <div class="play"></div>

                              </div>

                          </div>

                      </div>


                  </div>

              </div>

              <div id="about">

                  <div id="inv-news">

                    <h1 id="news-head">Last Nieuws</h1>

                      <div id="news">

                        <!--  <div class="lastNews">

                              <img src="" alt="" class="bericht">
                              <p class="bericht"></p>

                          </div>

                          <div class="lastNews">

                              <img src="" alt="" class="bericht">
                              <p class="bericht"></p>

                          </div>-->


                      </div>
                      <div id="inventions">

                        <h1 id="inv_head">Last Producten</h1>

                        <div id="invention">


                        </div>


                      </div>


                  </div>
                  <aside>

                      <div id="rss">

                          <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="?widget_parameter=%7B%22sources%22%3A%5B%7B%22source%22%3A%22https%3A%2F%2Fblogs.windows.com%2Ffeed%2F%22%2C%22type%22%3A%22RSS%22%7D%5D%2C%22name%22%3A%22%22%2C%22width%22%3A%22300%22%2C%22height%22%3A0%2C%22height_by_article%22%3A%223%22%2C%22target%22%3A%22_blank%22%2C%22font%22%3A%22Verdana%2C%20Arial%2C%20sans-serif%22%2C%22title_font_size%22%3A%2216%22%2C%22item_title_font_size%22%3A%2216%22%2C%22item_description_font_size%22%3A%2212%22%2C%22border%22%3A%22on%22%2C%22css_url%22%3A%22%22%2C%22responsive%22%3A%22off%22%2C%22text_direction%22%3A%22left%22%2C%22text_alignment%22%3A%22left%22%2C%22corner%22%3A%22rounded%22%2C%22scroll%22%3A%22on%22%2C%22auto_scroll%22%3A%22on_mc%22%2C%22auto_scroll_direction%22%3A%22up%22%2C%22auto_scroll_step_speed%22%3A%224%22%2C%22auto_scroll_mc_speed%22%3A%2230%22%2C%22sort%22%3A%22new%22%2C%22title%22%3A%22on%22%2C%22title_sentence%22%3A%22Microsoft%20Producten%20(RSS%20feed)%22%2C%22title_link%22%3A%22%22%2C%22title_bgcolor%22%3A%22%23ff6699%22%2C%22title_color%22%3A%22%23505659%22%2C%22title_bgimage%22%3A%22%22%2C%22item_bgcolor%22%3A%22%23ffffff%22%2C%22item_bgimage%22%3A%22%22%2C%22item_title_length%22%3A%2255%22%2C%22item_title_color%22%3A%22%232e7ec8%22%2C%22item_border_bottom%22%3A%22on%22%2C%22item_description%22%3A%22both%22%2C%22item_link%22%3A%22off%22%2C%22item_description_length%22%3A%22100%22%2C%22item_description_color%22%3A%22%23505659%22%2C%22item_date%22%3A%22on%22%2C%22item_date_format%22%3A%22%25b%20%25e%2C%20%25Y%20%25k%3A%25M%22%2C%22item_date_timezone%22%3A%22%22%2C%22item_description_style%22%3A%22thumbnail%22%2C%22item_thumbnail%22%3A%22crop%22%2C%22item_thumbnail_selection%22%3A%22auto%22%2C%22article_num%22%3A%2215%22%2C%22item_player%22%3A%22youtube%22%2C%22keyword_inc%22%3A%22%22%2C%22keyword_exc%22%3A%22%22%7D"></script> <!-- end feedwind code -->

                      </div>
                      <div id="article"></div>

                  </aside>

              </div>
              <div id="courses">

                <h1>Populaire Lessen</h1>

                <div id="lesson">

                </div>

              </div>


    </header>

    <footer>



    </footer>

  </body>
</html>
<?php }} ?>
