<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/style.css')?>">
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
<div>
<h1 class="text-center mt-5"> List Gadget</h1>
<div class="container-fluid">
<div class="row">
    <div class="col-4 mt-5">
        <div class="card" style="width: 100%;">
        <img src="<?= base_url('assets/2.jpg')?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Laptop Hp Pavilion </h5>
            <a href="<?= base_url('welcome/detail/2')?>" class="btn btn-primary">Detail</a>
        </div>
        </div>
    </div>
    <div class="col-4 mt-5">
        <div class="card" style="width: 100%;">
        <img src="<?= base_url('assets/3.jpg')?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Laptop Asus x441u</h5>
            
            <a href="<?= base_url('welcome/detail/3')?>" class="btn btn-primary">Detail</a>
        </div>
        </div>
    </div>
    <div class="col-4 mt-5">
        <div class="card" style="width: 100%;">
        <img src="<?= base_url('assets/4.jpg')?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Laptop Lenovo e440</h5>
            
            <a href="<?= base_url('welcome/detail/4')?>" class="btn btn-primary">Detail</a>
        </div>
        </div>
    </div>
    <div class="col-4 mt-5">
        <div class="card" style="width: 100%;">
        <img src="<?= base_url('assets/5.jpg')?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Laptop Toshiba c800</h5>
            
            <a href="<?= base_url('welcome/detail/5')?>" class="btn btn-primary">Detail</a>
        </div>
        </div>
    </div>
    <div class="col-4 mt-5">
        <div class="card" style="width: 100%;">
        <img src="<?= base_url('assets/6.jpg')?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Samsung J3 Prime Black</h5>
            
            <a href="<?= base_url('welcome/detail/6')?>" class="btn btn-primary">Detail</a>
        </div>
        </div>
    </div>
    <div class="col-4 mt-5">
        <div class="card" style="width: 100%;">
        <img src="<?= base_url('assets/7.jpg')?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Asus Zenfone 5</h5>
            
            <a href="<?= base_url('welcome/detail/7')?>" class="btn btn-primary">Detail</a>
        </div>
        </div>
    </div>
</div>
</div>

</div>
</body>
</html>