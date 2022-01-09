<?php


if(isset($_SESSION["login"])){
    header('Location: ' . BASEURL . '/HalamanAdmin');
    exit;

}

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');

    }

    public function login()
    {
        if( $this->model('Login_Model')->login($_POST) === 1 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
//            set session dulu pak
            $_SESSION ["login"] = true;

            header('Location: ' . BASEURL . '/HalamanAdmin');
            exit;
        } else {
            header('Location: ' . BASEURL . '/home');
            exit;
        }

    }



}