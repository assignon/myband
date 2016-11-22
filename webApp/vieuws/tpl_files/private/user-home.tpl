<!DOCTYPE html>
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
              <a href="{$index}" id="logo">
               <img src="" alt="Logo">
              </a>
               <nav>
                   <ul>
                       <li><a href="{$dash}" id="dash">Dashboard</a></li>
                       <li><a href="{$lessen}" id="lessen">Lessen</a></li>
                       <li><a href="{$technologie}" id="tech">Technologieen</a></li>
                       <li><a href="{$forum}" id="forum">Forum</a></li>
                       <li><a href="index.php?action=user-about" id="lessen">About</a></li>
                       <li><a href="{$artikel}" id="contact">Artikel</a></li>
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
