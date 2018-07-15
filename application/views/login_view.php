<?php  ?>

    <?php echo form_open('Login/cekLogin'); ?>
      
    
 <div class="panel-body" style="width:420px;
  height:450px;">

  <div class="panel-heading"> <h2 class="text-center" style="color: #6495ED;"> <strong> Login  </strong></h2><hr />
  
   </div>

    <div class="form-group">
      <label for="">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username Anda">

    </div>

    <div class="form-group">
      <label for="">Password</label>
      <input type="Password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda">
    </div>
    <?php echo validation_errors(); ?>
    <div class="form-group">
      <br>
      <button type="submit" class="btn btn-info btn-block btn-lg">Log In</button>

      <a href="<?php echo site_url()?>/Login/registrasi"><button type="button" class="btn btn-success btn-block btn-lg">Registrasi</button></a>
      <?php form_close(); ?>
    </div>
 </div>
