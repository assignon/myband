window.addEventListener('load', function(){


  var showForm = document.getElementById("add");
  var form = document.getElementById('form')
  var vraag = document.getElementById('question');
  var subject = document.getElementById('subject')
  var anwser = document.getElementById('answer')



  showForm.addEventListener("click", function() {

     form.style.display = "flex";

  })

  vraag.addEventListener("click", function() {

     subject.style.display = "block";

  })
 anwser.addEventListener("click", function() {

      subject.style.display = "none";

  })



})
