 <?php $this->load->view('header'); ?>

 <div class="container">
<div id="carousel-id" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item">
    <img class="d-block w-100" src="<?php echo base_url('assets/uploads/r.jpg') ?>" alt="First slide">
     
    </div>
    <div class="item">
       <img class="d-block w-100" src="<?php echo base_url('assets/uploads/22.jpg') ?>" alt="First slide">
      
    </div>
    <div class="item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/uploads/33.jpg') ?>" alt="First slide">
     
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
</div>




    <main role="main" class="container">
      
      <div class="container">
      
        <div class="row"></div>
        
       <div class="col-12"><h1>Item</h1></div>
  <?php foreach ($list_item as $key => $value): ?>

    <div class="col-md-3">
    
    
   <center>
        
       <img src="<?php echo base_url('assets/uploads/'.$value['gambar']) ?>" alt="Card image cap" width="255px" height="200px">

      <div class="panel">
      <div class="panel-body"> 
            <p><?php $value['id']; ?></p>
          <p class="price">jumlah kamar: <?php echo $value['kamar']; ?></p>
          <p class="price">fasilitas: <?php echo $value['fasilitas']; ?></p>
        <p class="price">sewa/hari: Rp.<?php echo $value['harga']; ?></p>
        <p class="price">status:<?php echo $value['status']; ?></p>
        <?php if($value['status'] == 'tidak tersedia') { ?>
        <a href='<?php echo base_url("index.php/Transaksi/error") ?>'><button class= 'btn btn-warning btn-sm disabled'>BOOKING</button></a>
        <?php } else{ ?>
        <a href='<?php echo base_url("index.php/Transaksi/transaksi/".$value['id']) ?>'><button class= 'btn btn-primary btn-sm '>BOOKING</button></a><?php } ?>
      
      </div>
    </div>
    </center>
    </div>
  


   
  <?php endforeach ?>


    </div>

        
      
