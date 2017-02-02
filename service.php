<?php

  class NewsService
  {
      	
		var $s;
    public function __construct()
    {
      $this -> s = DAOFactory::getTblNewsDAO();

    }
    function getAll()
    {
        
        return $this -> s->queryAll();
    }
    
    function getById($a)
    {
        return $this -> s->load($a);
    }

  	 function add(){

      $error = NewsValidator::validate();

      if (count($error) == 0) {
      $d = new TblNew();
       
      if(isset($_FILES['image']))
          {
            $destination="images/news/" . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image'][tmp_name], $destination);

            $d -> title = $_POST['title'];
            $d -> image = $_FILES['image']['name'];
            $d -> content = $_POST['content'];
            $d -> publishDate = $_POST['publish_date'];
            }
            else{             
              $d -> title = $_POST['title'];
              $d -> content = $_POST['content'];
              $d -> publishDate = $_POST['publish_date'];
          }

            $this -> s -> insert($d);
        }
        return $error;
  	 }

  	function delete($a){
  	  $s = DAOFactory::getTblNewsDAO();
      $s->delete($a);
  	}

  	function update(){

    $s = DAOFactory::getTblNewsDAO();
      
      $d = new TblNew();
      
      $d->id =$_POST['id'] ;
            
      if(isset($_FILES['image']))
        {
  		
		      $destination="images/news/" . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image'][tmp_name], $destination);

            $d -> title = $_POST['title'];
            $d -> image = $_FILES['image']['name'];
            $d -> content = $_POST['content'];
            $d -> publishDate = $_POST['publish_date'];
            }
            else{             
              $d -> title = $_POST['title'];
              $d -> content = $_POST['content'];
              $d -> publishDate = $_POST['publish_date'];
          }

           $s -> update($d);

  	}

  }

?>