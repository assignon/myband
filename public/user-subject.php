<?php

  require '../webApp/models/subject.model.php';

  $subject_model = new subject_model();

  if(isset($_GET['onderwerp']) AND !empty($_GET['onderwerp'])){

      $getSubject = $_GET['onderwerp'];

  }

$subject = $subject_model->get_subject($getSubject);



while($subjects = $subject->fetch()){

  ?>

<!--  <p class="subjectContent">
     <?php //echo $subjects['description']; ?>
  </p>-->

  <script type="text/javascript">

window.addEventListener("load", function(){


  var subject = document.getElementById("subject");
    //subject.className = 'subject';

    var container = document.createElement("div");
    container.className = "lesson_container";


     var subjects = document.createElement('div');
     subjects.className = 'subjects';

     var subjectImg = document.createElement('img');
     subjectImg.className = 'subjectImg';
     subjectImg.src = "<?php echo $subjects['subject_image_src']; ?>";

     var h2 = document.createElement('h2');
     h2.className = 'subjectHeader';
     h2.innerHTML = "<?php echo $subjects['subject_name']; ?>";


     var subjectContent = document.createElement('subjectContent');
     subjectContent.className = 'subjectContent';
     subjectContent.innerHTML = "<?php echo $subjects['description']; ?>";

     var subjectLink = document.createElement('a');
     subjectLink.href = "index.php?action=user-subjectContent&onderwerp=<?php echo $subjects['subject_name'];?>";
     subjectLink.className = 'subjectLink';
     subjectLink.innerHTML = "Volgen";


     subjects.appendChild(h2);
     subjects.appendChild(subjectImg);
     subjects.appendChild(subjectContent);
     subjects.appendChild(subjectLink);

     subjects.addEventListener("click",function(){


     })

     container.appendChild(subjects);
     subject.appendChild(container);



   })

    </script>

  <?php

}
?>

  <script type="text/javascript">

       window.addEventListener("load", function(){

         var container = document.querySelector(".lesson_container");

         var onderwerp = document.createElement('h1');
         onderwerp.className = 'onderwerp';
         onderwerp.innerHTML = "<?php echo $getSubject; ?>";

         container.appendChild(onderwerp);



       })

  </script>

<?php


 ?>
