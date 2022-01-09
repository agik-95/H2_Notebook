<div class="halAdmin" style="height: auto; background-color: whitesmoke">
<div class="container">

    <div class="row d-flex justify-content-center " data-toggle="modal" data-target="#formModal">
    <button class="btn btn-outline-black mb-3 ml-4 tombolTambahData" id="" >Tambah Laptop lik !</button>
    </div>
    <div class="row ">
        <div class="col-5">
            <!-- Search form -->
            <input class="form-control mb-5" type="text" placeholder="Search" aria-label="Search">
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>


    <table class="table table-sm text-center">
        <thead>
        <tr class="justify-content-center align-content-center">
            <th scope="col">#</th>
            <th scope="col">Kondisi</th>
            <th scope="col">Tipe Laptop</th>
            <th scope="col">Prosessor</th>
            <th scope="col">Ram</th>
            <th scope="col">HDD</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Gambar</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>

        </tr>
        </thead>
        <tbody>
        <?php $i=1;?>
        <?php foreach ( $data['data_laptop'] as $data_laptop) : ?>
        <tr>
            <th scope="row"> <?= $i; ?></th>

            <td><?= $data_laptop['Kondisi']; ?></td>
            <td><?= $data_laptop['TipeLaptop']; ?></td>
            <td><?= $data_laptop['Prosessor']; ?></td>
            <td><?= $data_laptop['Ram']; ?></td>
            <td><?= $data_laptop['HDD']; ?></td>
            <td><?= $data_laptop['Harga']; ?></td>
            <td style="width: 50%"><?= $data_laptop['Deskripsi']; ?></td>
            <td class="img-admin"><img src="<?= BASEURL;?>/assets/img/gambarlaptop/<?= $data_laptop['Gambar']; ?>" alt=""></td>
            <td style="width: 20% "><?= $data_laptop['Keterangan']; ?></td>
            <td style="width: 20%; background-color: transparent"  class="ml-2">
            <a href="<?= BASEURL;?>/HalamanAdmin/hapus/<?= $data_laptop['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
            <a href="<?= BASEURL;?>/HalamanAdmin/ubah/<?= $data_laptop['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $data_laptop['id']; ?>">ubah</a>
            <a href="<?= BASEURL;?>/HalamanAdmin/detail/<?= $data_laptop['id']; ?>" class="badge badge-primary float-right mr-1">detail</a>
            </td>

        </tr>
            <?php $i++; ?>
        <?php endforeach;?>

        </tbody>
    </table>






</div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title tombolTambahData" id="formModalLabel">Tambah Laptop</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <form action="<?= BASEURL; ?>/HalamanAdmin/tambah" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="Kondisi">Kondisi Laptop</label>
                        <select class="form-control" id="Kondisi" name="Kondisi">
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="TipeLaptop">Tipe Laptop</label>
                        <input type="text" class="form-control" id="TipeLaptop" name="TipeLaptop" autocomplete="off" >
                    </div>

                    <div class="form-group">
                        <label for="Prosessor">Prosessor</label>
                        <input type="text" class="form-control" id="Prosessor" name="Prosessor" autocomplete="off" >
                    </div>

                    <div class="form-group">
                        <label for="Ram">Ram</label>
                        <input type="text" class="form-control" id="Ram" name="Ram" autocomplete="off" >
                    </div>

                    <div class="form-group">
                        <label for="HDD">HDD</label>
                        <input type="text" class="form-control" id="HDD" name="HDD" autocomplete="off" >
                    </div>

                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" class="form-control" id="Harga" name="Harga" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="Deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="Keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="Keterangan" name="Keterangan" placeholder="">
                    </div>
<!---->
<!--                    <div class="form-group disabled">-->
<!--                        <label for="Gambar"></label>-->
<!--                        <input type="text" class="form-control" id="Gambar" name="Gambar" placeholder="">-->
<!--                    </div>-->

                    <label for="upload ">Upload Gambarmu!</label>
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" id="Gambar" name="Gambar" placeholder="">
                        <label class="custom-file-label" for="Gambar"> Pilih Gambar Laptop ! </label>
                    </div>






            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" id="submit" class="btn btn-primary ">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

