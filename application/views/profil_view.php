<?php $this->load->view('header'); ?>

    <main role="main" class="container">
      <div class="jumbotron">
        <div class="container">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1> Profil Anda </h1><br>
          <h2> User name : </h2> <h1> <?php echo $username?></h1>
          <h2> Nama : </h2> <h1> <?php echo $nama?></h1>
          <h2> email : </h2> <h1> <?php echo $email?></h1>
          <h2> No. Tlp : </h2> <h1> <?php echo $nmr_tlp?></h1>
          <h2> Gender : </h2> <h1> <?php echo $gender?></h1>

        </div>
        <br><br>
        <div align="left"><a href="<?php echo site_url()?>/login/logout"><button type="button" class="btn btn-primary"><h2>Log Out</h2></button>
         <a href="<?php echo base_url("index.php/Profil/update/" . $username) ?>" class="btn btn-sm btn-success">Edit</a>

          
        </div>
      </div>
    
   


<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Data Pegawai</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <body>
      
    </body> -->