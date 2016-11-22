<?php

require '../webApp/models/subjectContent.model.php';

$subjectContent_model = new subjectContent_model();

if(isset($_GET['onderwerp']) AND !empty($_GET['onderwerp'])){

    $getSubjectContent = $_GET['onderwerp'];

}

   $subjectContent_public = $subjectContent_model->get_subjectContent_public($getSubjectContent, "public");

   $subjectContent_private = $subjectContent_model->get_subjectContent_public($getSubjectContent, "private");

   while($subjectContents = $subjectContent_public->fetch()){


    ?>

       <script type="text/javascript">


         window.addEventListener("load", function(){

            //var videoContainer = document.getElementById("video");
            var filmContainer = document.getElementById("filmContainer");
            var lessonsVidContainer = document.getElementById("lessonsVid");
            var videoHeader = document.getElementById("titre");
            videoHeader.innerHTML = "<?php echo $getSubjectContent;?>";

            var videoContainer = document.createElement("div");
            videoContainer.className = 'video';

            var lessonsvid = document.createElement("div");
            lessonsvid.className = 'lessonsvid';

            var lessonsImg = document.createElement("img");
            lessonsImg.src = "<?php echo $subjectContents['image_src']; ?>";
            lessonsImg.className = "lessonsImg";

            var lessonsHead = document.createElement("h2");
            lessonsHead.className = "lessonsHead";
            lessonsHead.innerHTML = "<?php echo $subjectContents['titel'];?>";

            var lessonsIframe = document.createElement("iframe");
            lessonsIframe.className = "iframe";
            lessonsIframe.src = "https://www.youtube.com/embed/<?php echo $subjectContents['video_src'];?>";

            var vidClose = document.createElement("button");
            vidClose.className = "closeVideo";
            vidClose.innerHTML = "Close";

            lessonsvid.appendChild(lessonsHead);
            lessonsvid.appendChild(lessonsImg);
            //lessonsvid.appendChild(lessonsImg);

            lessonsVidContainer.appendChild(lessonsvid);
            //videoContainer.appendChild(iframe);

            lessonsvid.addEventListener("click", function(e){


                 var offsetleft = e.target.parentNode.offsetTop;
                 //alert(offsetleft);
                $(function(){

                  $(videoContainer).animate({

                     top: offsetleft-550,

                     //zIndex:2,

                  },{

                    duration: 1000,
                    easing: "easeOutBounce",

                })

                })
                videoContainer.appendChild(vidClose);
                videoContainer.appendChild(lessonsIframe);
                filmContainer.appendChild(videoContainer);




            })


            vidClose.addEventListener("click",function(){



              $(function(){

                $(videoContainer).animate({

                   top: -1200,
                   //zIndex:0,

                },{

                  duration: 1000,
                  easing: "easeInOutBounce",

              })

              })

              filmContainer.removeChild(videoContainer);

            })


         })



       </script>

    <?php


   }

   while($subjectContents_private = $subjectContent_private->fetch()){

      ?>

        <script type="text/javascript">

        window.addEventListener("load", function(){

           //var videoContainer = document.getElementById("video");
           var filmContainer = document.getElementById("filmContainer");
           var lessonsVidContainer = document.getElementById("lessonsVid");
           //var videoHeader = document.getElementById("titre");
           //videoHeader.innerHTML = "<?php echo $getSubjectContent;?>";

           var videoContainer = document.createElement("div");
           videoContainer.className = 'video_private';

           var lessonsvid = document.createElement("div");
           lessonsvid.className = 'lessonsvid_private';

           var lessonsImg = document.createElement("img");
           lessonsImg.src = "<?php echo $subjectContents_private['image_src']; ?>";
           lessonsImg.className = "lessonsImg_private";

           var lessonsHead = document.createElement("h2");
           lessonsHead.className = "lessonsHead_private";
           lessonsHead.innerHTML = "<?php echo $subjectContents_private['titel'];?>";

           var privateLes = document.createElement("img");
           privateLes.src = "media/images/privateLes.png";
           privateLes.className = "privateLes";

           var linkRegister = document.createElement("a");
           linkRegister.className = "linkRegister";
           linkRegister.href = "login.php";
           linkRegister.innerHTML = "Naar Registration Pagina";

           /*var lessonsIframe = document.createElement("iframe");
           lessonsIframe.className = "iframe_private";
           lessonsIframe.src = "https://www.youtube.com/embed/<?php //echo $subjectContents_private['video_src'];?>";*/

           var vidClose = document.createElement("button");
           vidClose.className = "closeVideo_private";
           vidClose.innerHTML = "Close";

           lessonsvid.appendChild(lessonsHead);
           lessonsvid.appendChild(lessonsImg);
           //lessonsvid.appendChild(lessonsImg);

           lessonsVidContainer.appendChild(lessonsvid);
           //videoContainer.appendChild(iframe);

           lessonsvid.addEventListener("click", function(e){


                var offsetleft = e.target.parentNode.offsetTop;
                //alert(offsetleft);
               $(function(){

                 $(videoContainer).animate({

                    top: offsetleft-600,

                    //zIndex:2,

                 },{

                   duration: 1000,
                   easing: "easeOutBounce",

               })

             })
             //alert("Om deze les te kunnen volgen, ")
               videoContainer.appendChild(vidClose);
               videoContainer.appendChild(privateLes);
               videoContainer.appendChild(linkRegister);
               filmContainer.appendChild(videoContainer);




           })


           vidClose.addEventListener("click",function(){



             $(function(){

               $(videoContainer).animate({

                  top: -1200,
                  //zIndex:0,

               },{

                 duration: 1000,
                 easing: "easeInOutBounce",

             })

             })

             filmContainer.removeChild(videoContainer);

           })


        })

        </script>

      <?php


   }

   ?>
