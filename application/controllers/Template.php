<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Template extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_v');
    }
}


/* End of file Template.php */
/* Location: ./application/controllers/Templaet.php */
