<?php  ?>
<?php $this->load->view('header'); ?>

<main role="main" class="container">
<div class="jumbotron">
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1>Table</h1>
			<!-- <a href="<?php echo base_url('index.php/Item_c/tambah') ?>" class="btn btn-primary mb-3">Tambah</a> -->
			<table class="table table-bordered table-striped" id="table_id">
				<thead>
					<tr>
						<th>Id</th>
						<th>User Name</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No. tlp</th>
						<th>Gender</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($user_list as $key => $value): ?>
						<tr>
							<td><?php echo $value['idUser'] ?></td>
							<td><?php echo $value['username'] ?></td>
							<td><?php echo $value['nama'] ?></td>
							<td><?php echo $value['email'] ?></td>
							<td><?php echo $value['nmr_tlp'] ?></td>
							<td><?php echo $value['gender'] ?></td>
							<!-- <a href="<?php echo base_url('index.php/Item_c/ubah/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a> -->
							<td>
							<a href="<?php echo base_url('index.php/User_c/hapus/'.$value['idUser']) ?>" class="btn btn-sm btn-danger">Hapus</a> 
							</td>
						</tr>
					<?php endforeach ?>

					
				</tbody>
			</table>
	</div>
</div>
</div>
</main>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
</body>
</html>