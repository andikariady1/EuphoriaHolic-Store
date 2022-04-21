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

    public function data_dress_wanita()
    {
        return $this->db->get_where("barang", array('kategori' => 'dress wanita'));
    }

    public function data_hoodie_wanita()
    {
        return $this->db->get_where("barang", array('kategori' => 'hoodie wanita'));
    }

    public function data_jaket_wanita()
    {
        return $this->db->get_where("barang", array('kategori' => 'jaket wanita'));
    }

    public function data_rok_wanita()
    {
        return $this->db->get_where("barang", array('kategori' => 'rok wanita'));
    }

    public function data_cardigan_wanita()
    {
        return $this->db->get_where("barang", array('kategori' => 'cardigan wanita'));
    }
}
