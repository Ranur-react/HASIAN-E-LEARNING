<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->Model('Model');

}

	public function index()
	{
		$data['judul']="Lagi proses Belajar";
		$data['isi']="Belajar dimanapun dan kapanpun";
		$data['pelajar']= $this->Model->get_pelajar();
	$this->load->view('top');
	$this->load->view('table',$data);
	$this->load->view('bottom');
    }
public function tambahdata(){
	$this->load->view('top');
	$this->load->view('tambahdata');
	$this->load->view('bottom');
}
public function editdata($nisn=''){
	$data['pelajar']= $this->db->get_where('tblpelajar',array('nisn'=>$nisn),1)->row();
	$this->load->view('top');
	$this->load->view('editdata',$data);
	$this->load->view('bottom');
}
public function add(){
	$data= array(
		'nisn'=>$this->input->post('nisn'),
		'namasiswa'=>$this->input->post('namasiswa'),
		'kelas'=>$this->input->post('kelas'),
		'alamat'=>$this->input->post('alamat'),
		'email'=>$this->input->post('email')
	);
	if($this->db->insert('tblpelajar',$data)){
		$this->session->set_flashdata("success","Berhasil Menambahkan Data Pelajar");
		echo "<script>window.location.href='".base_url()."belajar"."'</script>";
	}else{
		$this->session->set_flashdata("error","Gagal Menambahkan Data Pelajar");
		echo "<script>window.location.href='".base_url()."belajar"."'</script>";
	}
}
public function update(){
	$data= array(

		'namasiswa'=>$this->input->post('namasiswa'),
		'kelas'=>$this->input->post('kelas'),
		'alamat'=>$this->input->post('alamat'),
		'email'=>$this->input->post('email')
	);
		$this->db->where('nisn',$this->input->post('nisn'));
	if($this->db->update('tblpelajar',$data)){
		$this->session->set_flashdata("success","Berhasil Merubah Data Pelajar");
		echo "<script>window.location.href='".base_url()."belajar"."'</script>";
	}else{
		$this->session->set_flashdata("error","Gagal Merubah Data Pelajar");
		echo "<script>window.location.href='".base_url()."belajar"."'</script>";
	}
}
public function delete($nisn){
	if($this->db->delete('tblpelajar',array('nisn'=>$nisn))){
		$this->session->set_flashdata("success","Berhasil Menghapus Data Pelajar");
		echo "<script>window.location.href='".base_url()."belajar"."'</script>";
	}
}
}
