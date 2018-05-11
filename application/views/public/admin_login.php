<?php include 'public_header.php';?>
<?php echo form_open('login/admin_login',['class' => 'form-horizontal'])?>
  <fieldset>
 <legend>adminlogin</legend>
 <div class="form-group">
   <label class="control-label col-sm-2" for="email">Email:</label>
   <div class="col-sm-6">
     <input type="text" class="form-control" name="username" placeholder="Enter username">
   </div><?php echo form_error('username',"<p class='text-danger'>","</p>"); ?>
 </div>
 <div class="form-group">
   <label class="control-label col-sm-2" for="pwd">Password:</label>
   <div class="col-sm-6">
     <input type="password" class="form-control" name="password" placeholder="Enter password">
   </div><?php echo form_error('password',"<p class='text-danger'>","</p>"); ?>
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
<?php include 'public_footer.php';?>
