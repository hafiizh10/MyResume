<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portfolio_model');
        $this->load->model('Biodata_model');
    }

    public function index()
    {
        $data['portfolio'] = $this->Portfolio_model->getAllPortfolio();
        $data['biodata'] = $this->Biodata_model->getAllBiodata();
        $this->load->view('index', $data);
    }
}
