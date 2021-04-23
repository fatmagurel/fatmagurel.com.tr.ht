<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
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
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
		$this->load->view('admin\_content');
		$this->load->view('admin\_footer');
	}
	public function ayarlar()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]= $query->result();
		
		$this->load->view('admin\ayarlar',$data);
		
}
public function ayarlar_guncelle($id)
{
	//form verilerini alcaz
	$data=array(
	     'adi'=>$this->input->post('adi'),
		 'smtpemail'=>$this->input->post('smtpemail'),
		 'adres'=>$this->input->post('adres'),
		 'smtpserver'=>$this->input->post('smtpserver'),
		 'smtpport'=>$this->input->post('smtpport'),
		 'password'=>$this->input->post('password'),
		 'twitter'=>$this->input->post('twitter'),
		 'facebook'=>$this->input->post('facebook'),
		 'instagram'=>$this->input->post('instagram'),
		 'pinterest'=>$this->input->post('pinterest'),
		 'sehir'=>$this->input->post('sehir'),
		 'tel'=>$this->input->post('tel'),
		 'keywords'=>$this->input->post('keywords'),
		 'description'=>$this->input->post('description'),
		 'hakkimizda'=>$this->input->post('ckeditor'),
		 'iletisim'=>$this->input->post('ckeditor1')
		 );
		  $this->load->model('Database_Model');
		 
		 $this->Database_Model->update_data("ayarlar",$data,$id);
		 
		redirect(base_url().'admin/home/ayarlar');
}
}

