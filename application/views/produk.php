<div class="container">
    <?php echo form_open('produk/search') ?>
    <input class="form-control" type="text" name="katakunci" placeholder="search">
    <input type="submit" name="search_submit" value="Cari" class="btn btn-primary"><br><br>
  <?php echo form_close() ?>
</div>
<div class="container">
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <a href="<?php echo base_url('produk/input_produk') ?>" class="btn btn-info" >TAMBAH PPRODUK</a>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Berat</th>
      <th scope="col">Kategori</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

  	<?php 



  	 $i = $this->uri->segment('3') + 1;
  	 foreach ($produk as $prd) { ?>

  	 	 <tr>
	      <th scope="row"><?php echo $i++ ?></th>
	      <td><?php echo $prd->Nama_Produk ?></td>
        <td><?php echo $prd->Berat ?></td>
        <td><?php echo $prd->Kategori ?></td>
        <td><?php echo $prd->Harga ?></td>
	      <td>
            <a href="<?php echo base_url(); ?>produk/editproduk?ID=<?php echo $prd->Id_Produk ?>" class="btn btn-sm btn-success">Edit</a>
            <a href="<?php echo base_url(); ?>produk/hapusProduk?ID=<?php echo $prd->Id_Produk ?>" class="btn btn-sm btn-danger">Hapus</a>
	      </td>
    	</tr>

  	 <?php } ?>
  </tbody>
</table>
  <?php 
  echo $this->pagination->create_links();
  ?>
</body>
</html>
</div>