<?php $this->load->view('header2'); ?>
	
	
<div class="container-fluid">
  

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  <div class="panel panel-default">
    <div class="panel-body">
      <?php echo form_open_multipart('Item/create'); ?>
      <legend>Tambah Data Item</legend>
      <?php echo validation_errors(); ?>

      <div class="form-group">
        	<label for="">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Input field">
            <label for="">Fasilitas</label>
        <input type="text" class="form-control" name="fasilitas" placeholder="Input field">
          <label for="">jumlah kamar</label>
        <input type="text" class="form-control" name="kamar" placeholder="Input field">
              <label for="">Harga</label>
        <input type="text" class="form-control" name="harga" placeholder="Input field">
              <label for="">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" placeholder="Input field">
            <!-- <label for="">Tgl Lahir</label>
        <input type="Date" class="form-control" name="tglLahir" placeholder="Date"> -->
            <label for="">Foto</label>
        <input type="File" class="form-control" name="foto" placeholder="upload file">


      </div>
      <button type="submit" class="btn btn-primary">submit</button>
      <?php echo form_close(); ?>
    </div>
    </div></div></div></div>

  <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
