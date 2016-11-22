<?php

require "../webApp/core/model.php";

class forum_model extends model{

  /**************ANSWERS VARIABELS**************/

   private $Auser_name;
   private $Aanswer;


   private $Quser_name;
   private $Qquestion;
   private $Qsubject;


  public function __construct(){

     parent::__construct();

  }

  public function ex($value)
  {
    echo $value;
  }

  public function addAnswers($submit,$user_name,$answer,$user_id){

         if(isset($_POST[$submit])){

           $this->Auser_name = $_POST[$user_name];
           $this->Aanswer = $_POST[$answer];


           if(!empty($this->Auser_name) AND !empty($this->Aanswer)){

               $forum_insert = $this->getPDO()->prepare("INSERT INTO forum_answers(user_name, answer,date_posted, user_id) VALUES(?,?,NOW(),? )");
               $forum_insert->execute(array($this->Auser_name, $this->Aanswer,$user_id));

           }else{

              echo "vul iets in";
           }

         }


  }


  public function addQuestions($submit,$user_name,$subject,$question,$user_id){

         if(isset($_POST[$submit])){

           $this->Quser_name = $_POST[$user_name];
           $this->Qquestion = $_POST[$question];
           $this->Qsubject = $_POST[$subject];

           if(!empty($this->Quser_name) AND !empty($this->Qquestion) AND !empty($this->Qsubject)){

              $insert_quetions =  $this->getPDO()->prepare("INSERT INTO forum_question(user_name, subject,question,date_posted, user_id) VALUES(?,?,?,NOW(),? )");
               $insert_quetions->execute(array($this->Quser_name,$this->Qsubject, $this->Qquestion,$user_id));

           }else{

               echo "vul iets in";
           }

         }


  }


  public function select_questions(){

    $select = $this->query("SELECT*FROM forum_question ORDER BY date_posted DESC");
    return $select;

  }

  public function select_answers(){

    $select = $this->query("SELECT*FROM forum_answers ORDER BY date_posted DESC");
    return $select;

  }

}

 ?>
