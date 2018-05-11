<?php include 'admin_header.php';?>
<div class="container">
<div class="row">
   <div class ="col-lg-6 col-lg-offset-6">
      <a href="#" class="btn btn-lg btn-primary pull-right">ADD ARTICLES</a>
  </div>
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Article Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($articles as $article){ ?>
      <tr>
        <td><?php echo $article->user_id; ?></td>
        <td><?php echo $article->title; ?></td>
        <td>
         <a href="#" class="btn btn-primary" role="button">edit</a>
         <a href="#" class="btn btn-danger" role="button">delete</a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
<?php include 'admin_footer.php';?>
