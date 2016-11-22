<?php

  // require '../webApp/core/model.php';
class about_model extends model{
    
    
    public function __construct(){
        
        parent::__construct();
        
    }
    
    public function example($test){
        
        return $this->test = $test;
        
    }
    
}

?>