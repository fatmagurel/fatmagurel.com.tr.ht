<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
				
        }

	public function index()
	{
		$query=$this->db->query("Select COUNT(Id) as say from sepet");
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
	
	public function kategoriler()
	{
		$query=$this->db->query("Select COUNT(Id) as say from sepet");
		$data["sepet"]= $query->result();
		
		$query = $this->db->query("SELECT * FROM ayarlar");
		$data["veri"]= $query->result();
		
		$data["sayfa"]="Kategoriler";
		$data["menu"]="kategoriler";
		
		$this->load->view('_header',$data);
		$this->load->view('kategoriler');
		$this->load->view('_footer');
	}
	
	public function hakkimizda()
	{
		$query=$this->db->query('Select COUNT(Id) as say from sepet');
		$data["sepet"]=$query->result();
		$query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result(); 
		
		$query = $this->db->query("SELECT * FROM ayarlar");
		$data["veri"]= $query->result();
		$data["sayfa"]="hakkimizda ||";
		$data["menu"]="Hakkımızda";
		
		$this->load->view('_header',$data);
		$this->load->view('hakkimizda',$data);
		$this->load->view('_footer');
	} 
	
		public function iletisim()
	{
		$query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		
		$query = $this->db->query("SELECT * FROM ayarlar");
		$data["veri"]= $query->result();
		$data["sayfa"]="iletisim ||" ;
		$data["menu"]="İletisim";
		
		$this->load->view('_header',$data);
		$this->load->view('iletisim');
		$this->load->view('_footer');
	} 
	
	public function bize_yazin()
	{
		$query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		
		$query = $this->db->query("SELECT * FROM ayarlar");
		$data["veri"]= $query->result();
		$data["sayfa"]="Bize_yazin ||" ;
		$data["menu"]="bize_yazin";
		
		$this->load->view('_header',$data);
		$this->load->view('bize_yazin');
		$this->load->view('_footer');
	} 
	public function mesaj_kaydet()
	{
		//form verilerini aldık
		$data=array(
		    'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'tel'=>$this->input->post('tel'),
			'mesaj'=>$this->input->post('mesaj'),
			
		);
		
		$this->db->insert("mesajlar",$data);
		$this->session->set_flashdata("mesaj","Mesajınız başarılı bir şekilde gönderildiii!");
		redirect(base_url().'home/bize_yazin');
	
    }
	
	public function yorum_kaydet($id)
	{
		//form verilerini aldık
		$data=array(
		    'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'yorumlar'=>$this->input->post('yorumlar')
			
		);
		
		$this->db->insert("yorumlar",$data);
		$this->session->set_flashdata("mesaj","Yorumunuz başarılı bir şekilde gönderildiii!");
		redirect(base_url().'home/urundetay/'.$id);
	
    }
	
	public function yorum_listele()
	{
		$query = $this->db->query("SELECT * FROM yorumlar ORDER BY desc Id");
		$data["veri"]= $this->Database_Model->get_yorum($yorumlar);
		$data["yorumlar"]= $query->result();
		
    }
	
	public function login_ol()
	{
		$query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query = $this->db->query("SELECT * FROM ayarlar");
		$data["veri"]= $query->result();
		$query = $this->db->query("SELECT * FROM uyeler");
		$data["veri"]= $query->result();
		$data["sayfa"]="Login ||";
		$data["menu"]="uye";
		
		$this->load->view('_header',$data);
		$this->load->view('login_ol',$data);
		$this->load->view('_footer');
		
		
	}
	
	public function login(){
		$email=$this->input->post("eposta");
		$sifre=$this->input->post("sifre");
		
		//echo $email=$this->security->xss_clean($email);
		//echo $sifre=$this->security->xss_clean($sifre);
		//exit();
		
		$this->load->model('Database_Model');
		$result=$this->Database_Model->login('uyeler',$email,$sifre);
		
		if($result){
			$sess_array=array(
			'id'=>$result[0]->Id,
			'yetki'=>$result[0]->yetki,
			'email'=>$result[0]->email,
			'adsoy'=>$result[0]->adsoy,
			'resim'=>$result[0]->resim
			);
			//print_r($sess_array);
			//echo "Login oldu";
			//exit();
			$this->session->set_userdata("uye_session",$sess_array);
			redirect(base_url());
		}
		else{
			$this->session->set_flashdata("Hatalı kullanıcı adı yada şifre");
			redirect(base_url()."home/login_ol");
		}
	}
	
	public function urundetay($id)
	{
		$query=$this->db->query('Select COUNT(Id) as say from sepet');
		$data["sepet"]=$query->result();
		$query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$data["menu"]="urun";
		$data["sayfa"]=null;
		
		
		$data["veri"]= $this->Database_Model->get_urun($id);
		
		$query=$this->db->query("SELECT *FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]= $query->result();
		
		
		$this->load->view('urun_detay',$data);
		
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

