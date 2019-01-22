<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
<div class="container mt-5">
<h1 class="text-center">About the Store</h1>
<br>
<div class="row">
<div class="col-6">
<img src="<?= base_url('assets/store.jpg')?>" alt="store" width="550px" >
</div>
<div class="col-6">
<h3>Gadget Store</h3>
<h4>Alamat : Jl.Ahmad Yani no 32 Malang</h4>
<h4>Email : GadgetStore@gmail.com</h4>
<h4><i class="fab fa-instagram"></i> @gadgetstore</h4>
<h4><i class="fab fa-facebook-square"></i> Gadget Store Indonesia</h4>

</div>
</div>
</div>
</body>
</html>