<?php

  //require '../webApp/controllers/artikel.controller.php';
  require '../webApp/models/artikel.model.php';

  $artikel_model = new artikel_model();

  //$artikel_controller = new artikel_controller();

  //$artikel_controller->artikel_page();


  $artikel = $artikel_model->getPDO()->query("SELECT count(id) as nartikel FROM newsarticles");
  $artikel_fetch = $artikel->fetch();

  $narticle = $artikel_fetch['nartikel'];
  $perPagina = 3;
  //$currentPage = 1;

  $nbPage = ceil($narticle /  $perPagina);

  if(isset($_GET['p']) AND $_GET['p'] > 0 AND $_GET['p'] <= $nbPage){

    $currentPage = $_GET['p'];

  }else{

     $currentPage = 1;

  }

  for ($i=1; $i <= $nbPage; $i++) {
    echo " <a href=\"index.php?action=artikel&p=$i\" class='paginate'>$i</a> ";
  }

  $artikel_display = $artikel_model->artikel_display($currentPage,$perPagina);

   while($artikelen = $artikel_display->fetch()){

    ?>

    <div class="bericht">
       <?php echo $artikelen['content']; ?>
    </div>

    <p class="moreContent">
       <?php echo $artikelen['all_content']; ?>
    </p>

    <script type="text/javascript">

             window.addEventListener('load', function(){


            var artikel_container = document.getElementById('artikelen');
            var pagination = document.getElementById('pagination');
            var paginate = document.querySelector(".paginate");
            pagination.appendChild(paginate);

            var newsContainer = document.createElement("div");
            newsContainer.className = "newsContainer";

            //var news = document.getElementById("news");

            var lastNews = document.createElement("div");
            lastNews.className = 'lastNews';

            var newsImg = document.createElement("img");
            newsImg.className = 'bericht';
            newsImg.src = "<?php echo $artikelen['image']; ?>";

            var newsContent = document.querySelector(".bericht");
            //newsContent.className = 'bericht';
            //newsContent.innerHTML = "";

             var moreContent = document.querySelector(".moreContent");
            //moreContent.className = 'moreContent';
            //moreContent.innerHTML = "";

            var more = document.createElement("button");
            more.className = 'more';
            more.href = "";
            more.innerHTML = "Lees Alles";

            lastNews.appendChild(newsImg);
            lastNews.appendChild(newsContent);
            lastNews.appendChild(more);


            newsContainer.appendChild(moreContent);
            newsContainer.appendChild(lastNews);

            artikel_container.appendChild(newsContainer);

            var moreButt = document.querySelectorAll(".more");

              var contents = document.querySelectorAll(".moreContent");



                   $(function(){

                       $(more).click(function(){


                           $(moreContent).animate({

                           marginLeft: 0,


                         },{

                            duration: 2000,
                            easing: "easeOutExpo",
                          })


                      $(moreContent).mouseout(function(){

                          $(moreContent).animate({

                           marginLeft: -352,


                         },{

                            duration: 2000,
                            easing: "easeOutExpo",
                          })

                        })


                       })

                   })

                 })

               </script>


           <?php

         }



            ?>
