<?php

  require "../webApp/core/model.php";

  class admin_model extends model{


     /* sign up variabels*/
          private $username;
          private $email;
          private $pass;

          /*sign in variabels*/

          private $user_signin;
          private $password;



        public function __construct(){

          parent::__construct();

        }


        public function check_registration($submit,$username,$email,$pass){

           if(isset($_POST[$submit])){

               $this->username = htmlspecialchars($_POST[$username]);
               $this->email = htmlspecialchars($_POST[$email]);
               $this->pass = sha1($_POST[$pass]);

               if(!empty($this->username) AND !empty($this->email) AND !empty($this->pass))
                 {

                    $username_len = strlen($this->username);
                    if($username_len <= 15){
                         $username_request = $this->getPDO()->prepare("SELECT*FROM admin WHERE admin_name=?");
                         $username_request->execute(array($this->username));
                         $username_rowcount = $username_request->rowCount();
                         if($username_rowcount == 0){

                             if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){


                                  $email_request = $this->getPDO()->prepare("SELECT*FROM admin WHERE admin_email=?");
                                  $email_request->execute(array($this->email));
                                  $email_rowcount = $email_request->rowCount();

                                   if($email_rowcount == 0){

                                     $pass_len = strlen($_POST[$pass]);

                                     if($pass_len > 7){


                                           if($_POST[$pass] != $this->username){

                                              $this->prepare("INSERT INTO admin(admin_name,admin_email,admin_password) VALUES(?,?,?)",array($this->username,$this->email,$this->pass));
                                               ?>

                                                  <script type="text/javascript">

                                                      window.addEventListener("load",function(){


                                                            $(function(){



                                                                     $("#signUp").animate({

                                                                         left: 900,

                                                                     },{

                                                                      duration: 1700,
                                                                      easing: "easeOutElastic",
                                                                     })

                                                                     $("#signin").animate({

                                                                         right: -300,

                                                                     },{

                                                                         duration: 1700,
                                                                         easing: "easeOutElastic",

                                                                     })



                                                                  })
                                                            })


                                                        </script>


                                              <?php


                                         }else{

                                         $this->admin_error("Your password must be different from your name");

                                       }


                                     }else{

                                       $this->admin_error("Your passwords should not be lesse than 7 characters");

                                    }

                                   }else{

                                     $this->admin_error("This email already exists! choose another");

                                   }



                             }else{

                              $this->admin_error("Email not valide");

                             }

                         }else{

                            $this->admin_error("This name already exists! choose another");

                         }

                    }else{

                        $this->admin_error("Your name should not exceed 15 characters");

                    }

                 }else{

                    $this->admin_error("You must fill in all fields!");

                 }

           }

        }



             public function signIn($submit,$username,$password){

          if(isset($_POST[$submit])){

              $this->user_signin = $_POST[$username];
              $this->password = sha1($_POST[$password]);

              if(!empty($this->user_signin) AND !empty($this->password)){

                  $user_data = $this->getPDO()->prepare("SELECT*FROM admin WHERE admin_name=? AND admin_password=?");
                  $user_data->execute(array($this->user_signin,$this->password));
                  $user_data_row = $user_data->rowCount();
                  if($user_data_row == 1){

                     $user_data_fetch = $user_data->fetch();
                     $_SESSION['id'] = $user_data_fetch['id'];
                     $_SESSION['admin_name'] = $user_data_fetch['admin_name'];
                     $_SESSION['admin_password'] = $user_data_fetch['admin_password'];
                     header("Location: administrator-home.php?id=".$_SESSION['id']);

                  }else{

                    $this->signin_err("Username of password don't existe!");
                      ?>


                    <script type="text/javascript">

                        window.addEventListener("load",function(){


                             $(function(){



                                       $("#signUp").animate({

                                           left: 900,

                                       },{

                                        duration: 1700,
                                        easing: "easeOutElastic",
                                       })

                                       $("#signin").animate({

                                        right: -300,

                                       },{

                                        duration: 1700,
                                        easing: "easeOutElastic",

                                       })

                                        $("#signupError").html("Username of password not correct! Try it again! Succes")

                                    })
                              })


                          </script>


                      <?php

                  }

              }else{

                  $this->signin_err("You must fill in all fields!");
                  ?>


                <script type="text/javascript">

                    window.addEventListener("load",function(){


                          $(function(){



                                   $("#signUp").animate({

                                       left: 900,

                                   },{

                                    duration: 1700,
                                    easing: "easeOutElastic",
                                   })

                                   $("#signin").animate({

                                       right: -300,

                                   },{

                                       duration: 1700,
                                       easing: "easeOutElastic",

                                   })

                                     $("#signupError").html("You must fill in all fields!");

                                })
                          })


                      </script>


                  <?php

              }

          }

        }


  }

 ?>
