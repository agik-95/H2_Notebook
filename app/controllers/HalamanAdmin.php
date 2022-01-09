<?php
if(!isset($_SESSION["login"]) ) {
    header('Location: ' . BASEURL . '/home');
    exit;

}


class HalamanAdmin extends Controller {
    public function index()
    {

//        $data['login']= $this->model('Logout_Model')->EndSession();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Something posted

            if (isset($_POST['btnLogout'])) {
                $this->model('Logout_Model')->EndSession();
            }
        }


        $data['judul'] = 'Halaman Admin';
        $data['data_laptop'] = $this->model('Laptop_model')->getAllLaptop();
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/headerHalamanAdmin', $data);
        $this->view('HalamanAdmin/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {

        $data['judul'] = 'Detail Laptop';
        $data['data_laptop'] = $this->model('Laptop_model')->getLaptopById($id);
        $this->view('templates/detail/headerDetail', $data);
        $this->view('HalamanAdmin/detail', $data);
        $this->view('templates/detail/footerDetail');
    }

    public function tambah () {
        if( $this->model('Laptop_model')->tambahDataLaptop($_POST) > 0 )
//            var_dump($_POST); die();
//            if (isset($_POST['submit'])) {
//                $file = $_FILES['Gambar'];
//                var_dump($_POST);
//                var_dump($file);
//
//            }
        {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/HalamanAdmin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/HalamanAdmin');
            exit;
        }

    }


    public function getubah()
    {
        echo json_encode($this->model('Laptop_model')->getLaptopById($_POST['id']));
    }



    public function ubah()
    {
        if( $this->model('Laptop_model')->ubahDataLaptop($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/HalamanAdmin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/HalamanAdmin');
            exit;
        }
    }


    public function hapus($id)
    {
        if( $this->model('Laptop_model')->hapusDataLaptop($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/HalamanAdmin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/HalamanAdmin');
            exit;
        }
    }



}