<?php

class Portfolio_model extends CI_Model
{
    public function getAllPortfolio()
    {
        return $this->db->get('tb_portfolio')->result_array();
    }

    public function getPortfolioById($id)
    {
        return $this->db->get_where('tb_portfolio', ['resume_id' => $id])->row_array();
    }

    public function tambahPortfolio()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "judul" => $this->input->post('judul', true),
            "link" => $this->input->post('link', true),
            "jenis" => $this->input->post('jenis', true),
            "filter" => $this->input->post('filter', true)
        ];

        $this->db->insert('tb_portfolio', $data);
    }

    public function hapusPortfolio($id)
    {
        $this->db->delete('tb_portfolio', ['resume_id' => $id]);
    }

    public function editPortfolio()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "link" => $this->input->post('link', true),
            "jenis" => $this->input->post('jenis', true),
            "filter" => $this->input->post('filter', true)
        ];
        $this->db->where('resume_id', $this->input->post('id'));
        $this->db->update('tb_portfolio', $data);
    }
}
