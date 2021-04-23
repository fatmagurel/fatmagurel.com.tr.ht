<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {
    
	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				
				if(!$this->session->userdata("admin_session")) //login olup olmadıgı kontrolü
					redirect(base_url().'admin/login');
        }

	public function index()
	{
		$query = $this->db->query("SELECT * FROM mesajlar ORDER BY adsoy");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/mesajlar_liste',$data);
		
	}
	
	public function ekle()
	{	
		$this->load->view('admin/mesajlar_ekle');
		
	}
	
	public function ekle_kaydet()
	{
		//form verilerini aldık
		$data=array(
		    'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'mesaj'=>$this->input->post('mesaj'),
			'tel'=>$this->input->post('tel'),
			
		);
		
		$this->db->insert("mesajlar",$data);
		$this->session->set_flashdata("mesaj","Mesaj iletileri kaydedildi");
		redirect(base_url().'admin/mesajlar');
		
		
		
	}
	public function duzenle($id)
	{
		$query = $this->db->query("SELECT * FROM mesajlar WHERE id= $id");
		$data["veri"]=$query->result();
		
		$this->load->view('admin\mesajlar_duzenle_formu',$data);
		
	}
	
	public function guncelle($id)
	{
	
		//form verilerini aldık
		$data=array(
		    'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'tel'=>$this->input->post('tel'),
			'mesaj'=>$this->input->post('mesaj'),
			
		);
		
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("mesajlar",$data,$id);
		redirect(base_url().'admin/mesajlar');
		
	}
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM mesajlar WHERE id= $id");
        
		redirect(base_url().'admin/mesajlar');
	
		
	}
}