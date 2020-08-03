<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portfolio_model');
    }

    public function index()
    {
        $data['portfolio'] = $this->Portfolio_model->getAllPortfolio();
        $this->load->view('index', $data);
    }
}
