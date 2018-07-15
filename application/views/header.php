<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>RumahKontrakan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>





<nav class="navbar navbar-inverse">
         <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">RumahKontrakan</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <!-- <li class="active"><a class="nav-link" href="# ?>">Home <span class="sr-only">(current)</span></a></li> -->

               <li class="active">
            <a class="nav-link" href="<?php echo base_url('index.php/Home') ?>">Home<span class="sr-only">(current)</span></a>
            </li>
            <li><a class="nav-link" href="<?php site_url();?>Item">Item<span class="sr-only">(current)</span></a>
            </li>
            <li><a class="nav-link" href="<?php site_url();?>User_c">Data User<span class="sr-only">(current)</span></a>
            </li>
            <li><a class="nav-link" href="<?php site_url();?>profil">Profil<span class="sr-only">(current)</span></a>
            </li>
              
              
         
              
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>

           

  <ul class="nav navbar-nav navbar-right">
  <?php if ($this->session->userdata('logged_in') == null): ?>   
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>MASUK</b><span class="caret"></span></a>
  
          <ul class="dropdown-menu">
      
              <?php $this->load->view('login_view'); ?>
          </ul>
      </li>
 <?php else: ?>
            <li> <a href="<?php echo base_url('index.php/Login/logout') ?>" ><b>(<?php echo $username?>) LOGOUT</b></a></li>
            <?php endif ?>

 </ul>
          </div><!-- /.navbar-collapse -->

        </div>
      </nav>


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