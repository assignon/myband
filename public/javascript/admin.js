window.addEventListener("load",function(){
    
    
   var signIn = document.getElementById("signed");
    
    signIn.addEventListener("click", function(){
       
        $(function(){
       
                                                             
           
              $("#signUp").animate({
                   
                  left: 900,
                   
              },{
                
               duration: 1900,   
               easing: "easeOutElastic",                   
              })
                                                                     
              $("#signin").animate({
                                                                         
                  right: -300,
                                                                         
              },{
                                                                         
                  duration: 2000,   
                  easing: "easeOutElastic",  
                                                                         
              })
              
               
                                                          
           })
     })
        
    })
    
 