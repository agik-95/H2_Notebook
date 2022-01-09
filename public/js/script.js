$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Laptop');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#id').val('');
        $('#Kondisi').val('');
        $('#TipeLaptop').val('');
        $('#Prosessor').val('');
        $('#Ram').val('');
        $('#HDD').val('');
        $('#Harga').val('');
        $('#Deskripsi').val('');
        $('#Keterangan').val('');
        $('#Gambar').val('');


    });





    $('.tampilModalUbah').on('click', function() {

        $('#formModalLabel').html('Ubah Data Laptop');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/H2_MVC/public/HalamanAdmin/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/H2_MVC/public/HalamanAdmin/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#Kondisi').val(data.Kondisi);
                $('#TipeLaptop').val(data.TipeLaptop);
                $('#Prosessor').val(data.Prosessor);
                $('#Ram').val(data.Ram);
                $('#HDD').val(data.HDD);
                $('#Harga').val(data.Harga);
                $('#Deskripsi').val(data.Deskripsi);
                $('#Keterangan').val(data.Keterangan);
                $('#Gambar').val(data.Gambar);


            }
        });

    });

});

