<?php

 require '../webApp/controllers/forum.controller.php';
 require '../webApp/models/forum.model.php';

 $forum_model = new forum_model();
  $forum = new forum_controller();

  //$forum->user_forum_page();
  $forum_model->ex("ca marchr");

  if(isset($_POST['post'])){

   if(isset($_POST['quetion-answer']) AND $_POST['quetion-answer'] == "Vraag"){

        $forum_model->addQuestions('post','user_name','subject','qa',$_SESSION['id']);

   }else if(isset($_POST['quetion-answer']) AND $_POST['quetion-answer'] == "Antwoord"){

       $forum_model->addAnswers('post','user_name','qa',$_SESSION['id']);

   }

  }

 ?>
