<?php include 'admin_header.php';?>

<?php echo form_open('admin/store_articles',['class' => 'form-horizontal'])?>
<?php echo form_hidden('user_id', $this->session->userdata('user_id')); ?>
  <fieldset>
 <legend>add articles
</legend>



 <div class="form-group">
   <label class="control-label col-sm-2" for="email">Title:</label>
   <div class="col-sm-6">
     <?php echo form_input(['name' => 'title','class' => 'form-control','placeholder' => 'Article title','value'=>set_value('title')]); ?>
   </div> <div><?php echo form_error('title'); ?></div>
</div>
 <div class="form-group">
   <label class="control-label col-sm-2" for="pwd">Add Article:</label>
   <div class="col-sm-6">
  <?php echo form_textarea(['name' => 'body','class' => 'form-control','placeholder' => 'Article body','value'=>set_value('body')]); ?>
   </div> <div><?php echo form_error('body'); ?></div>
 </div>
 <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
     <div class="checkbox">
       <label><input type="checkbox"> Remember me</label>
     </div>
   </div>
 </div>
 <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
     <button type="reset" class="btn btn-default">cancel</button>
     <button type="submit" class="btn btn-default">Submit</button>
   </div>
 </div>


 </fieldset>

 </form>

<?php include 'admin_footer.php';?>
