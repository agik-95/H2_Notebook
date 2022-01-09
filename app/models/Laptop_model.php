<?php 

class Laptop_model {
    private $table = 'data_laptop';
    private $db;




    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLaptop()
    {
        $this->db->query('SELECT * FROM ' . $this->table. ' order by id desc' );
        return $this->db->resultSet();
    }

    public function getLaptopById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }



    function upload() {


        $namaFile = $_FILES['Gambar']['name'];
        $ukuranFile = $_FILES['Gambar']['size'];
        $error = $_FILES['Gambar']['error'];
        $tmpName = $_FILES['Gambar']['tmp_name'];


        // cek apakah tidak ada gambar yang diupload
        if( $error === 4 ) {
            echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if( $ukuranFile > 1000000 ) {
            echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/H2_MVC/public/assets/img/gambarlaptop/' . $namaFileBaru;
        move_uploaded_file($tmpName, $fileDestination);

        //move_uploaded_file($tmpName, BASEURL.'/assets/img/gambar%20laptop');

//        $uploadfile = $_SERVER['DOCUMENT_ROOT'] . BASEURL.'/assets/img/gambar%20laptop' . $namaFileBaru;

        return $namaFileBaru;


    }


    public function tambahDataLaptop($data)
    {

        $namafile = $this->upload();

        $query = "INSERT INTO data_laptop
                    VALUES
                  ('', :Kondisi, :TipeLaptop, :Ram, :Prosessor, :HDD,  :Harga, :Deskripsi, :Keterangan, :Gambar)";

        $this->db->query($query);
        $this->db->bind('Kondisi', $data['Kondisi']);
        $this->db->bind('TipeLaptop', $data['TipeLaptop']);
        $this->db->bind('Ram', $data['Ram']);
        $this->db->bind('Prosessor', $data['Prosessor']);
        $this->db->bind('HDD', $data['HDD']);
        $this->db->bind('Harga', $data['Harga']);
        $this->db->bind('Deskripsi', $data['Deskripsi']);
        $this->db->bind('Keterangan', $data['Keterangan']);
        $this->db->bind('Gambar', $namafile);
//
//        $namafile = 'Gambar';

        $namafile = $this->upload();
        if( !$namafile ) {
            return false;
        }

        $this->db->execute();

        return $this->db->rowCount();


    }


    public function ubahDataLaptop($data)
    {
//        $namafile = $this->upload();

        $query = "UPDATE data_laptop  SET
                        Kondisi = :Kondisi,
                        TipeLaptop = :TipeLaptop,
                        Ram = :Ram,
                        Prosessor = :Prosessor,
                        HDD = :HDD,
                        Harga = :Harga,
                        Deskripsi = :Deskripsi,
                        Keterangan = :Keterangan
                        
                        WHERE id = :id
                    ";

        $this->db->query($query);
        $this->db->bind('Kondisi', $data['Kondisi']);
        $this->db->bind('TipeLaptop', $data['TipeLaptop']);
        $this->db->bind('Ram', $data['Ram']);
        $this->db->bind('Prosessor', $data['Prosessor']);
        $this->db->bind('HDD', $data['HDD']);
        $this->db->bind('Harga', $data['Harga']);
        $this->db->bind('Deskripsi', $data['Deskripsi']);
//        $this->db->bind('Gambar', $namafile);
        $this->db->bind('Keterangan', $data['Keterangan']);
        $this->db->bind('id', $data['id']);


//        if( $_FILES['gambar']['error'] === 4 ) {
//            $gambar = $namafile;
//        } else {
//            $gambar =  $this->upload();
//        }


        $this->db->execute();

        return $this->db->rowCount();
    }



    public function hapusDataLaptop($id)
    {
        $query = "DELETE FROM data_laptop WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }



}


