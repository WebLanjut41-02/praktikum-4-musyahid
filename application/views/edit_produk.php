<div class="container">
   <?php if (validation_errors()) : ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
  <?php endif; ?>
  <form action="<?php echo base_url('produk/proseseditproduk') ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Produk</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $dataProduk[0]->Id_Produk ?>" name="id_produk">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Produk</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $dataProduk[0]->Nama_Produk ?>" name="nama_produk">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Kategori</label>
          <select class="form-control" id="exampleFormControlSelect1" name="kategori">
            <option value="Kerajinan Kayu">Kerajinan Kayu</option>
            <option value="Kerajinan Kain">Kerajinan Kain</option>
            <option value="Makanan">Makanan</option>
          </select>
        </div>
          </div>
          <div class="col-md-6">
               <div class="form-group">
        <label for="exampleInputEmail1">Berat</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $dataProduk[0]->Berat ?>" name="berat">
      </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Harga</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $dataProduk[0]->Harga ?>" name="harga">
      </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>