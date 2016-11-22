
window.addEventListener("load", function(){

  var user_avatar = document.getElementById('user_avatar');
  var parameter = document.getElementById('parameter');
    var core = document.getElementById('core');

  user_avatar.addEventListener("click", function(){

      parameter.style.display = "flex";
      parameter.style.marginTop = "-100px";
        parameter.style.top = "60px";

  })

  core.addEventListener("click", function(){

    parameter.style.display = "none";

  })

})
