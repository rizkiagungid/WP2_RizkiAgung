<?php
class Latihan3 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan3');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan2');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan2->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}
