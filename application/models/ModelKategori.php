<?php

class ModelKategori extends CI_Model
{
    public function data_tshirt_pria()
    {
        return $this->db->get_where("barang", array('kategori' => 't-shirt pria'));
    }

    public function data_kemeja_pria()
    {
        return $this->db->get_where("barang", array('kategori' => 'kemeja pria'));
    }

    public function data_jaket_pria()
    {
        return $this->db->get_where("barang", array('kategori' => 'jaket pria'));
    }

    public function data_hoodie_pria()
    {
        return $this->db->get_where("barang", array('kategori' => 'hoodie pria'));
    }

    public function data_batik_pria()
    {
        return $this->db->get_where("barang", array('kategori' => 'batik pria'));
    }

    public function data_pakaian_wanita()
    {
        return $this->db->get_where("barang", array('kategori' => 'pakaian wanita'));
    }
}
