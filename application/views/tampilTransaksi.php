
<?php $this->load->view('header'); ?>


    <div class="container">
      <div class="row">
   
     
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Booking villa</div>
      <div class="panel-body">
    
   <center>
        <h4>HELLO <?php echo $nama?>,Terima Kasih Telah Booking Villa Di My Villa Booking.... </h4>
        <p>Detail booking :</p>
        <TABLE>
        <tr><td>Nama</td>
                	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
                	<td><?php echo $nama ?></td></tr>
                <tr><td>Email</td>
                	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
                	<td><?php echo $email; ?></td></tr>
                <tr><td>No.telp</td>
                	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
                	<td><?php echo $nmr_tlp; ?></td></tr>
           		<tr><td>Alamat Kontrakan</td>
                	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
                	<td><?php echo $item[0]->alamat; ?></td></tr>
                <tr><td>kontrak/tahun</td>
                	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
                	<td><?php echo  $item[0]->harga; ?></td></tr>
                <!-- <tr><td>Tanggal masuk</td>
                	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
                	<td><?php echo $tanggal; ?></td></tr> -->
                <tr><td>jumlah kamar</td>
                	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
                	<td><?php echo $item[0]->kamar; ?></td></tr>
                <tr><td>fasilitas</td>
                	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp</td>
                	<td><?php echo  $item[0]->fasilitas; ?></td></tr>
                

    </TABLE>
    <p>kami akan segera mengirimkan kode booking ke alamat email anda!!!<br>
    	silahkan melakukan pembayaran uang muka untuk booking sebesar 40% dari total bayar atau nominal sebesar melalui bank ke nomor rekening: 144-00-1683525-5 maximal 2x24jam, jika sudah segera menghubungi kontak kami : myvilla@gmail.com/0341234567</p>
        <p class="price"></p></center>
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button> -->
        <a href='<?php echo base_url('index.php/Home') ?>'><button class= 'btn btn-primary btn-sm'>SELESAI</button></a>
        <a href="<?php echo base_url('index.php/Report/cetakTransaksi')?>" class="btn pull-right"><span class="glyphicon glyphicon-save"></span> Report</a>
      </div>
    </div>
  </div>





</div>
</div>


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