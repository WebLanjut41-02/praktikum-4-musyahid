<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Produk extends CI_Model {


	public function GetAllProduk()
	{
		return $this->db->get('produk')->num_rows();
	}

	function data($number,$offset)
	{
		return $query = $this->db->get('produk',$number,$offset)->result();		
	}

	public function getCari($kataKunci)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->like('Nama_Produk',$kataKunci);

		$query = $this->db->get();
		return $query->result();
	}

	public function getProduk($id_produk)
	{
		$this->db->from('produk');
		$this->db->where('Id_Produk', $id_produk);
		
		$query = $this->db->get();
		return $query->result();
	}

	public function inputProduk($dataProduk)
	{
		$this->db->insert('produk', $dataProduk);
	}

	public function getId($id)
	{
		$this->db->from('menu');
		$this->db->where('kode_menu', $id);

		$query = $this->db->get();
		return $query->result();
	}

	public function hapusProduk($id_produk)
	{
		$this->db->where('Id_Produk',$id_produk);
		$this->db->delete('produk');
	}

	public function editproduk($id_produk, $nama_produk,$berat,$kategori, $harga)
	{
		$data = array(
			'Nama_Produk' => $nama_produk,
			'Berat' => $berat,
			'Kategori' => $kategori,
			'Harga' => $harga
		);
		$this->db->where('Id_Produk',$id_produk);
		$this->db->update('produk', $data);
	}
}

?>
