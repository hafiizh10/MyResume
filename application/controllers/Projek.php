<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Projek extends CI_Controller
{
    public function index()
    {
        $this->load->view('projek');
    }
}
