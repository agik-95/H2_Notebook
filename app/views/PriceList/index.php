
<div class="container animated fadeIn slow">


    <div class="listkategori btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-outline-dark form-check-label active">
            <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off" checked>
           Notebook
        </label>
        <label class="btn btn-outline-dark form-check-label">
            <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off"> Netbook
        </label>


    </div>

<div class="store" id="store">


        <div class="row position-relative">
            <?php foreach ( $data['data_laptop'] as $data_laptop) : ?>
            <div class="col-sm-3  mb-3">
                <div class="card mb-3 h-100 border" >

                    <div class="view overlay">
                        <img class="card-img-top" src="<?= BASEURL;?>/assets/img/gambarlaptop/<?= $data_laptop['Gambar']; ?>"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <div class="card-body m-1 p-0">
                        <div class="d-flex flex-row tittlecard">
                        <h5 class="card-title"><?= $data_laptop['TipeLaptop']; ?></h5>
<!--                        <p>--><?//= $data_laptop['Kondisi']; ?><!-- </p>-->
                        </div>
                        <div class="d-flex flex-sm-wrap flex-row">
                        <p class="card-text font-italic mr-2 hargaawal">Rp.3.000.000</p>
                        <p class="card-text font-italic"><?= $data_laptop['Harga']?>-</p>
                        </div>

                        <div class="mr-0 disabled">
                        <span class="btn btn-outline-warning btn-sm stylebutton">Prosessor: <?= $data_laptop['Prosessor']; ?> </span>
                        <span class="btn btn-success btn-sm stylebutton">RAM: <?= $data_laptop['Ram']; ?></span>
                        <span class="btn btn-outline-primary btn-sm stylebutton">HDD:<?= $data_laptop['HDD']; ?></span>
                    </div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
<?php endforeach;?>
        </div>


  </div>
    </div>