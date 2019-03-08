<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Produk');
	}


	// public function index()
	// {
	// 	$data = $this->Model_Produk->GetAllProduk();
	// 	$this->session->set_userdata('all_data', $data);
	// 	$this->load->view('produk');
	// }

	public function index(){
		$this->load->database();
		$jumlah_data = $this->Model_Produk->GetAllProduk();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'produk/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['produk'] = $this->Model_Produk->data($config['per_page'],$from);
		$this->load->view('produk',$data);
	}

	public function input_produk()
	{
		$this->load->view('input_produk');
	}

	public function editproduk()
	{

		$data['dataProduk'] = $this->Model_Produk->getProduk($_GET['ID']);
		$this->load->view('edit_produk', $data);
	}


	public function proses_inputProduk()
	{

		$dataProduk = array(
			'Nama_Produk' => $this->input->post('nama_produk'),
			'Berat' => $this->input->post('berat'),
			'Kategori' => $this->input->post('kategori'),
			'Harga' => $this->input->post('harga'),
	);
		$this->Model_Produk->inputProduk($dataProduk);
		redirect(site_url('produk'));
	}

	public function proseseditproduk()
	{
		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$berat = $this->input->post('berat');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');

			$this->Model_Produk->editproduk($id_produk, $nama_produk,$berat,$kategori, $harga);
			redirect('produk');
	}		

	public function hapusProduk()
	{
		$id_produk = $_GET['ID'];
		$this->Model_Produk->hapusProduk($id_produk);
		redirect('produk');
	}

	public function search(){
		$kataKunci = $this->input->post('katakunci');
		$data['produk'] = $this->Model_Produk->getCari($kataKunci);
		$this->load->view('produk', $data);
	}
}
