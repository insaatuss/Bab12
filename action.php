<?php 

  
if(isset($_POST["submit"]) ){
  $name = $_POST["name"];
  $harga = $_POST["harga"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $itemStatus = $_POST["itemStatus"];
  

  if ($itemStatus == "DANA") {
    $itemCondition = "Via Bank";
  }
  else{
    $itemCondition = "OVO";
  }

  if (isset($_POST['pilihBarang'])) {
    $PilihKemeja = "Kemeja Flanel";
    }else{
    $PilihKemeja = "Kemeja Linen";
    } 


}
?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <title>Action</title>
</head>

<body>
  <div id="profile">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col col-8">
          <h1>Data Pengiriman Barang</h1>
          <h4>Nama Barang = <?=$name?></h4>
          <h4>Harga Barang = <?=$harga?></h4>
          <h4>Pembayaran = <?=$itemCondition?></h4>
          <h4>Kategori Barang = <?=$PilihKemeja?></h4>
          <h4>Alamat Pengiriman= <?=$address?></h4>
          <h4>Kota Tujuan = <?=$city?></h4>
        </div>
      </div>
    </div>

  </div>
</body>

</html>