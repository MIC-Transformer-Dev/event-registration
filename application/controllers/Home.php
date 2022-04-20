<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
   if (!$this->ion_auth->logged_in()) {
        redirect('auth');
    }        $this->load->model('home_model', 'home');
    }

    public function index()
    {
        $title = '';
        $mahasiswa = anchor('mahasiswa', 'Data Mahasiswa');
        $prodi = anchor('prodi', 'Data Perusahaan');
        $konsentrasi = anchor('konsentrasi', 'Data Divisi');
        $jenjang = anchor('jenjang', 'Data Jabatan');
        $box = $this->info_box();
        $data = array(
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi,
            'konsentrasi' => $konsentrasi,
            'jenjang' => $jenjang,
            'title' => $title,
            'box' => $box,
        );
        $this->template->load('template/template_v', 'home/home_v', $data);
    }

    public function info_box()
    {
        $box = [
            [
                'color'         => 'facebook',
                'total'     => $this->home->total('mahasiswa'),
                'title'        => 'Total Peserta',
                'icon'        => 'users'
            ],
            [
                'color'         => 'success',
                'total'     => $this->home->total('prodi'),
                'title'        => 'Total Perusahaan',
                'icon'        => 'poll'
            ],
            [
                'color'         => 'warning',
                'total'     => $this->home->total('konsentrasi'),
                'title'        => 'Total Divisi',
                'icon'        => 'book'
            ],
            [
                'color'         => 'googleplus',
                'total'     => $this->home->total('seminar'),
                'title'        => 'Total Event',
                'icon'        => 'layer-group'
            ],
        ];
        $info_box = json_decode(json_encode($box), FALSE);
        return $info_box;
    }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
