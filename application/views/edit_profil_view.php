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
            <li><a class="nav-link" href="<?php site_url();?>User_c">Data User<span class="sr-only">(current)</span></a>
            </li>
            <li>
            <a class="nav-link" href="<?php site_url();?>Profil">Profil<span class="sr-only">(current)</span></a>
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

<main role="main" class="container">
  <div class="jumbotron">
    <div class="container">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php echo form_open('profil/update/'. $this->uri->segment(3)); ?>
		
		<legend>Edit Data Pegawai</legend>
		<?php echo validation_errors(); ?>
		<div class="form-group">
			<label for="">user name</label>
			<input type="text" class="form-control" name="username" id="username" value="<?php echo $profil[0]->username ?>" placeholder="Input field">
		</div>
			<div class="form-group">
			<label for="">nama</label>
			<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $profil[0]->nama ?>" placeholder="Input field">
		</div>
      <div class="form-group">
      <label for="">password</label>
      <input type="password" class="form-control" name="password" id="password" value="<?php echo $profil[0]->password ?>" placeholder="Input field">
    </div>
		<div class="form-group">
			<label for="">email</label>
			<input type="text" class="form-control" name="email" id="email" value="<?php echo $profil[0]->email ?>" placeholder="Input field">
		</div>
    <div class="form-group">
      <label for="">tel</label>
      <input type="text" class="form-control" name="nmr_tlp" id="nmr_tlp" value="<?php echo $profil[0]->nmr_tlp ?>" placeholder="Input field">
    </div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
	</div>
	
	</div>
  </div>
</main>