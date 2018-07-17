<?php $this->load->view('header2'); ?>

<div class="container">
<div class="panel panel-default">
	<div class="panel-body">
		
	
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
              <td><?php echo $value['tanggal'] ?></td>


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