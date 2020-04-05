<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_All extends CI_Model{
    public function get($table)
    {
        return $this->db->get($table);
    }

    public function select($select, $from, $with, $order)
    {
        $this->db->select($select);
        $this->db->from($from);
        $this->db->order_by($with, $order);
        $this->db->limit(1);
        return $this->db->get();
    }

    public function select_distinct($select, $from)
    {
        $this->db->distinct();
        $this->db->select($select);
        $this->db->from($from);
        return $this->db->get();
    }

    public function view_where($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function insert($table,$data)
	{
		$this->db->insert($table,$data);
	}

    public function empty($table)
    {
        $this->db->empty_table($table);
    }

	public function update($table,$where,$data)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

    function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }

    function join_cart($from, $at)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'keranjang2.id_obat = obat.id_obat');
        return $this->db->get();
    }

    function join_wishlist($from, $at)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'wishlist.id_barang = barang.id_barang');
        return $this->db->get();
    }

    public function join_transaksi($from, $at)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'pemesanan.id_pemesanan = transaksi.id_pemesanan', 'left');
        return $this->db->get();
    }

    function count($where)
    {
        return $this->db->count_all_results($where);
    }

    function sum($kind, $table)
    {
        $this->db->select_sum($kind);
        $query = $this->db->get($table);

        return $query;
    }
}
