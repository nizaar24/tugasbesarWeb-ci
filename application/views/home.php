

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

  <!--  <li> <a href="<?php echo base_url('index.php/Login/logout') ?>" >(<?php echo $username?>) LOGOUT</a></li> -->
 </ul>
          </div><!-- /.navbar-collapse -->

        </div>
      </nav>

    <main role="main" class="container">
      
        <div class="container">
        <div class="row"></div>
        
       <div class="col-12"><h1>Item</h1></div>
  <?php foreach ($list_item as $key => $value): ?>

    <div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">Booking villa</div>
      <div class="panel-body">
    
   <center>
        
       <img src="<?php echo base_url('assets/uploads/'.$value['gambar']) ?>" alt="Card image cap">
            <p><?php $value['id']; ?></p>
          <p class="price">jumlah kamar: <?php echo $value['kamar']; ?></p>
          <p class="price">fasilitas: <?php echo $value['fasilitas']; ?></p>
        <p class="price">sewa/hari: Rp.<?php echo $value['harga']; ?></p>
        <p class="price">status:<?php echo $value['status']; ?></p></center>
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button> -->
        <a href='user/prosesbooking.php?id=<?php echo $row['id'];?>'><button class= 'btn btn-primary btn-sm'>BOOKING</button></a>
      </div>
    </div>
  </div>


   
  <?php endforeach ?>

</div><!-- /.row -->

          
        </div>
      
    
   

<style type="text/css">
    img {
        width: 150px;
        height: 150px;
    }
 </style>

