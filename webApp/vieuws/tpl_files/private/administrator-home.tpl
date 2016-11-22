<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/administrator.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../public/javascript/administrator.js"></script>
        <title>Administrator</title>
  </head>
  <body>

      <header>

        <div id="container">

            <div id="menu">

                <div class="vensters">
                    <p>Dasch Board</p>
                </div>

                <div class="vensters">
                    <p>Home</p>
                </div>

                <div class="vensters">
                    <p>User Home</p>
                </div>

                <div class="vensters">
                    <p>Lessen</p>
                </div>

                <div class="vensters">
                    <p>Technologie</p>
                </div>

                <div class="vensters">
                    <p>Forum</p>
                </div>

                <div class="vensters">
                    <p>About</p>
                </div>

                <div class="vensters">
                    <p>Contact</p>
                </div>

            </div>

            <div id="cms">

                <div class="cms-vensters">

                   1

                </div>

                <div class="cms-vensters">

                    <div class="subject">

                      <form action="" method="post" enctype="multipart/form-data">

                        <input type="text" name="newsName" placeholder="Artikel Naam"/>

                         <textarea name="news_description" id="" cols="30" rows="10" placeholder="Content"></textarea>

                         <textarea name="all_description" id="" cols="30" rows="10" placeholder="All Content"></textarea>

                        <input type="file" name="news_file_name"/>

                        <input type="submit" name="upload_news" value="Save"/>


                      </form>


                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="update_name" placeholder="Naam Update">

                            <input type="text" name="name" placeholder="Nieuw Onderwerp Naam">

                             <textarea name="subject_description" id="" cols="30" rows="10"></textarea>

                            <input type="file" name="image_update" placeholder="Nieuw Image file">

                            <input type="submit" name="update_news" value="Update">

                        </form>


                        <form action="" method="post">

                           <input type="text" name="naam_verwijderen" placeholder="Naam Verwijderen">

                           <input type="submit" name="delete_news" value="Verwijderen">

                        </form>

                    </div>

                    <div class="subject">



                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="tech_title" placeholder="Technologie Titel">

                            <input type="text" name="img_name" placeholder="Afbeelding Naam">

                            <input type="file" name="tech_file_name" placeholder="Image">

                            <input type="text" name="video_src" placeholder="video bron">

                            <textarea name="vid_content" id="" cols="30" rows="10"></textarea>

                          <!--  <input type="file" name="video_file" placeholder="Video">-->

                            <input type="submit" name="invention" value="Save">

                        </form>


                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="nieuw_name" placeholder="Naam Update">

                            <input type="file" name="nieuw_image">

                            <input type="submit" name="update_tech" value="Update">

                        </form>


                        <form action="" method="post">

                            <input type="text" name="delete_name" placeholder="Naam Delete">


                            <input type="submit" name="delete_tech" value="Verwijderen">

                        </form>

                    </div>



                    <div class="subject">

                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="titel" placeholder="Titel">

                            <input type="file" name="lesson">

                            <textarea name="les" id="" cols="30" rows="10">

                            </textarea>

                            <input type="submit" name="upload_les" value="Upload">

                        </form>


                        <form action="" method="post" enctype="multipart/form-data">


                            <input type="text" name="titel_update" placeholder="Update Titel">

                            <input type="file" name="tussen_kopjes_update">

                            <textarea name="update_description" id="" cols="30" rows="10">

                            </textarea>


                            <input type="submit" name="update_les" value="Update">

                        </form>


                        <form action="" method="post">

                            <input type="text" name="delete_name" placeholder="Naam Delete">


                            <input type="submit" name="delete_les" value="Verwijderen">

                        </form>

                    </div>



                </div>




                <div class="cms-vensters">

                  <h1>User home</h1>

                  <div class="subject">

                    <form action="" method="post" enctype="multipart/form-data">

                        <input type="text" name="publish_name_course" placeholder="Bijhorende Onderwerp">

                        <input type="text" name="publish_name" placeholder="Subject Naam">

                        <textarea name="publish_description" id="" cols="30" rows="10"></textarea>

                        <input type="text" name="publish_img_name" placeholder="Afbeelding Naam">

                        <input type="file" name="publish_file_name">

                        <input type="submit" name="savePublish" value="Save">

                    </form>


                    <form action="" method="post" enctype="multipart/form-data">

                        <input type="text" name="name_update" placeholder="Update Name">

                        <input type="text" name="nieuw_name" placeholder="Nieuw Naam">

                        <textarea name="beschrijving_update" id="" cols="30" rows="10"></textarea>

                        <input type="file" name="nieuw_image">

                        <input type="submit" name="update_publish" value="Update">

                    </form>


                    <form action="" method="post">

                        <input type="text" name="delete_name" placeholder="Naam Delete">


                        <input type="submit" name="delete_publish" value="Verwijderen">

                    </form>



                  </div>


                  <div class="subject">

                    <form action="" method="post" enctype="multipart/form-data">

                          <input type="text" name="event_name" placeholder="Event Naam">

                        <textarea name="event_description" id="" cols="30" rows="10"></textarea>

                        <input type="file" name="event_file_name">

                        <input type="submit" name="saveEvent" value="Save">

                    </form>


                    <form action="" method="post" enctype="multipart/form-data">

                        <input type="text" name="name_update" placeholder="Update Name">

                        <input type="text" name="nieuw_name" placeholder="Nieuw Naam">

                        <textarea name="beschrijving_update" id="" cols="30" rows="10"></textarea>

                        <input type="file" name="nieuw_image">

                        <input type="submit" name="update_event" value="Update">

                    </form>


                    <form action="" method="post">

                        <input type="text" name="delete_name" placeholder="Naam Delete">


                        <input type="submit" name="delete_event" value="Verwijderen">

                    </form>



                  </div>


                </div>




                <div class="cms-vensters">

                   <h1>Lessen</h1>
                    <p id="loginError"></p>
                    <div class="subject">

                      <form action="" method="post" enctype="multipart/form-data">

                        <input type="text" name="courseName" placeholder="Onderwerp Naam"/>

                        <input type="text" name="course_img_name" placeholder="Afbeelding Naam"/>

                        <input type="file" name="course_file_name"/>

                        <input type="submit" name="save_course" value="Save"/>


                      </form>


                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="update_name" placeholder="Naam Update">

                            <input type="text" name="name" placeholder="Nieuw Onderwerp Naam">

                            <input type="text" name="image_naam" placeholder="Nieuw Image Naam">

                            <input type="file" name="image_update" placeholder="Nieuw Image file">

                            <input type="submit" name="update_course" value="Update">

                        </form>


                        <form action="" method="post">

                           <input type="text" name="naam_verwijderen" placeholder="Naam Verwijderen">

                           <input type="submit" name="delete_course" value="Verwijderen">

                        </form>

                    </div>

                    <div class="subject">


                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="subject_name_course" placeholder="Bijhorende Onderwerp">

                            <input type="text" name="subject_name" placeholder="Subject Naam">

                            <textarea name="subject_description" id="" cols="30" rows="10"></textarea>

                            <input type="text" name="subject_img_name" placeholder="Afbeelding Naam">

                            <input type="file" name="subject_file_name">

                            <input type="submit" name="saveSubject" value="Save">

                        </form>


                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="name_update" placeholder="Update Name">

                            <input type="text" name="nieuw_name" placeholder="Nieuw Naam">

                            <textarea name="beschrijving_update" id="" cols="30" rows="10"></textarea>

                            <input type="file" name="nieuw_image">

                            <input type="submit" name="update_subject" value="Update">

                        </form>


                        <form action="" method="post">

                            <input type="text" name="delete_name" placeholder="Naam Delete">


                            <input type="submit" name="delete_subject" value="Verwijderen">

                        </form>

                    </div>


                    <div class="subject">


                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="private_subject_name_course" placeholder="Prive Bijhorende Onderwerp">

                            <input type="text" name="private_subject_name" placeholder="Prive Subject Naam">

                            <textarea name="private_subject_description" id="" cols="30" rows="10"></textarea>

                            <input type="file" name="private_subject_file_name">

                            <input type="submit" name="private_saveSubject" value="Save">

                        </form>


                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="private_name_update" placeholder="Prive Update Name">

                            <input type="text" name="private_nieuw_name" placeholder="Prive Nieuw Naam">

                            <textarea name="private_beschrijving_update" id="" cols="30" rows="10"></textarea>

                            <input type="file" name="private_nieuw_image">

                            <input type="submit" name="private_update_subject" value="Update">

                        </form>


                        <form action="" method="post">

                            <input type="text" name="private_delete_name" placeholder="Prive Naam Delete">


                            <input type="submit" name="private_delete_subject" value="Verwijderen">

                        </form>

                    </div>


                    <div class="subject">

                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="text" name="titel" placeholder="Titel">

                            <input type="text" name="film_src" placeholder="Video Bron">

                            <input type="file" name="film_imgSrc" placeholder="Afbeelging Bron">

                            <input type="text" name="parent_name" placeholder="Vader Naam">

                            <input type="text" name="visibility" placeholder="Prive/Publiek">

                            <input type="submit" name="save_film" value="Upload Video">

                        </form>


                        <form action="" method="post">

                            <input type="text" name="name" placeholder="Naam Update">

                            <input type="text" name="titel_update" placeholder="Update Titel">

                            <input type="text" name="tussen_kopjes_update" placeholder="Update Tussen Kopjes">

                            <textarea name="update_description" id="" cols="30" rows="10">

                            </textarea>


                            <input type="submit" name="update_lesson" value="Update">

                        </form>


                        <form action="" method="post">

                            <input type="text" name="delete_name" placeholder="Naam Delete">


                            <input type="submit" name="delete_lesson" value="Verwijderen">

                        </form>

                    </div>

                </div>

                <div class="cms-vensters">

                  <h1>Technologie Pagina</h1>

                   <div class="subject">

                     <form action="" method="post" enctype="multipart/form-data">

                       <input type="text" name="video_name" placeholder="Video Naam"/>

                       <input type="text" name="video_src" placeholder="Video Bron"/>

                       <input type="file" name="techImg_src" placeholder="Afbeelding Bron">

                       <textarea name="vid_content" rows="8" cols="40"></textarea>

                       <input type="submit" name="save_tech" value="Save"/>


                     </form>


                       <form action="" method="post" enctype="multipart/form-data">

                           <input type="text" name="update_name" placeholder="Naam Update">

                           <input type="file" name="video_update" placeholder="Nieuw Video file">
                           <textarea name="new_vid_content" rows="8" cols="40"></textarea>

                           <input type="submit" name="update_video" value="Update">

                       </form>


                       <form action="" method="post">

                          <input type="text" name="naam_verwijderen" placeholder="Naam Verwijderen">

                          <input type="submit" name="delete_video" value="Verwijderen">

                       </form>

                </div>

                <div class="cms-vensters">

                    6

                </div>

                <div class="cms-vensters">

                    7

                </div>

                <div class="cms-vensters">

                    8

                </div>

            </div>

        </div>

      </header>

      <footer>



      </footer>

    </body>
</html>
