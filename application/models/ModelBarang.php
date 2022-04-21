<?php

class ModelBarang extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('barang');
    }

    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_brg', $id)
            ->limit(1)
            ->get('barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_brg($id_brg)
    {
        $result = $this->db->where('id_brg', $id_brg)->get('barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('barang');
        return $this->db->get()->row($field);
    }

    public function getLimitBarang()
    {
        $this->db->limit(5);
        return $this->db->get('barang');
    }

    public function getKategori($where)
    {
        return $this->db->get('barang');
    }
}
