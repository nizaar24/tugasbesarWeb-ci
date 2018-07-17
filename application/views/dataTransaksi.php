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
            <a class="nav-link" href="<?php site_url();?>Item">Item<span class="sr-only">(current)</span></a>
            </li>
            <li><a class="nav-link" href="<?php site_url();?>User_c">Data User<span class="sr-only">(current)</span></a>
            </li>
            <li>
            <a class="nav-link" href="<?php site_url();?>Profil">Profil<span class="sr-only">(current)</span></a>
          </li>
           <li>
            <a class="nav-link" href="<?php site_url();?>DataTransaksi">Data Transaksi<span class="sr-only">(current)</span></a>
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

 <!-- <ul class="nav navbar-nav navbar-right">

   <li> <a href="<?php echo base_url('index.php/Login/logout') ?>" >(<?php echo $username?>) LOGOUT</a></li>
 </ul> -->
          </div><!-- /.navbar-collapse -->

        </div>
</nav>



<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1>Table</h1>

			<!-- <a href="<?php echo base_url('index.php/Item_c/tambah') ?>" class="btn btn-primary mb-3">Tambah</a> -->
			<table class="table table-bordered table-striped" id="table_id">
				<thead>
					<tr>
						<th>Id</th>
            <th>user name</th>
						<th>nama</th>
						<th>No. tlp</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Id Item</th>
						<th>alamat</th>
            <th>kamar</th>
            <th>fasilitas</th>
            <th>harga</th>
            <th>keterangan</th>
            <th>tanggal</th>
            <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($transaksi_list as $key => $value): ?>
						<tr>
							<td><?php echo $value['id_transaksi'] ?></td>
							<td><?php echo $value['username'] ?></td>
							<td><?php echo $value['nama'] ?></td>
							<td><?php echo $value['nmr_tlp'] ?></td>
							<td><?php echo $value['email'] ?></td>
							<td><?php echo $value['gender'] ?></td>
              <td><?php echo $value['idItem'] ?></td>
              <td><?php echo $value['alamat'] ?></td>
              <td><?php echo $value['kamar'] ?></td>
              <td><?php echo $value['fasilitas'] ?></td>
              <td><?php echo $value['harga'] ?></td>
              <td><?php echo $value['keterangan'] ?></td>
              <td><?php echo $value['harga'] ?></td>

							<td>
							<a href="<?php echo base_url('index.php/DataTransaksi/hapus/'.$value['idItem']) ?>" class="btn btn-sm btn-danger">Hapus</a> 
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
      <a href="<?php echo base_url('index.php/ReportDataTransaksi/cetakDataTransaksi')?>" class="btn pull-right"><span class="glyphicon glyphicon-save"></span> Report</a>
	</div>
</div>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
</body>
</html>