<?php

    require "../webApp/core/model.php";
   class administrator_model extends model{


       private $course;
       private $nomImage;
       private $path;
       private $session;
       private $fileName;
       private $file_tmp;
       private $file_extention_valide;
       private $file_extention_upload;
       //private $description;
       //private $parent_name;

       private $private_subject_course;
      // private $private_subject_nomImage;
       private $private_subject_path;
       private $private_subject_fileName;
       private $private_subject_file_tmp;
       private $private_subject_file_extention_valide;
       private $private_subject_file_extention_upload;
       private $private_subject_description;
       private $private_subject_parent_name;


       /*ADD NEW ARTICLES*/

       private $news_name_add;
       private $news_desc_add;
       private $news_all_desc_add;
       private $news_img_add;
       private $file_path_add;
       private $file_extention_valide_add;
       private $file_extention_upload_add;
       private $file_tmp_add;

       /*UPDATE ARTICLES*/



       /*DELETE ARTICLES*/


       /*ADD NEW TECHNOLOGIE*/

       private $tech_name_add;
       private $tech_desc_add;
       private $tech_img_add;
       private $tech_file_path_add;
       private $tech_file_extention_valide_add;
       private $tech_file_extention_upload_add;
       private $tech_tmp_add;
       private $tech_path_add;
       private $tech_video_add;
       private $tech_video_path_add;
       private $tech_video_file_extention_valide_add;
       private $tech_video_file_extention_upload_add;
       private $tech_video_tmp_add;

       /*UPDATE TECHNOLOGIE*/



       /*DELETE TECHNOLOGIE*/



       /**********************************/
       private $vid_name;
       private $vid_content;
       private $vid_src;
       private $vid_file_extention_valide;
       private $vid_file_extention_upload;
       private $vid_img_tmp;
       private $vid_img_path;
       private $vid_fileName;


       public function __construct(){

       parent::__construct();

     }


     public function check_course($submit, $courses, $file_name, $path, $image_name, $table_name, $session){

           if( isset($_POST[$submit]) AND !empty( $_FILES[$file_name] )){

               $this->course = htmlspecialchars($_POST[$courses]);
               $this->nomImage = $_POST[$image_name];
               $this->session = $session;

               if(!empty($this->course) AND !empty($this->nomImage))
                 {


                            $this->fileName = $_FILES[$file_name]["name"];
                          $this->file_tmp = $_FILES[$file_name]["tmp_name"];
                          $this->path = $path."/".$this->fileName;

                          $this->file_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
                          $this->file_extention_upload = strrchr($this->fileName,".");

                         $course_request = $this->getPDO()->prepare("SELECT*FROM $table_name WHERE course_name=?");
                         $course_request->execute(array($this->course));
                         $course_rowcount = $course_request->rowCount();
                         if($course_rowcount == 0){

                           $img_name_request = $this->getPDO()->prepare("SELECT*FROM $table_name WHERE image_name=?");
                           $img_name_request->execute(array( $this->nomImage));
                           $img_name_rowcount = $img_name_request->rowCount();

                           if($img_name_rowcount == 0){

                           if(in_array($this->file_extention_upload, $this->file_extention_valide)){

                             if(move_uploaded_file($this->file_tmp, $this->path)){

                            //  $this->file_upload($file_name,$path, $image_name, $table_name, $session);
                              $this->prepare("INSERT INTO $table_name(course_name,image_name,course_image_src,admin_id) VALUES(?,?,?,?)",array($this->course, $this->nomImage, $this->path,  $this->session));


                          }else{

                               $this->error("image not upload");

                            }
                          }else{

                             $this->error("extension not valid");

                           }

                         }else{

                             $this->error("This name already exists! choose another");

                         }

                      }else{

                            $this->error("This name already exists! choose another");

                         }


                 }else{

                    $this->error("You must fill in all fields!");

                 }

           }else{

              echo "don't existe";

           }
         }



            public function private_subject($submit,  $private_courses, $private_desc, $private_file_name, $parent_name){


              if(isset($_POST[$submit]) AND !empty($_FILES[$private_file_name])){


                $this->private_subject_course = htmlspecialchars($_POST[$private_courses]);
                $this->private_subject_description = $_POST[$private_desc];
                 $this->private_subject_parent_name = $_POST[$parent_name];

                 if(!empty($this->private_subject_course) AND !empty($this->private_subject_description) AND !empty($this->private_subject_parent_name)){

                   $this->private_subject_fileName = $_FILES[$private_file_name]["name"];
                   $this->private_subject_file_tmp = $_FILES[$private_file_name]["tmp_name"];
                   $this->private_subject_path = "media/geuploadImages/private_courses/".$this->private_subject_fileName;

                   $this->private_subject_file_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
                   $this->private_subject_file_extention_upload = strrchr($this->private_subject_fileName,".");

                   $subject_request = $this->getPDO()->prepare("SELECT*FROM prive_course WHERE prive_course_name=?");
                   $subject_request->execute(array($this->private_subject_course));
                   $subject_rowcount = $subject_request->rowCount();
                   if($subject_rowcount == 0){


                    if(in_array($this->private_subject_file_extention_upload, $this->private_subject_file_extention_valide)){

                       if(move_uploaded_file($this->private_subject_file_tmp, $this->private_subject_path)){

                         $insert = $this->getPDO()->prepare("INSERT INTO prive_course(prive_course_name, prive_img_src, prive_content, parent_name) VALUES(?,?,?,?)");
                         $insert->execute(array($this->private_subject_course, $this->private_subject_path, $this->private_subject_description, $this->private_subject_parent_name));

                       }else{

                            $this->error("Upload niet gelukt");

                       }


                    }else{

                        $this->error("extentie niet toegestaan");

                    }



                  }else{

                      $this->error("Kies een andere naam voor het SUBJECT NNAME");

                  }

                }else{

                    $this->error("Vul alles in");

                }

              }


            }




                 public function addNews($submit,$news_name,$news_desc,$news_file,$all_description,$news_img_path, $class_name, $value1, $value2, $value3, $value4,$value5){


                   if(isset($_POST[$submit]) AND !empty($_FILES[$news_file])){

                     $this->news_name_add = htmlspecialchars($_POST[$news_name]);
                     $this->news_desc_add = htmlspecialchars($_POST[$news_desc]);
                     $this->news_all_desc_add = htmlspecialchars($_POST[$all_description]);

                     if(!empty($this->news_name_add) AND !empty($this->news_desc_add) AND !empty($this->news_all_desc_add)){

                          $this->news_img_add = $_FILES[$news_file]['name'];
                          $this->news_tmp_add = $_FILES[$news_file]['tmp_name'];
                          $this->news_path_add = $news_img_path.'/'.$this->news_img_add;

                          $this->file_extention_valide_add = array(".jpg", ".jpeg", ".png", ".gif");
                          $this->file_extention_upload_add = strrchr($this->news_img_add,".");

                          $news_request = $this->getPDO()->prepare("SELECT*FROM newsarticles WHERE $value1=?");
                          $news_request->execute(array($this->news_name_add));
                          $news_rowcount = $news_request->rowCount();
                          if($news_rowcount == 0){

                            if(in_array($this->file_extention_upload_add, $this->file_extention_valide_add)){

                               if(move_uploaded_file($this->news_tmp_add, $this->news_path_add)){

                                 $news_insert = $this->getPDO()->prepare("INSERT INTO $class_name($value1,$value2,$value3,$value4,$value5) VALUES(?,?,?,?,NOW())");
                                 $news_insert->execute(array($this->news_name_add, $this->news_desc_add,$this->news_all_desc_add, $this->news_path_add));


                               }else{

                                 $this->error("Image not upload");
                               }

                            }else{

                             $this->error("This extention is not accepted");

                            }

                         }else{

                            $this->error("this name al resdy exist");

                         }


                     }else{

                       $this->error("Fill all fields");

                     }


                   }else{

                    // $this->error("don't also exist");
                   }
                 }



               //$administrator_model->addInvention('upload_inv','tech_title','img_name','tech_file_name','video_file');

                 public function addInvention($submit,$news_name,$news_desc,$news_file,$tech_video_file){


                   if(isset($_POST[$submit]) AND !empty($_FILES[$news_file]) AND !empty($_FILES[$tech_video_file])){

                     $this->tech_name_add = htmlspecialchars($_POST[$news_name]);
                     $this->tech_desc_add = htmlspecialchars($_POST[$news_desc]);




                     if(!empty($this->tech_name_add) AND !empty($this->tech_desc_add)){

                          $this->tech_img_add = $_FILES[$news_file]['name'];
                          $this->tech_tmp_add = $_FILES[$news_file]['tmp_name'];
                          $this->tech_path_add = 'media/geuploadImages/technologie/images/'.$this->tech_img_add;

                          $this->tech_video_add = $_FILES[$tech_video_file]['name'];
                          $this->tech_video_tmp_add = $_FILES[$tech_video_file]['tmp_name'];
                          $this->tech_video_path_add = 'media/geuploadImages/technologie/videos/'.$this->tech_video_add;

                          $this->tech_file_extention_valide_add = array(".jpg", ".jpeg", ".png", ".gif");
                          $this->tech_file_extention_upload_add = strrchr($this->tech_img_add,".");

                          $this->tech_video_file_extention_valide_add = array(".MP4", ".flv");
                          $this->tech_video_file_extention_upload_add = strrchr($this->tech_video_add,".");

                          $tech_request = $this->getPDO()->prepare("SELECT*FROM technologie WHERE title=?");
                          $tech_request->execute(array($this->tech_name_add));
                          $tech_rowcount = $tech_request->rowCount();
                          if($tech_rowcount == 0){

                            if(in_array($this->tech_file_extention_upload_add, $this->tech_file_extention_valide_add)){

                              if(in_array($this->tech_video_file_extention_upload_add, $this->tech_video_file_extention_valide_add)){

                               if(move_uploaded_file($this->tech_tmp_add, $this->tech_path_add)){

                                 if(move_uploaded_file($this->tech_video_tmp_add, $this->tech_video_path_add)){

                                   $tech_insert = $this->getPDO()->prepare("INSERT INTO technologie(title,image_name,image_src,video_src,date_created) VALUES(?,?,?,?,NOW())");
                                   $tech_insert->execute(array($this->tech_name_add, $this->tech_desc_add, $this->tech_path_add, $this->tech_video_path_add));

                               }else{

                                   $this->error("Image not upload");

                                 }

                               }else{

                                 $this->error("Image not upload");
                               }

                             }else{


                               $this->error("This extention is not accepted");
                             }

                            }else{

                             $this->error("This extention is not accepted");

                            }

                         }else{

                            $this->error("this name al resdy exist");

                         }


                     }else{

                       $this->error("Fill all fields");

                     }


                   }else{

                     //$this->error("don't exist");
                   }

                 }


                 public function addVideo($submit,$vid_name,$vid_content,$vid_src,$file_name,$file_path){

                   if(isset($_POST[$submit])){

                       $this->vid_name = $_POST[$vid_name];
                       $this->vid_src = $_POST[$vid_src];
                       $this->vid_content = $_POST[$vid_content];
                       if(!empty($this->vid_name) AND !empty($this->vid_content) AND !empty($_POST[$vid_src])){


                         $this->vid_fileName = $_FILES[$file_name]["name"];
                       $this->vid_img_tmp = $_FILES[$file_name]["tmp_name"];
                       $this->vid_img_path = $file_path."/".$this->vid_fileName;

                       $this->vid_file_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
                       $this->vid_file_extention_upload = strrchr($this->vid_fileName,".");

                       if(in_array($this->vid_file_extention_upload, $this->vid_file_extention_valide)){

                        if(move_uploaded_file($this->vid_img_tmp, $this->vid_img_path)){

                              $this->prepare("INSERT INTO technologie(video_name, video_src, image_src, content, date_uploaded) VALUES(?,?,?,?,NOW())",array($this->vid_name, $this->vid_src,$this->vid_img_path, $this->vid_content));

                        }else{


                        }

                      }else{

                        
                      }

                       }else{

                         $this->error("Vul iets in");

                       }

                   }

                 }




      /*   public function check_subject($submit, $subjects, $file_name, $path, $image_name, $table_name, $description, $parent_name){

           if( isset($_POST[$submit]) AND !empty( $_FILES[$file_name] )){

             $this->subject_nomImage =  htmlspecialchars($_POST[$image_name]);

             $this->subject_course = htmlspecialchars($_POST[$subjects]);
             $this->subject_description = htmlspecialchars($_POST[$description]);
             $this->parent_name = htmlspecialchars($_POST[$parent_name]);


               if(!empty($this->subject_course) AND !empty( $this->subject_description) AND !empty($this->parent_name) AND !empty($this->subject_nomImage))
                 {


                   $this->subject_fileName = $_FILES[$file_name]["name"];
                 $this->subject_file_tmp = $_FILES[$file_name]["tmp_name"];
                 $this->subject_path = $path."/".$this->subject_fileName;

                 $this->subject_file_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
                 $this->subject_file_extention_upload = strrchr($this->subject_fileName,".");


                    $course_request = $this->getPDO()->prepare("SELECT*FROM $table_name WHERE subject_name=?");
                    $course_request->execute(array($this->subject_course));
                    $course_rowcount = $course_request->rowCount();
                    if($course_rowcount == 0){

                      $img_name_request = $this->getPDO()->prepare("SELECT*FROM $table_name WHERE subject_image_name=?");
                      $img_name_request->execute(array( $this->subject_nomImage));
                      $img_name_rowcount = $img_name_request->rowCount();

                      if($img_name_rowcount == 0){

                        //$this->file_upload($file_name,$path, $image_name, $table_name);

                        if(in_array($this->subject_file_extention_upload, $this->subject_file_extention_valide)){

                          if(move_uploaded_file($this->subject_file_tmp, $this->subject_path)){

                         $subject_insert = $this->getPDO->prepare("INSERT INTO $table_name(subject_name,subject_image_name,image_src,description, parent_name) VALUES(?,?,?,?,?)");
                         $subject_insert->execute(array($this->subject_course, $this->subject_nomImage, $this->subject_path,  $this->subject_description, $this->parent_name));

                       }else{

                            $this->error("image not upload");

                         }
                       }else{


                          $this->error("extension not valid");

                        }


                      }else{


                        $this->error("This name already exists! choose another");
                      }
                  }else{


                       $this->error("This name already exists! choose another");
                  }

                 }else{


                     $this->error("You must fill in all fields yes!");
                 }

               }

             }*/


        public function get_admin_data($table_name,$id){

           $data = $this->prepare_fetch("SELECT*FROM $table_name WHERE id=?", array($id));
           return $data;

        }

      }


?>
