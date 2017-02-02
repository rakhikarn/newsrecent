<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add/Edit News</h3>
    </div>

    <form role="form" method="post" action="?page=news" enctype="multipart/form-data">

         <?php
        if(count($e) > 0)
          {
        ?>
        <div class="alert-warning">
           <ul>
             <?php
               foreach ($e as $v) 
                {
              ?>
              <li><?php echo $v; ?></li>
              <?php
            }
          ?>
          </ul>
        </div>
        <?php
          }
        ?>

        <div class="box-body">
            <div class="form-group">
                <label>Title:</label>
                <input class="form-control" type="text" name="title" value="<?php echo $f -> title; ?>">
            </div>

            <div class="form-group">
                <label>Image:</label>
                <input class="form-control" type="file" name="image" value="<?php echo $f -> image; ?>">
            </div>

            <div class="form-group">
                <label>Content:</label>
                <textarea class="form-control" name="content" rows="5" cols="100"><?php echo $f -> content; ?></textarea>
            </div>

            <div class="form-group">
                <label>Publish Date:</label>
                <input type='text' class="form-control" name="publish_date" value="<?php echo $f -> publish_date; ?>">
                
                
            </div>
        </div>

        <div class="box-footer">

              <?php

                if($_REQUEST['action']=='add')
                {
              ?>
                  <input type="hidden" name="action" value="add">
                  <input class="btn btn-primary" type="submit" value="add">

              <?php   
                }
                else
                {
               ?>

                 <input type="hidden" name="action" value="update">
                 <input type="hidden" name="id" value="<?php echo $f -> id; ?>">
                 <input class="btn btn-primary" type="submit" value="update">

               <?php

                }
              ?>
        </div>   

    </form>

</div>