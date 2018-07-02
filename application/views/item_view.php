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
            <li><a class="nav-link" href="<?php site_url();?>Jabatan">Jabatan<span class="sr-only">(current)</span></a>
            </li>
            <li>
            <a class="nav-link" href="<?php site_url();?>Anak">Anak<span class="sr-only">(current)</span></a>
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

   <li> <a href="<?php echo base_url('index.php/Login/logout') ?>" >(<?php echo $level.' '.$username?>) LOGOUT</a></li>
 </ul>
          </div><!-- /.navbar-collapse -->

        </div>
      </nav>
  

    <main role="main" class="container">
      <a href="<?php echo base_url('index.php/Item/create') ?>" class="btn btn-primary my-3">Tambah</a>
      <table class="table table-hover">
        <thead>
          <th>ID</th>
          <th>Alamat</th>
          <th>Fasilitas</th>
          <th>Harga</th>
          <th>Keterangan</th>
          <th>Foto</th>
          <th>Status</th>
          <th>Aksi</th>

        </thead>
        <tbody>
          <?php foreach ($item_list as $key => $value): ?>
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['alamat'] ?></td>
              <td><?php echo $value['fasilitas'] ?></td>
              <td><?php echo $value['harga'] ?></td>
              <td><?php echo $value['keterangan'] ?></td>
              <td><img src="<?php echo base_url()?>assets/uploads/<?php echo $value['gambar']?>" alt="" width=100 height=100></td>
               <td><?php echo $value['status'] ?></td>
              <td>
                <a href="<?php echo base_url("index.php/Item/update/".$value['id']) ?>" class="btn btn-sm btn-success">Edit</a>
                <a href="<?php echo base_url("index.php/Item/deleteData/".$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                <!-- <a href="<?php echo base_url("index.php/Pendidikan/ByID/".$value['id']) ?>" class="btn btn-sm btn-info">Detail Pendidikan</a> -->
              </td>
            </tr>
            
          <?php endforeach ?>
        </tbody>
      </table>
    </main>

    
   <!--  <?php 
        $this->load->view('footer');
     ?>
   -->