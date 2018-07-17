<?php  ?>
<?php  ?>

<!doctype html>
<html lang="en">

  <body>

<?php $this->load->view('header'); ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		
	</div>
	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		
	
	<?php echo form_open_multipart('Transaksi/transaksi/'.$this->uri->segment(3)); ?>
	      	<legend>Edit Data item</legend>
      	<?php echo validation_errors(); ?>
      	
      	<div class="panel panel-default">
      <div class="panel-heading">Transaksi</div>
      <div class="panel-body">
      	
      	<table>
      		<tr><td></td><td><td><center><b>Pemesan</b></center></td><td></td><td></td><td></td><td><center><b>Data Kontrakan di Pesan</b></center></td></tr>
      		<tr><td>username</td>
      			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
      			<td><input type="text" class="form-control" name="username" id="username" value="<?php echo $username?>" readonly></td>

      			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
      			<td>Alamat</td>
      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
      		<td>
      		<input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $item[0]->alamat ?>" readonly></td>
      	</tr>
      	<tr>
      	
      		<td>name</td>
      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
      		<td><input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama?>" readonly></td>      

      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>	
      		<td>Kamar</td>
        	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
        	<td>
       		 <input type="text" class="form-control" name="kamar" id="kamar" value="<?php echo $item[0]->kamar ?>" readonly></td>
      	</tr>
      	<tr>

      		<td>No.  Tlp</td>
      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
      		<td><input type="text" class="form-control" name="nmr_tlp" id="nmr_tlp" value="<?php echo $nmr_tlp?>" readonly></td>

      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>

      		<td>Fasilitas</td> 
      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>     		
      		<td><input type="text" class="form-control" name="fasilitas" id="fasilitas" value="<?php echo $item[0]->fasilitas ?>" readonly></td>
      	</tr>
      	<tr>
      		<td>email</td>
      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
      		<td>
      		<input type="text" class="form-control" name="email" id="email" value="<?php echo $email?>" readonly></td>

      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
      		<td>harga</td>
      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
      		<td>
      		<input type="text" class="form-control" name="harga" id="harga" value="<?php echo $item[0]->harga ?>" readonly></td>
      	</tr>
      	<tr>
      		<td>gender</td>
      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
      		<td>
      		<input type="text" class="form-control" name="gender" id="gender" value="<?php echo $gender?>" readonly></td>

      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
      		<td>keterangan</td>
      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
      		<td><input type="text" class="form-control" name="keterangan" id="keterangan" value="<?php echo $item[0]->keterangan ?>" readonly></td>
      </tr>
     
      
      
      <tr><td></td><td></td><td></td><td></td>
      		<td>Tanggal Mulai Kontrak</td>
      		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
      		<td><input type="Date" class="form-control" name="tanggal" id="tanggal" placeholder="Input field"></td>
          <td><input type="hidden" class="form-control" name="id" id="id" value="<?php echo $item[0]->id ?>" readonly></td>
         
      </tr>
      	
      	
        <tr><td></td><td>
      	<button type="submit" class="btn btn-primary">Submit</button></td>
	<?php echo form_close(); ?></tr>
</table>
</div>
</div>


</div>
  <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
<style type="text/css">
    img {
       /* width: 150px;
        height: 450px;*/
    }
    body{
  background: url('<?php echo base_url('assets/uploads/bg.jpg') ?>');
  /*color: #fff;*/
  }
/*  .carousel {
  width:640px;
  height:360px;
}*/
.carousel-inner > .item > img {
  width:1240px;
  height:460px;
}
 </style>