<?php

  require "../webApp/core/model.php";

  class tech_model extends model{

    public function __construct(){

      parent::__construct();

    }

    public function display_technologie(){


       $select = $this->query("SELECT*FROM technologie ORDER BY date_uploaded DESC");

       while($display = $select->fetch()){

        ?>

          <script type="text/javascript">

           window.addEventListener("load", function(){

            var technologie = document.getElementById("technologie");

            var techContainer = document.createElement("div");
            techContainer.className = "techContainer";

            var techImg = document.createElement("img");
            techImg.className = "techImg";
            techImg.src = "<?php echo $display['image_src']; ?>";

            //var vidContainer = document.createElement("div");
          //  techContainer.className = "vidVenster";

            var close = document.createElement("button");
            close.className = "vidClose";
            close.innerHTML = "Sluiten";


            var contentContainer = document.createElement("div");
            contentContainer.className = "contentContainer";

            var content = document.createElement("p");
            content.innerHTML = "<?php echo $display['content'];?>";
            content.className = "vidContent";

            var video = document.createElement("iframe");
            video.src = "https://www.youtube.com/embed/<?php echo $display['video_src'];?>";
            video.className = "frame";

            techContainer.appendChild(techImg);
            technologie.appendChild(techContainer);

            techImg.addEventListener("click", function(e){


                contentContainer.style.marginTop = -e.target.offsetTop;
                contentContainer.style.marginBottom = e.target.offsetTop;
                //alert(e.target.offsetTop);
                contentContainer.appendChild(content);
                contentContainer.appendChild(close);
                contentContainer.appendChild(video);
              //  vidContainer.appendChild(contentContainer);
                document.body.appendChild(contentContainer);




            })

            close.addEventListener("click", function(){

               document.body.removeChild(contentContainer);

            })


          })

          </script>

        <?php


       }

    }



  }

 ?>
