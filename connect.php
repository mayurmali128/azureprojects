<?php  
   require 'vendor/autoload.php';  
   // Creating Connection  
   $con = new MongoDB\Client("mongodb://localhost:27017");  
   // Creating Database  
   $db = $con->azurp;  
   // Creating Document  
   $collection1 = $db->hoslogin; 
   $collection2 = $db->hosinfo; 
   // Insering Record  
   //$collection->insertOne( [ 'hname' =>'hospital1','pas'=>'12345678'] );  
   // Fetching Record  
   //$record = $collection->find( [ 'hname' =>'hospital1'] );  
   //foreach ($record as $hos) {  
//}  
?> 