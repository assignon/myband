<?php
//  require "../webApp/core/model.php";
  class home_model extends model{



      public function __construct(){

          parent::__construct();

      }

      public function select_news(){

           $news = $this->query('SELECT*FROM newsarticles ORDER BY date_created DESC LIMIT 2');

           return $news;

      }

      public function select_tech(){

           $technologie = $this->query('SELECT*FROM invention ORDER BY date_created DESC LIMIT 3');

           return $technologie;

      }

      public function get_subject_for_home(){

        $subject = $this->query("SELECT*FROM subject ORDER BY id DESC LIMIT 4");


        return $subject;


      }

      public function display_news(){

        $displayNews = $this->select_news();

        while($news = $displayNews->fetch()){

           ?>

               <script type="text/javascript">

                 window.addEventListener("load", function(){
                      var news = document.getElementById("news");

                      var lastNews = document.createElement("div");
                      lastNews.className = 'lastNews';

                      var newsImg = document.createElement("img");
                      newsImg.className = 'bericht';
                      newsImg.src = "<?php echo $news['image']; ?>";

                      var newsContent = document.createElement("p");
                      newsContent.className = 'bericht';
                      newsContent.innerHTML = "<?php echo $news['content']; ?>";

                      var more = document.createElement("a");
                      more.className = 'more';
                      more.href = "index.php?action=artikel";
                      more.innerHTML = "Meer Lezen";

                      lastNews.appendChild(newsImg);
                      lastNews.appendChild(newsContent);
                      lastNews.appendChild(more);

                      news.appendChild(lastNews);

                    })
               </script>

           <?php


        }


      }



      public function display_invention(){

        $displayInv = $this->select_tech();

        while($invention = $displayInv->fetch()){

           ?>

               <script type="text/javascript">

                 window.addEventListener("load", function(){

                   $(function(){
                      var invention = document.getElementById("invention");

                      var lastInvention = document.createElement("div");
                      lastInvention.className = 'lastInvention';

                      var inventionImg = document.createElement("img");
                      inventionImg.className = 'inventionImg';
                      inventionImg.src = "<?php echo $invention['image_src']; ?>";

                      lastInvention.appendChild(inventionImg);

                      var inventionContainer = document.createElement("div");
                      inventionContainer.className = 'inventionContainer';

                      //var inventionVideo = document.createElement('video');
                        var playButton = document.createElement("div");
                        playButton.className = 'playVideo';


                      lastInvention.addEventListener("mouseover", function(e){


                          lastInvention.appendChild(playButton);
                          playButton.style.opacity = "1";


                          //  $(".playVideo").toggle( "scale" );


                      })

                      lastInvention.addEventListener("mouseout", function(){

                            playButton.style.opacity = "0";



                      })

                      var close = document.createElement("button");
                      close.className = "vidClose";
                      close.innerHTML = "Sluiten";

                      var vidContainer = document.createElement("div");
                      vidContainer.className = "vidVenster";

                      var contentContainer = document.createElement("div");
                      vidContainer.className = "contentContainer";

                      var content = document.createElement("p");
                      content.innerHTML = "<?php echo $invention['content'];?>";
                      content.className = "vidContent";

                      var techLink = document.createElement("a");
                      techLink.href = "index.php?action=technologie";
                      techLink.innerHTML = "Meer Kijken";
                      techLink.className = "linkVid";

                      var video = document.createElement("iframe");
                      video.src = "https://www.youtube.com/embed/<?php echo $invention['video_src'];?>";
                      video.className = "frame";



                      playButton.addEventListener("click", function(){

                          contentContainer.appendChild(content);
                          contentContainer.appendChild(techLink);
                          contentContainer.appendChild(close);
                          vidContainer.appendChild(video);
                          vidContainer.appendChild(contentContainer);
                          document.body.appendChild(vidContainer);

                      })

                      close.addEventListener("click", function(){


                        document.body.removeChild(vidContainer);

                      })
                    //  lastInvention.appendChild(newsContent);
                      //lastInvention.appendChild(more);

                      invention.appendChild(lastInvention);


                      })

                    })
               </script>

           <?php


        }


      }


      public function display_lesson(){

        $display = $this->get_subject_for_home();

        while($lesson_display = $display->fetch()){

          ?>

          <p class="lessonContent">
            <?php echo $lesson_display['description']; ?>
          </p>

        <script type="text/javascript">

            window.addEventListener("load",function(){

                $(function(){

               var lesson = document.getElementById('lesson');

               var lessonContainer = document.createElement("div");
               lessonContainer.className = 'lessonContainer';

               var lesson_img = document.createElement("img");
               lesson_img.className = 'lesson';
               lesson_img.src = "<?php echo $lesson_display['subject_image_src']; ?>";

               var lesson_title = document.createElement("div");
               lesson_title.className = 'lessonTitle';
               lesson_title.innerHTML = "<?php echo $lesson_display['subject_name']; ?>";

               var lessonContent = document.querySelector(".lessonContent");
               //lessonContent.className = 'lessonContent';
               //lessonContent.innerHTML = "<?php //echo $lesson_display['description']; ?>";


               var lesson_link = document.createElement("a");
               lesson_link.className = 'lessonLink';
               lesson_link .href = "index.php?action=lessen"
               lesson_link.innerHTML = "All Lessen";


               lessonContainer.appendChild(lesson_img);
               lessonContainer.appendChild(lesson_title);
               lessonContainer.appendChild(lessonContent);
               lessonContainer.appendChild(lesson_link);

               lesson.appendChild(lessonContainer);

             })

            })

          </script>

          <?php

        }

      }


      public function display_technologie(){

        $select = $this->query("SELECT*FROM technologie");

        while($display_tech = $select->fetch()){



        }

      }



  }

?>
