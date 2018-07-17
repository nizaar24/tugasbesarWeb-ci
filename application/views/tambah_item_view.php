<?php  ?>
<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Websiteku</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>

<nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Web Berbasis framework</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <!-- <li class="active"><a class="nav-link" href="# ?>">Home <span class="sr-only">(current)</span></a></li> -->

               <li class="active">
            <a class="nav-link" href="<?php site_url();?>Pegawai">Home<span class="sr-only">(current)</span></a>
            </li>
            <li><a class="nav-link" href="<?php site_url();?>Item">Item<span class="sr-only">(current)</span></a>
            </li>
            <li>
            <a class="nav-link" href="<?php site_url();?>Anak/">Anak<span class="sr-only">(current)</span></a>
          </li>
              
              
              
              
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <ul class="nav navbar-nav navbar">
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="https://getbootstrap.com/docs/3.3/">Link bootstrap</a></li>
                  <li><a href="https://www.codeigniter.com/">Link codeigniter</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>

 <ul class="nav navbar-nav navbar-right">

   <li> <a href="<?php echo base_url('index.php/Login/logout') ?>" >(<?php echo $username?>) LOGOUT</a></li>
 </ul>
          </div><!-- /.navbar-collapse -->

        </div>
      </nav>
	
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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

  <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
