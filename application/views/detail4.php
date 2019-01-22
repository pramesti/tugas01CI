<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
</head>
<body>
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
    <div class="container-fluid">
    <div class="col-12">
    <h1>Laptop Lenovo e440</h1>
    </div>
    <div class="row">
        <div class="col-4">
        <img src="<?= base_url('assets/'.$id.'.jpg')?>" width="400" alt="">
        </div>
        <div class="col-8">
            <table class="table">
                <tbody>
                    <tr>
                    <th scope="row">Harga</th>
                    <td>10000000</td>
                    </tr>
                    <tr>
                    <th scope="row">Fitur Produk</th>
                    <td>10000000</td>
                    </tr>
                    <tr>
                    <th scope="row">Warna</th>
                    <td>Jacob</td>
                    </tr>
                    <tr>
                    <th scope="row">Jumlah</th>
                    <td>Larry</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>