<?php
class about extends Controller {
    public function __construct()
    {
    if($_SESSION['session_login'] != 'sudah_login') {
    Flasher::setMessage('Login','Tidak ditemukan.','danger');
    header('location: '. base_url . 'login');
    exit;
    }
    }

public function index()
{
$data['title'] = 'Halaman AboutMe';
$data['nama'] = 'Arief Rahman';
$data['alamat'] = 'Jl. Pembalah Batung RT. 6 No. 41 Kel. Paliwara Kec. Amuntai Tengah';
$data['no_hp'] = '085246777000';
$this->view('templates/header', $data);
$this->view('templates/sidebar', $data);
$this->view('about/index', $data);
$this->view('templates/footer');
}
}