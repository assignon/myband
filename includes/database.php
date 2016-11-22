<?php 

// Set up database connection
// See http://www.php.net/manual/en/book.mysqli.php
class data_base{
    
    
    public function __construct(){
        
        
        
    }

 public static function getPDO(){
     
      try {
                  
                  $pdo = new PDO('mysql:host=localhost;dbname=myband','root','');
                 // set the PDO error mode to exception
                 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                   // echo "Connected successfully"; 
        } catch(PDOException $e)
              {
                 echo "Connection failed: " . $e->getMessage();
              }
         
      return $pdo;
     }
          

}
 

/*if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: 
    (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}*/

//echo $mysqli->host_info . "<hr>";


