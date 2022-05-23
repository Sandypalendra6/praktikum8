<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form>
    <h4>Belanja online</h4>
    <hr>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
  <form action="form_belanja.php" method="POST">
    <div class="form-group row">
      <label for="customer" class="col-4 col-form-label">Customer</label> 
      <div class="col-8">
        <input id="costumer" name="costumer" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Pilihan Produk</label> 
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
          <label for="produk_0" class="custom-control-label">Televisi</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
          <label for="produk_1" class="custom-control-label">Kulkas</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
          <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
      <div class="col-8">
        <input id="jumlah" name="jumlah" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
      <input type="submit" class="btn btn-success" name="kirim">
      </div>
    </div>
  </form>
        </div>
        
		<div class="col-md-4">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Home</a>
				<div class="list-group-item">
					TV : 4.200.000
				</div>
				<div class="list-group-item">
					kulkas : 3.100.000
				</div>
        <div class="list-group-item">
        <p class="list-group-item-text">
          Mesin Cuci : 3.800.000
					</p>
        </div>
        </div>
           <a href="#" class="list-group-item list-group-item-action active justify-content-between"> Harga Dapat Berubah Setiap Saat</a>
				</div>
			</div>
		</div>
	</div>
</div>
      </div>
    </div>
    <hr>
    <?php
    $kirim = $_POST['kirim'];
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    if($produk=="tv"){
      $hargatv = 4200000;
      $total = $hargatv * $jumlah;
    }elseif ($produk=="kulkas"){
      $hargakulkas = 3100000;
      $total= $hargakulkas * $jumlah;
    }elseif($produk=="mesin cuci"){
      $hargacuci = 3800000;
      $total = $hargacuci * $$jumlah;
    }else{
      $total = 0;
    }

    echo 'Nama Costumer : '.$customer;
    echo '<br/>Nama Produk : '.$produk;
    echo '<br/>Jumlah : '.$jumlah;
    echo '<br/>Total Harga : '.$total;
    ?>

</body>
</html>