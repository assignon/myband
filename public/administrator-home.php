<?php
 session_start();

  require '../webApp/controllers/administrator.controller.php';
  require '../webApp/models/administrator.model.php';

  if(isset($_GET['id']) AND $_GET['id'] > 0){

    $administrator = new administrator_controller();
    $administrator_model = new administrator_model();

     $getID = intval($_GET['id']);
     $admin_data = $administrator_model->get_admin_data('admin',$getID);

     if(isset($_SESSION['id']) AND isset($admin_data['id']) AND $_SESSION['id'] == $admin_data['id'] ){

       $administrator->administrator_page();


       $administrator_model->check_course('save_course','courseName','course_file_name','media/geuploadImages/course','course_img_name','courses', $_SESSION['id']);

       $administrator_model->addNews('upload_news','newsName','news_description','news_file_name','all_description','media/geuploadImages/news','newsarticles', 'title','content','all_content','image','date_created');

       $administrator_model->addVideo('save_tech','video_name','vid_content','video_src','techImg_src','media/geuploadImages/technologie/images');

       $administrator_model->private_subject('private_saveSubject','private_subject_name','private_subject_description','private_subject_file_name','private_subject_name_course');

      // $administrator_model->check_subject('saveSubject','subject_name','suject_file_name','media/geuploadImages/subject','subject_img_name','subject_description','subject_name_course');

         if(isset($_POST['saveSubject']) AND !empty($_FILES['subject_file_name'])){


           $subject_course = htmlspecialchars($_POST['subject_name']);
           $subject_nomImage = $_POST['subject_name'];
           $subject_description = $_POST['subject_description'];
            $subject_parent_name = $_POST['subject_name_course'];

            if(!empty($subject_course) AND !empty($subject_nomImage) AND !empty($subject_description) AND !empty($subject_parent_name)){

              $subject_fileName = $_FILES['subject_file_name']["name"];
              $subject_file_tmp = $_FILES['subject_file_name']["tmp_name"];
              $subject_path = "media/geuploadImages/subject/".$subject_fileName;

              $subject_file_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
              $subject_file_extention_upload = strrchr($subject_fileName,".");

              $subject_request = $administrator_model->getPDO()->prepare("SELECT*FROM subject WHERE subject_name=?");
              $subject_request->execute(array($subject_course));
              $subject_rowcount = $subject_request->rowCount();
              if($subject_rowcount == 0){

                $img_name_request = $administrator_model->getPDO()->prepare("SELECT*FROM subject WHERE subject_image_name=?");
                $img_name_request->execute(array($subject_nomImage));
                $img_name_rowcount = $img_name_request->rowCount();
                if($img_name_rowcount == 0){

               if(in_array($subject_file_extention_upload, $subject_file_extention_valide)){

                  if(move_uploaded_file($subject_file_tmp, $subject_path)){

                    $insert = $administrator_model->getPDO()->prepare("INSERT INTO subject(subject_name, subject_image_name, subject_image_src, description, parent_name) VALUES(?,?,?,?,?)");
                    $insert->execute(array($subject_course, $subject_nomImage, $subject_path, $subject_description, $subject_parent_name));

                  }else{

                    $administrator_model->error("Upload niet gelukt");

                  }


               }else{

                 $administrator_model->error("extentie niet toegestaan");

               }

             }else{

                $administrator_model->error("Kies een andere naam voor je afbeelding");

             }

             }else{

              $administrator_model->error("Kies een andere naam voor het SUBJECT NNAME");

             }

           }else{

            $administrator_model->error("Vul alles in");

           }

         }


         if(isset($_POST['savePublish']) AND !empty($_FILES['publish_file_name'])){


           $publish_img_name = htmlspecialchars($_POST['publish_img_name']);
           $publish_name = $_POST['publish_name'];
           $subject_description = $_POST['publish_description'];
            $subject_parent_name = $_POST['publish_name_course'];

            if(!empty($publish_img_name) AND !empty($publish_name) AND !empty($subject_description) AND !empty($subject_parent_name)){

              $subject_fileName = $_FILES['publish_file_name']["name"];
              $subject_file_tmp = $_FILES['publish_file_name']["tmp_name"];
              $subject_path = "media/geuploadImages/publish/".$subject_fileName;

              $subject_file_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
              $subject_file_extention_upload = strrchr($subject_fileName,".");

              $subject_request = $administrator_model->getPDO()->prepare("SELECT*FROM new_publish WHERE publish_name=?");
              $subject_request->execute(array($publish_name));
              $subject_rowcount = $subject_request->rowCount();
              if($subject_rowcount == 0){

                $img_name_request = $administrator_model->getPDO()->prepare("SELECT*FROM new_publish WHERE publish_img_name=?");
                $img_name_request->execute(array($publish_img_name));
                $img_name_rowcount = $img_name_request->rowCount();
                if($img_name_rowcount == 0){

               if(in_array($subject_file_extention_upload, $subject_file_extention_valide)){

                  if(move_uploaded_file($subject_file_tmp, $subject_path)){

                    $insert = $administrator_model->getPDO()->prepare("INSERT INTO new_publish(publish_name, publish_img_name, publish_img_src, publish_description, parent_name) VALUES(?,?,?,?,?)");
                    $insert->execute(array($publish_name, $publish_img_name, $subject_path, $subject_description, $subject_parent_name));

                  }else{

                    $administrator_model->error("Upload niet gelukt");

                  }


               }else{

                 $administrator_model->error("extentie niet toegestaan");

               }

             }else{

                $administrator_model->error("Kies een andere naam voor je afbeelding");

             }

             }else{

              $administrator_model->error("Kies een andere naam voor het SUBJECT NNAME");

             }

           }else{

            $administrator_model->error("Vul alles in");

           }

         }


         if(isset($_POST['saveEvent']) AND !empty($_FILES['event_file_name'])){


           $subject_course = htmlspecialchars($_POST['event_name']);

           $subject_description = $_POST['event_description'];


            if(!empty($subject_course)  AND !empty($subject_description)){

              $subject_fileName = $_FILES['event_file_name']["name"];
              $subject_file_tmp = $_FILES['event_file_name']["tmp_name"];
              $subject_path = "media/geuploadImages/event/".$subject_fileName;

              $subject_file_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
              $subject_file_extention_upload = strrchr($subject_fileName,".");

              $subject_request = $administrator_model->getPDO()->prepare("SELECT*FROM event WHERE event_name=?");
              $subject_request->execute(array($subject_course));
              $subject_rowcount = $subject_request->rowCount();
              if($subject_rowcount == 0){


               if(in_array($subject_file_extention_upload, $subject_file_extention_valide)){

                  if(move_uploaded_file($subject_file_tmp, $subject_path)){

                    $insert = $administrator_model->getPDO()->prepare("INSERT INTO event(event_name, event_img_src, event_description) VALUES(?,?,?)");
                    $insert->execute(array($subject_course, $subject_path, $subject_description));

                  }else{

                    $administrator_model->error("Upload niet gelukt");

                  }


               }else{

                 $administrator_model->error("extentie niet toegestaan");

               }

             }else{

              $administrator_model->error("Kies een andere naam voor het SUBJECT NNAME");

             }

           }else{

            $administrator_model->error("Vul alles in");

           }

         }





            if(isset($_POST['invention']) AND !empty($_FILES['tech_file_name'])){

                $title = htmlspecialchars($_POST['tech_title']);
                $image_name = htmlspecialchars($_POST['img_name']);
                $vid_src = htmlspecialchars($_POST['video_src']);
                $vid_content = htmlspecialchars($_POST['vid_content']);


                if(!empty($title) AND !empty($image_name) AND !empty($vid_src) AND !empty($vid_content)){

                    $img_file_name = $_FILES['tech_file_name']['name'];
                    $img_tmp_name = $_FILES['tech_file_name']['tmp_name'];
                    $img_path = 'media/geuploadImages/technologie/images/'.$img_file_name;

                  /*  $video_file_name = $_FILES['video_file']['name'];
                    $video_tmp_name = $_FILES['video_file']['tmp_name'];
                    $video_path = 'media/geuploadImages/technologie/videos/'.$video_file_name;*/

                    $img_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
                    $img_extention_upload = strrchr($img_file_name,".");

                  /*  $video_extention_valide = array('.mp4','.flv');
                    $video_extention_upload = strrchr($video_file_name,".");*/

                    $requete = $administrator_model->getPDO()->prepare("SELECT*FROM invention WHERE title=?");
                    $requete->execute(array($title));
                    $requete_rowcount = $requete->rowCount();

                    if($requete_rowcount == 0){

                      if(in_array($img_extention_upload, $img_extention_valide)){

                      //  if(in_array($video_extention_upload, $video_extention_valide)){

                          if(move_uploaded_file($img_tmp_name, $img_path)){

                          //  if(move_uploaded_file($video_tmp_name, $video_path)){

                                $invention_insert = $administrator_model->getPDO()->prepare("INSERT INTO invention(title,image_name,image_src,video_src,content,date_created) VALUES(?,?,?,?,?,NOW())");
                                $invention_insert->execute(array($title,$image_name,$img_path,$vid_src,$vid_content));


                            /*  }else{

                                 $administrator_model->error("Video not upload");

                              }*/

                            }else{

                                 $administrator_model->error("Image not upload");

                            }

                            /* }else{

                                $administrator_model->error("This extention is not accepted");

                             }*/

                      }else{

                          $administrator_model->error("This extention is not accepted");

                      }
                    }else{

                     $administrator_model->error("this name al resdy exist");

                    }


                } else{

                   $administrator_model->error("Fill all fields");

                }

            }



            if(isset($_POST['save_film']) AND !empty($_FILES['film_imgSrc'])){

                $title = htmlspecialchars($_POST['titel']);
                $parent_name = htmlspecialchars($_POST['parent_name']);
                $vid_src = htmlspecialchars($_POST['film_src']);
                $visible = htmlspecialchars($_POST['visibility']);


                if(!empty($title) AND !empty($parent_name) AND !empty($vid_src) AND !empty($visible)){

                    $img_file_name = $_FILES['film_imgSrc']['name'];
                    $img_tmp_name = $_FILES['film_imgSrc']['tmp_name'];
                    $img_path = 'media/geuploadImages/subject/contents/'.$img_file_name;


                    $img_extention_valide = array(".jpg", ".jpeg", ".png", ".gif");
                    $img_extention_upload = strrchr($img_file_name,".");

                    $requete = $administrator_model->getPDO()->prepare("SELECT*FROM invention WHERE video_src=?");
                    $requete->execute(array($vid_src));
                    $requete_rowcount = $requete->rowCount();

                    if($requete_rowcount == 0){

                      if(in_array($img_extention_upload, $img_extention_valide)){

                        if(move_uploaded_file($img_tmp_name, $img_path)){

                                $invention_insert = $administrator_model->getPDO()->prepare("INSERT INTO  lessons_video(titel,image_src,video_src,parent_name,visibility,date_uploaded) VALUES(?,?,?,?,?,NOW())");
                                $invention_insert->execute(array($title,$img_path,$vid_src,$parent_name,$visible));


                            }else{

                                 $administrator_model->error("Image not upload");

                            }


                      }else{

                          $administrator_model->error("This extention is not accepted");

                      }
                    }else{

                     $administrator_model->error("this name al resdy exist");

                    }


                } else{

                   $administrator_model->error("Fill all fields");

                }

            }



     }else{

       echo "u bent geen administrator";

     }


  }

 ?>
