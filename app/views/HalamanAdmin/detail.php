
<div class="container detail d-flex justify-content-center">

    <div class="card" style=" height: 150vh width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['data_laptop']['TipeLaptop']; ?></h5>
<h6 class="card-subtitle mb-2 text-muted"><?= $data['data_laptop']['Harga']; ?></h6>
<p class="card-text"><?= $data['data_laptop']['Deskripsi']; ?></p>
<!--<p class="card-text">--><?//= $data['data_laptop']['Gambar']; ?><!--</p>-->
<img src="<?= BASEURL;?>/assets/img/gambarlaptop/<?= $data['data_laptop']['Gambar']; ?>" alt="" style="height: 150px">
<a href="<?= BASEURL; ?>/HalamanAdmin" class="card-link">Kembali</a>
</div>
</div>

</div>