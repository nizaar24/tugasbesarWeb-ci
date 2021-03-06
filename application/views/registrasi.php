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
              <li class="active"><a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a></li>
              
              
              
              
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              
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
          </div><!-- /.navbar-collapse -->
        </div>
      </nav>

<div class="container">
   <div class="col-sm-4"></div>
        <div class="col-sm-4">
    <h2 class="text-center" style="color: #5cb85c;"> <strong> Registrasi  </strong></h2>
        <?php echo form_open('/Login/Registrasi'); ?>
   
    <div class="form-group">
     <!--  <legend>Login Ke Sistem</legend> -->
    </div>
   <?php echo validation_errors(); ?>
    <div class="form-group">
      <label for="">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">

    </div>

    <div class="form-group">
      <label for="">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username Anda">

    </div>

    <div class="form-group">
      <label for="">Password</label>
      <input type="Password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda">
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Anda">

    </div>

    <div class="form-group">
      <label for="">No. Tlp</label>
      <input type="text" class="form-control" id="nmr_tlp" name="nmr_tlp" placeholder="Masukan No.tlp Anda">

    </div>
    
    <div class="form-group" > 
      <label for="">Gender</label>
      <select name="gender" id="gender" class="form-control" style="height: 45px;" >
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>

    </div>
    <div class="form-group" >
      
      <input type="hidden" class="form-control" id="level" name="level" value="user">
      <!-- <label for="">Level</label> -->
     <!--  <select name="level" id="level" class="form-control" style="height: 45px;" >
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select> -->
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success btn-block btn-lg">Registrasi</button>
      <?php form_close(); ?>

       <a href="<?php echo base_url('index.php/Login') ?>" class="btn btn-info btn-block btn-lg">LOGIN</a>
    </div>

  </div>
</div>