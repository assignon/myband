<?php


  //require '../webApp/controllers/lessen.controller.php';
  require '../webApp/models/lessen.model.php';


  $les_model = new lessen_model();
  //$lessen_controller = new lessen_controller();

//  $lessen_controller->lessen_page();

  $lessen = $les_model->get_lessen('courses');


  ?>

     <script type="text/javascript">

      /*  window.addEventListener("load", function(){

          var subject = document.getElementById("subject");
          var returnCourse = document.createElement("button");
          returnCourse.className = 'return';
          returnCourse.innerHTML = 'Terug Naar Lessen'
          subject.appendChild(returnCourse);

          returnCourse.addEventListener("click", function() {

               $(subject).animate({

                   left: 1600,
                   //marginTop:-300


               },{

                  duration: 1000,
                  easing: "easeInOutBounce",
               })

              // subject.style.marginTop ="-300";
               //returnCourse.style.bottom = '600';


          })


        })*/

     </script>

  <?php


// $lessen = $les_model->getPDO()->query("SELECT courses.course_name, courses.image_name, courses.course_image_src, subject.subject_name, subject.subject_image_name, subject.subject_image_src, subject.description, subject.parent_name FROM courses INNER JOIN subject ON courses.course_name = subject.parent_name");


    while($courses = $lessen->fetch()){

        ?>

        <script type="text/javascript">

           window.addEventListener("load", function(){

             var zoeken = document.getElementById('zoek');

            var lessen = document.getElementById("lesson");

            var container = document.getElementById("lesson_container");



            var globalCourseDiv =  document.createElement('div');
            globalCourseDiv.className = 'globalDiv';

            var course = document.createElement('a');
            course.href = "index.php?action=user-subject&onderwerp=<?php  echo $courses['course_name'];?>";
            course.className = 'course';

            var courseImg = document.createElement('img');
            courseImg.src = "<?php echo $courses['course_image_src']; ?>";
            courseImg.className = 'courseImg';

            var courseTitel =  document.createElement('p');
            courseTitel.className = 'courseTitel';
            courseTitel.innerHTML = "<?php echo $courses['course_name']; ?>";

            course.appendChild(courseImg);
            globalCourseDiv.appendChild(courseTitel);
            globalCourseDiv.appendChild(course);

            lessen.appendChild(globalCourseDiv);


     var courses = document.querySelectorAll(".course");




        /* for(var i = 0; i < courses.length; i++){

             var lessons = courses[i];

             lessons.addEventListener("click", function(){

               //subject.appendChild(returnCourse);
               //container.appendChild(subject);

              // subject.style.transition = "left 1.0s linear 0s";
              // subject.style.left = "0px";
              var subject = document.getElementById("subject");
              $(function(){


                   $(subject).animate({

                   left: 0,
                   marginTop:0



                 },{

                    duration: 2000,
                    easing: "easeOutBounce",
                  })


              })

           })



         }*/



})

</script>
<?php

}

/*  if(isset($_POST['zoek']) AND !empty($_POST['zoek'])){

    $select = $les_model->getPDO()->prepare("SELECT*FROM subject WHERE subject_name LIKE :zoekData");
    $select->execute(array('zoekData'=> '%'.$_POST['zoek'].'%'));

    if($select->rowCount() == 0){

      echo "Nieks gevonden";

    }else{

        while($data = $select->fetch()){

         ?>

            <div class="englobe">

              <h2><?php echo $data['subject_name']; ?></h2>
               <a href="#"><img src="<?php echo $data['subject_image_src']; ?>" alt="" /></a>

            </div>

            <script type="text/javascript">

              window.addEventListener("load", function() {

                var contener = document.getElementById('zoekContainer');
                var englobe = document.querySelector('.englobe');

                contener.appendChild(englobe);


              })

            </script>
         <?php

        }

    }


  }*/

?>
