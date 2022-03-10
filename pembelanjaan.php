<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelanjaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<h3>
				Belanja Online
			</h3>
            <form action = "pembelanjaan.php" method = "POST">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Text Field</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="text" name="text" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="customer" class="col-4 col-form-label">customer</label> 
                <div class="col-8">
                <input id="customer" name="customer" placeholder="Nama customer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MesinCuci"> 
                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="Jumlah" name="Jumlah" type="number" required="required" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <input type="submit" value ="simpan" name = "proses" >
                </div>
            </div>
            </form>
		</div>
		<div class="col-md-6">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
					List header
				</div>
				<div class="list-group-item">
				    <p>TV : 4.200.000</p> <hr>
                    <p> Kulkas : 3.100.000</p> <hr>
                    <p> Mesin cuci : 3.800.00</p>
					<p class="list-group-item-text">
						...
					</p>
				</div>
				<div class="list-group-item justify-content-between">
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between"> <span class="badge badge-light badge-pill">Harga Dapat Berubah Setiap Saat</span></a>
			</div>
		</div>
	</div>
</div>
<?php

$proses = $_POST['proses'];
$Nama = $_POST['customer'];
$produk = $_POST['produk'];
$Jumlah= $_POST['Jumlah'];
if ($produk =='TV') {
    $produk=4200000;
}
elseif ($produk == 'Kulkas') {
    $produk=3100000;
}
elseif ($produk == 'Mesin  Cuci') {
    $produk=3800000;
}




echo 'Nama customer :'.$Nama;
echo '<br/> Pilihan Produk :'.$produk;
echo '<br/> Jumlah Pilihan :'.$Jumlah;
echo '<br/> Total Pembelian : Rp'. $produk*$Jumlah;
?>
</body>
</html>