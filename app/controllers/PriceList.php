<?php

class PriceList extends Controller {
    public function index()
    {
//        $data['judul'] = 'PriceList';
//        $this->view('templates/headerPriceList', $data);
//        $this->view('PriceList/index');
//        $this->view('templates/footer');

        $data['judul'] = 'Price List';
        $data['data_laptop'] = $this->model('Laptop_model')->getAllLaptop();
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/headerPriceList', $data);
        $this->view('PriceList/index', $data);
        $this->view('templates/footer');

    }



}

