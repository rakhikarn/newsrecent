<?php
   
   class NewsValidator
   {
   	 static function validate(){

   	 	$error = array();
  	 	  if($_POST['title'] == '')
  	 	  {
  	 	  	$error[] = 'Required field Title';
  	 	  }

  	 	  if($_POST['content'] == '')
  	 	  {
  	 	  	$error[] = 'Required field Content';
  	 	  }

  	 	  return $error;
   	 }
   }
?>