<?php
session_start();
require '../webApp/models/user_home.model.php';
require '../webApp/controllers/user.controller.php';
//include '../includes/bootstrap.php';

$user_home = new user_controller();
$user_model = new user_homeModel();
//$smarty = new Smarty();

if(isset($_GET['id']) AND $_GET['id'] > 0 ){


    $getID = intval($_GET['id']);

    $userData = $user_model->get_user_data('signup',$getID);

    if( isset($_SESSION['id']) AND isset($userData['id']) AND $_SESSION['id'] == $userData['id']){

        $user_home->user_page();
      //  $smarty = $user_home->smarty_instance('Smarty');
      // $smarty->display("../webApp/vieuws/tpl_files/private/user-home.tpl");

       $lesson = $user_model->get_lesson();

       while($lessons = $lesson->fetch()){

           ?>


                <!-- <div class="lessonArr">

                   <h2><?php //echo $lessons['subject_name']; ?> </h2>

                     <a href="#"><img src="<?php //echo $lessons['subject_image_src']; ?>" alt="" /></a>

                     <p><?php //echo $lessons['description']; ?></p>

                 </div>-->




             <script type="text/javascript">

                window.addEventListener("load", function(){

                     var lecon = document.getElementById('lecons');

                     var leconContainerArr = document.getElementById('lessonArrContainer');

                     var leconContainer = document.createElement('div');
                     leconContainer.className = "lessonArr";

                     var leconContainerhead = document.createElement('h2');
                     leconContainerhead.className = "lessonArrHead";
                     leconContainerhead.innerHTML = "<?php echo $lessons['subject_name']; ?>";

                     var leconContainerlink = document.createElement('a');
                     leconContainerlink.className = "leconContainerlink";
                     leconContainerlink.href = "";

                     var leconContainerimg = document.createElement('img');
                     leconContainerimg.className = "leconContainerimg";
                     leconContainerimg.src= "<?php echo $lessons['subject_image_src']; ?>";

                     var leconContainerpara = document.createElement('h2');
                     leconContainerpara.className = "leconContainerpara";
                     leconContainerpara.innerHTML = "<?php echo $lessons['description']; ?>";

                     leconContainerlink.appendChild(leconContainerimg);

                     leconContainer.appendChild(leconContainerhead);
                     leconContainer.appendChild(leconContainerlink);
                     leconContainer.appendChild(leconContainerpara);
                     leconContainerArr.appendChild(leconContainer);
                     //lecon.appendChild(leconContainerArr);


                })

             </script>

           <?php

       }

       $publish = $user_model->get_publish();


       while($publishs = $publish->fetch()){

           ?>


              <!-- <div class="publishArr">

                 <h2><?php //echo $publishs['publish_name']; ?> </h2>

                   <a href="#"><img src="<?php //echo $publishs['publish_img_src']; ?>" alt="" /></a>

                   <p><?php //echo $publishs['publish_description']; ?></p>

               </div>-->



             <script type="text/javascript">

                window.addEventListener("load", function(){

                     var published = document.getElementById('publishArrContainer');

                     var publishedContainer = document.createElement('div');
                     publishedContainer.className = "publishedArr";

                     var publishedContainerhead = document.createElement('h2');
                     publishedContainerhead.className = "publishedArrHead";
                     publishedContainerhead.innerHTML = "<?php echo $publishs['publish_name']; ?>";

                     var publishedContainerlink = document.createElement('a');
                     publishedContainerlink.className = "publishedContainerlink";
                     publishedContainerlink.href = "";

                     var publishedContainerimg = document.createElement('img');
                     publishedContainerimg.className = "publishedContainerimg";
                     publishedContainerimg.src= "<?php echo $publishs['publish_img_src']; ?>";

                     var publishedContainerpara = document.createElement('h2');
                     publishedContainerpara.className = "publishedContainerpara";
                     publishedContainerpara.innerHTML = "<?php echo $publishs['publish_description']; ?>";

                     publishedContainerlink.appendChild(publishedContainerimg);

                     publishedContainer.appendChild(publishedContainerhead);
                     publishedContainer.appendChild(publishedContainerlink);
                     publishedContainer.appendChild(publishedContainerpara);
                     //publishedContainer.appendChild(publishedContainer);


                     published.appendChild(publishedContainer);


                })

             </script>

           <?php

       }



       $event = $user_model->get_event();


       while($events = $event->fetch()){

           ?>


               <!--<div class="eventArr">

                 <h2><?php //echo $events['event_name']; ?> </h2>

                   <a href="#"><img src="<?php //echo $events['event_img_src']; ?>" alt="" /></a>

                   <p><?php //echo $events['event_description']; ?></p>

               </div>-->



             <script type="text/javascript">

                window.addEventListener("load", function(){

                     var events = document.getElementById('gebeurtenissenContainer');

                     var gebeurtenissenContainer = document.createElement('div');
                     gebeurtenissenContainer.className = "gebeurtenissenArr";

                     var gebeurtenissenContainerhead = document.createElement('h2');
                     gebeurtenissenContainerhead.className = "gebeurtenissenArrHead";
                     gebeurtenissenContainerhead.innerHTML = "<?php echo $events['event_name']; ?>";

                     var gebeurtenissenContainerlink = document.createElement('a');
                     gebeurtenissenContainerlink.className = "gebeurtenissenContainerlink";
                     gebeurtenissenContainerlink.href = "";

                     var gebeurtenissenContainerimg = document.createElement('img');
                     gebeurtenissenContainerimg.className = "gebeurtenissenContainerimg";
                     gebeurtenissenContainerimg.src= "<?php echo $events['event_img_src']; ?>";

                     var gebeurtenissenContainerpara = document.createElement('h2');
                     gebeurtenissenContainerpara.className = "gebeurtenissenContainerpara";
                     gebeurtenissenContainerpara.innerHTML = "<?php echo $events['event_description']; ?>";

                     gebeurtenissenContainerlink.appendChild(gebeurtenissenContainerimg);

                     gebeurtenissenContainer.appendChild(gebeurtenissenContainerhead);
                     gebeurtenissenContainer.appendChild(gebeurtenissenContainerlink);
                     gebeurtenissenContainer.appendChild(gebeurtenissenContainerpara);
                     //publishedContainer.appendChild(publishedContainer);


                    events.appendChild(gebeurtenissenContainer);



                })

             </script>

           <?php

       }



    }else{

        echo 'even een account aanmaken';

    }



}else{

   echo "This ID don't exist...";

}


 ?>
