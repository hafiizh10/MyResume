<?php

class Portfolio_model extends CI_Model
{
    public function getAllPortfolio()
    {
        return $this->db->get('tb_portfolio')->result_array();
    }

    public function tambahPortfolio()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "link" => $this->input->post('link', true),
            "jenis" => $this->input->post('jenis', true),
            "filter" => $this->input->post('filter', true)
        ];

        $this->db->insert('tb_portfolio', $data);
    }
}
