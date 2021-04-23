<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {
    
	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
				
        }

	public function index()
	{
		$query = $this->db->query("SELECT COUNT (Id) AS say FROM sepet");
		$data["sepet"]= $query->result();
		
		$query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		
		$query = $this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]= $query->result();
		
		$query = $this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 6");
		$data["yeni"]= $query->result();
		
		$query = $this->db->query("SELECT * FROM urunler ORDER BY RAND()  LIMIT 6 ");
		$data["random"]= $query->result();
		
		$query = $this->db->query("SELECT * FROM ayarlar");
		$data["veri"]= $query->result();
		
		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_content');
		$this->load->view('_footer');
	}
	
	public function siparisler($durum)
	{
	   $query=$this->db->query("select * from siparis WHERE siparisdurumu='$durum '");
		$data["veriler"]=$query->result();
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('siparisler_listesi',$data);
		
	}
	
}

