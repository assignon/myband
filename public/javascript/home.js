window.addEventListener("load",function(){
    
   
    var video = document.getElementById('video');
    
    var play = document.querySelectorAll('.play');
    
    play[0].addEventListener('click',function(){
       
        video.src = '../public/media/videos/surface-book.mp4';
        
        video.play();
        
    })
    
     play[1].addEventListener('click',function(){
        
        video.src = '../public/media/videos/surface-pro.mp4';
         
         video.play();
        
    })
     
      play[2].addEventListener('click',function(){
        
        video.src = '../public/media/videos/lumia.mp4';
          
          video.play();
        
    })
      
      play[3].addEventListener('click',function(){
        
        video.src = '../public/media/videos/hololens.mp4';
          
          video.play();
        
    })
    
    
    
    
})