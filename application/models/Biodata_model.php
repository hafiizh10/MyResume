<?php

class Biodata_model extends CI_Model
{
    public function getAllBiodata()
    {
        return $this->db->get('tb_biodata')->result_array();
    }

    public function getBiodataById($id)
    {
        return $this->db->get_where('tb_biodata', ['biodata_id' => $id])->row_array();
    }

    public function tambahBiodata()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "spesialis" => $this->input->post('spesialis', true),
            "website" => $this->input->post('website', true),
            "telepon" => $this->input->post('telepon', true),
            "asal" => $this->input->post('asal', true),
            "umur" => $this->input->post('umur', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];

        $this->db->insert('tb_biodata', $data);
    }

    public function hapusBiodata($id)
    {
        $this->db->delete('tb_biodata', ['biodata_id' => $id]);
    }

    public function editBiodata()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "spesialis" => $this->input->post('spesialis', true),
            "website" => $this->input->post('website', true),
            "telepon" => $this->input->post('telepon', true),
            "asal" => $this->input->post('asal', true),
            "umur" => $this->input->post('umur', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];
        $this->db->where('biodata_id', $this->input->post('id'));
        $this->db->update('tb_biodata', $data);
    }
}
