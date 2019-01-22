<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/style.css')?>">
 
</head>
<body class="bg-detail">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url('')?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= base_url('welcome/product')?>">Product</a>
      <a class="nav-item nav-link" href="<?= base_url('welcome/about')?>">About</a>

    </div>
  </div>
</nav>
    <div class="container card p-5 mt-5">
    <div class="col-12">
    <h1>Laptop Asus x411u</h1>
    </div>
    <div class="row">
        <div class="col-6">
        <img src="<?= base_url('assets/'.$id.'.jpg')?>" width="400" alt="">
        </div>
        <div class="col-6 ">
            <table class="table">
                <tbody>
                    <tr>
                    <th scope="row">Harga</th>
                    <td>Rp 6.500.000</td>
                    </tr>
                    <tr>
                    <th scope="row">Deskripsi</th>
                    <td>Intel Core i3-6006U 2.0 GHz<br>
                    Windows 10 Home 64 bit <br>
                    HDD 1TB 5400RPM <br>
128 GB PCIe® NVMe™ M.2 SSD <br>
8 GB DDR4-2666 SDRAM (1 x 8 GB) <br>
15.6" diagonal FHD IPS anti-glare micro-edge </td>
                    </tr>
                    <tr>
                    <th scope="row">Warna</th>
                    <td>Hitam</td>
                    </tr>
                    <tr>
                    <th scope="row">Stok</th>
                    <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>