<?php
  include_once("modules/news/service.php");
  include_once("modules/news/validator.php");

  class NewsController
  {
  	
  	function execute()
  	{
  		$s = new NewsService();
  		//$m = new CategoryModel();

  		switch ($_REQUEST['action']) {

        case 'add':
          //print_r($_POST);
        
          $e = $s -> add(); 
          if(count($e) == 0)
            {
              ob_end_clean();
              header('Location:index.php?page=news');
              exit(); 
            }  
            
          include_once("modules/news/form.php");
          break;

          case 'delete':
            $s -> delete($_REQUEST['id']);

            $list = $s -> getAll();

            include_once("modules/news/list.php");          

          break;

          case 'update':

            if(isset($_POST['title'], $_POST['content'], $_POST['publish_date'])){
              
              $s -> update();
              $list = $s -> getAll();
              include_once("modules/news/list.php");
              return;
            }

            $f = $s-> getById($_REQUEST['id']);

            //echo "<pre>";
            //print_r($f);

            include_once("modules/news/form.php");
            break;
  			
  			default:
  				$list = $s -> getAll();

  				include_once("modules/news/list.php");
  		}
  	}
  }

  $c = new NewsController();
  $c -> execute();

?>