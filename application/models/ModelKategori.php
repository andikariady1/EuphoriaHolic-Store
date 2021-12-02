<?php

class ModelKategori extends CI_Model
{
    public function data_pakaian_pria()
    {
        return $this->db->get_where("barang", array('kategori' => 'pakaian pria'));
    }

    public function data_pakaian_wanita()
    {
        return $this->db->get_where("barang", array('kategori' => 'pakaian wanita'));
    }
}
