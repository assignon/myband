<?php
require '../webApp/core/model.php';
 class login extends model{



     /* sign up variabels*/
          private $username;
          private $email;
          private $emailConf;
          private $pass;
          private $passConf;

          /*sign in variabels*/

          private $user_signin;
          private $password;



        public function __construct(){

          parent::__construct();

        }


        public function check_registration($submit,$username,$email,$emailConf,$pass,$passConf){

           if(isset($_POST[$submit])){

               $this->username = htmlspecialchars($_POST[$username]);
               $this->email = htmlspecialchars($_POST[$email]);
               $this->emailConf= htmlspecialchars($_POST[$emailConf]);
               $this->pass = sha1($_POST[$pass]);
               $this->passConf = sha1($_POST[$passConf]);

               if(!empty($this->username) AND !empty($this->email) AND !empty($this->emailConf) AND !empty($_POST[$pass]) AND !empty($_POST[$passConf]))
                 {

                    $username_len = strlen($this->username);
                    if($username_len <= 15){
                         $username_request = $this->getPDO()->prepare("SELECT*FROM signup WHERE username=?");
                         $username_request->execute(array($this->username));
                         $username_rowcount = $username_request->rowCount();
                         if($username_rowcount == 0){

                             if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){

                                if($this->email == $this->emailConf){

                                  $email_request = $this->getPDO()->prepare("SELECT*FROM signup WHERE email=?");
                                  $email_request->execute(array($this->email));
                                  $email_rowcount = $email_request->rowCount();

                                   if($email_rowcount == 0){

                                     $pass_len = strlen($_POST[$pass]);
                                     $passConf_len = strlen($_POST[$passConf]);

                                     if($pass_len > 7 AND $passConf_len > 7){

                                       if($this->pass == $this->passConf){

                                           if($_POST[$pass] != $this->username AND $_POST[$passConf] != $this->username){

                                              $this->prepare("INSERT INTO signup(username,email,password) VALUES(?,?,?)",array($this->username,$this->email,$this->pass));


                                         }else{

                                         $this->error("Your password must be different from your name");

                                       }

                                       }else{

                                        $this->error("Both your passwords do not match");

                                       }

                                     }else{

                                       $this->error("Your passwords should not be lesse than 7 characters");

                                    }

                                   }else{

                                     $this->error("This email already exists! choose another");

                                   }

                                }else{

                                  $this->error("Both your emails do not match");


                                }

                             }else{

                              $this->error("Email not valide");

                             }

                         }else{

                            $this->error("This name already exists! choose another");

                         }

                    }else{

                        $this->error("Your name should not exceed 15 characters");

                    }

                 }else{

                    $this->error("You must fill in all fields!");

                 }

           }

        }



             public function signIn($submit,$username,$password){

          if(isset($_POST[$submit])){

              $this->user_signin = $_POST[$username];
              $this->password = sha1($_POST[$password]);

              if(!empty($this->user_signin) AND !empty($this->password)){

                  $user_data = $this->getPDO()->prepare("SELECT*FROM signup WHERE username=? AND password=?");
                  $user_data->execute(array($this->user_signin,$this->password));
                  $user_data_row = $user_data->rowCount();
                  if($user_data_row == 1){

                     $user_data_fetch = $user_data->fetch();
                     $_SESSION['id'] = $user_data_fetch['id'];
                     $_SESSION['username'] = $user_data_fetch['username'];
                     $_SESSION['password'] = $user_data_fetch['password'];
                     header("Location: user-home.php?id=".$_SESSION['id']);

                  }else{

                    $this->signin_err("Username of password don't existe!");

                  }

              }else{

                  $this->signin_err("You must fill in all fields!");

              }

          }

        }

 }


?>
