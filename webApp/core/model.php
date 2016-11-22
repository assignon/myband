<?php

  class model{

      private $pdo;
      private $nomImage;
      private $path;
      private $session;
      private $fileName;
      private $file_tmp;
      private $file_extention_valide;
      private $file_extention_upload;

      public function __construct(){



      }

      public function modelChild_path($modelChild){

          require '../webApp/models/'.$modelChild.'.php';

      }

      public function modelChild_instance($modelChild){

          return new $modelChild;

      }

      public function getPDO(){

          if($this->pdo == null){

            try {

                  // set the PDO error mode to exception
                 $this->pdo = $this->pdo = new PDO("mysql:host=localhost;dbname=myband",'root','');
                 //$this->pdo = new PDO("mysql:host=mysql7.000webhost.com;dbname=a3449775_myband",'a3449775_yanick','serges007');
                 $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "succes";

              } catch(PDOException $e)

              {
                 echo "Connection failed: " . $e->getMessage();
               }


          }

          return $this->pdo;

      }

      protected function prepare($statement,$array_values){


          $prepare = $this->getPDO()->prepare($statement);
          $data = $prepare->execute($array_values);


      }

      protected function prepare_fetch($statement,$array_values){

          $prepare = $this->getPDO()->prepare($statement);
          $prepare->execute($array_values);
          $data_fetch = $prepare->fetch();
          return $data_fetch;

      }

      protected function query($statement){


          $query  = $this->getPDO()->query($statement);
          return $query;

      }

      public function error($error){
         ?>

         <script type="text/javascript">

         var alone = document.getElementById("loginError");
         alone.innerHTML = "<?php echo $error ?>";
         alone.style.color = "crimson";

         </script>
       <?php

       }

      protected function admin_error($error){
         ?>

         <script type="text/javascript">

         var alone = document.getElementById("error");
         alone.innerHTML = "<?php echo $error ?>";
         alone.style.color = "crimson";

         </script>
       <?php

       }

       public function signin_err($userErr){

         ?>

         <script type="text/javascript">

         var errors = document.getElementById("error");
         errors.innerHTML = "<?php echo $userErr ?>";
        // errors.style.color = "crimson";

         </script>
       <?php

       }

      public function admin_signin_err($userErr){

         ?>

         <script type="text/javascript">

         var errors = document.getElementById("signupError");
         errors.innerHTML = "<?php echo $userErr ?>";
        // errors.style.color = "crimson";

         </script>
       <?php

       }

       public function getPOST($post){

        if(isset($_POST[$post]) AND !empty($_POST[$post])){

            return $_POST[$post];
        }

       }


      public  function file_upload($file_name,$path, $image_name, $table_name){


          if(!empty($_FILES[$file_name])){


                          $this->nomImage = $_POST[$image_name];
                          $this->session = $session;

                          if(!empty($this->nomImage)){


                               $this->fileName = $_FILES[$file_name]["name"];
                             $this->file_tmp = $_FILES[$file_name]["tmp_name"];
                             $this->path = $path."/".$fileName;

                             $this->file_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
                             $this->file_extention_upload = strrchr($fileName,".");
                            if(in_array($this->file_extention_upload, $this->file_extention_valide)){


                                if(move_uploaded_file($this->file_tmp, $this->path)){

                                    $img_insert = $this->getPDO()->prepare("INSERT INTO $table_name( subject_image_name,image_src ) VALUES(?,?)");
                                    $img_insert->execute(array($this->nomImage, $this->path));

                                     ?>


                                <?php

                                }else{

                                    ?>
                                  <p class="result"><?php  echo " de afbeelding is niet geupload"; ?></p>

                                <?php


                                }

                            }else{

                                 ?>
                                  <p class="result"><?php  echo "extention niet toegestaan"; ?></p>

                                <?php


                            }

                          }else{
                              ?>
                                  <p class="result"><?php  echo "vul alle velden in"; ?></p>

                                <?php


                          }


                      }else{

                          //echo "error";
                      }

      }








  }

?>
