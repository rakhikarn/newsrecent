<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage News</h3>
    <a class="btn btn-primary" href="?action=add&page=news">Add</a>
  </div>
  <div class="box-body no-padding">
      <table class="table table-striped">
        <tr>
          <th>Title</th>
          <th>Image</th>
          <th>Content</th>
          <th>Publish Date</th>
          <th>Actions</th>
        </tr>
      <?php
           foreach ($list as $k => $v) 
           {
              ?>
            
         <tr>
          <td><?php echo $v -> title; ?></td>
          <td><img width="100" src="images/news/<?php echo $v -> image; ?>"></td>
          <td><?php echo $v -> content; ?></td>
          <td><?php echo $v -> publishDate; ?></td>
          <td>
            <a class="btn btn-danger" href="?page=news&action=delete&id=<?php echo $v -> id; ?>">Delete</a>
            |
            <a class="btn btn-info" href="?page=news&action=update&id=<?php echo $v -> id; ?>">Edit</a></td>
         </tr>

        <?php  
           }
      ?>
    </table>
  </div>
</div>