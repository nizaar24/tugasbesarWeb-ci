<?php $this->load->view('header2'); ?>

    <main role="main" class="container">
    <div class="panel panel-'">
      <div class="panel-body">
      
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

      </div>
    </div>
    </main>

    
   <!--  <?php 
        $this->load->view('footer');
     ?>
   -->