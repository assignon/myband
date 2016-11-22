<?php

 require '../webApp/controllers/forum.controller.php';
 require '../webApp/models/forum.model.php';
 //include '../includes/bootstrap.php';

 //$smarty = $this->smarty_instance('Smarty');

 $forum_model = new forum_model();
  $forum = new forum_controller();

  //$forum->user_forum_page();


  if(isset($_POST['post'])){

   if(isset($_POST['quetion-answer']) AND $_POST['quetion-answer'] == "Vraag"){

        $forum_model->addQuestions('post','user_name','subject','qa',$_SESSION['id']);

   }else if(isset($_POST['quetion-answer']) AND $_POST['quetion-answer'] == "Antwoord"){

       $forum_model->addAnswers('post','user_name','qa',$_SESSION['id']);

   }

 }

    $question = $forum_model->select_questions();
    $answer = $forum_model->select_answers();



    $data = array();

    while($questions = $question->fetch()){
      ?>
       <div class='forum'>

            <div class='forum_container'>

                <img src='' class='avatar' >
                <div class='head'>

                  <h2><?php echo $questions['subject']; ?></h2>

                  <div class='name'>

                    <h3><?php echo $questions['user_name']; ?></h3>

                    <h3><?php echo $questions['date_posted']; ?></h3>

                  </div>

                </div>

            </div>

            <p class='contents'><?php echo $questions['question']; ?></p>

       </div>


          <script type="text/javascript">

             window.addEventListener("load", function() {

                var core = document.getElementById('core');
                var container = document.querySelector(".forum");

                var header = document.querySelector('.head');
                var content = document.querySelector('.contents');

                header.addEventListener("click", function() {

                   $(function(){

                     $(content).animate({

                     marginTop: 0,


                   },{

                      duration: 1000,
                      easing: "easeInOutBounce",
                    })


                   })

                })

                $(content).click(function(){

                  $(content).animate({

                  marginTop: -70,


                },{

                   duration: 1000,
                   easing: "easeInOutBounce",
                 })


                })

                core.appendChild(container);

             })

          </script>

       <?php

    }



    while($answers = $answer->fetch()){
      ?>
       <div class='forum'>

            <div class='forum_container'>

                <img src='' class='avatar2' >
                <div class='head2'>

                  <div class='name'>

                    <h2><?php echo $answers['user_name']; ?></h2>

                    <h2><?php echo $answers['date_posted']; ?></h2>

                  </div>

                </div>

            </div>

            <p class='contents'><?php echo $answers['answer']; ?></p>

       </div>


          <script type="text/javascript">

             window.addEventListener("load", function() {

                var core = document.getElementById('core');
                var container = document.querySelector(".forum");

                var header = document.querySelector('.head2');
                var content = document.querySelector('.contents');

                header.addEventListener("click", function() {

                   $(function(){

                     $(content).animate({

                     marginTop: 0,


                   },{

                      duration: 1000,
                      easing: "easeInOutBounce",
                    })


                   })

                })

                $(content).click(function(){

                  $(content).animate({

                  marginTop: -70,


                },{

                   duration: 1000,
                   easing: "easeInOutBounce",
                 })


                })

                core.appendChild(container);

             })

          </script>

       <?php

    }

    $smarty->assign('question',$data);
    $smarty->assign("answer",$answer);


 ?>
