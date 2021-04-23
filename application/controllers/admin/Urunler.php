<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {
    
	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
				
				if(!$this->session->userdata("admin_session")) //login olup olmadıgı kontrolü
					redirect(base_url().'admin/login');
        }

	public function index()
	{
		$query = $this->db->query("SELECT * FROM urunler ORDER BY adi");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/urunler_liste',$data);
		
	}
	public function ekle()
	{	
		$this->load->view('admin/urunler_ekle');
		
	}
	
	public function ekle_kaydet()
	{
		//form verilerini aldık
		$data=array(
		    'adi'=>$this->input->post('adi'),
			'kategori'=>$this->input->post('kategori'),
			'afiyat'=>$this->input->post('afiyat'),
			'sfiyat'=>$this->input->post('sfiyat'),
			'resim'=>$this->input->post('resim'),
			'durum'=>$this->input->post('durum'),
			
		);
		
		$this->db->insert("urunler",$data);
		$this->session->set_flashdata("mesaj","Ürün kaydı gerçekleştirildi!");
		redirect(base_url().'admin/urunler');
		
		
	}
	public function duzenle($id)
	{
		$query = $this->db->query("SELECT * FROM kategoriler");
		$data["veriler"]=$query->result();
		$data["veri"]=$this->Database_Model->get_urun($id);
		$this->load->view('admin\urunler_duzenle_formu',$data);
		
	}
	
	public function guncelle($id)
	{
		//form verilerini aldık
		$data=array(
		'adi'=>$this->input->post('adi'),
		'aciklama'=>$this->input->post('aciklama'),
		'afiyat'=>$this->input->post('afiyat'),
		'sfiyat'=>$this->input->post('sfiyat'),
		'kodu'=>$this->input->post('kodu'),
		'stok'=>$this->input->post('stok'),
		'tarih'=>$this->input->post('tarih'),
		'kategori'=>$this->input->post('kategori'),
		'durum'=>$this->input->post('durum'),	
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("Urunler",$data,$id);
		$this->session->set_flashdata("mesaj", "Ürün kaydedildi...");
		redirect(base_url().'admin/Urunler');
		
	}
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM Urunler WHERE Id= $id");
        
		redirect(base_url().'admin/Urunler');
	
		
	}
	
	public function resim_yukle($id)
	{	
	    $query = $this->db->query("SELECT * FROM urunler WHERE Id= $id");
		$data["veri"]=$query->result();
	    $data["id"]=$id;
		$this->load->view('admin\urunler_resim_yukle',$data);
		
	}
	
	public function resim_kaydet($id)
	{	
	    $data["id"]=$id;
		  
		     //upload edilecek dosyaya ait ayarlar ve limitler
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;
             //ayarlar ile kütüphaneyi çağır
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim')) //Yükle-> Eğer hata varsa
                {
                        $error =$this->upload->display_errors();
						$this->session->set_flashdata("mesaj","Yüklemede hata oluştu!.." .$error);
                        $this->load->view('admin\urunler_resim_yukle',$data);
                       
			    }
					   
                else //Hata yoksa
                {
					    
                       $upload_data = $this->upload->data();
                       $dosyaadi=$upload_data["file_name"]; 
                       
					  $data=array(
                         'resim' => $upload_data["file_name"]
			             );
		              $this->load->model('Database_Model');
		              $this->Database_Model->update_data("urunler",$data,$id);
		              redirect(base_url().'admin/urunler');
					  
					   }
		
		
	}
	
	public function galeri_yukle($id)
	{	
	    $query = $this->db->query("SELECT * FROM urunler_resim WHERE urun_id = $id");
		$data["veriler"]=$query->result();
		
	    $data["id"]=$id;
		$this->load->view('admin\urunler_galeri_yukle',$data);
		
	}
	
	public function galeri_kaydet($id)
	{	
	    $data["id"]=$id;
		  
		     //upload edilecek dosyaya ait ayarlar ve limitler
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;
             //ayarlar ile kütüphaneyi çağır
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim')) //Yükle-> Eğer hata varsa
                  {
                        $error =$this->upload->display_errors();
						$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:" .$error);
                         redirect(base_url().'admin/urunler/galeri_yukle/'.$id);   
		 	    }
					   
                else //Hata yoksa
                {
					    //>>>>Veritabanına kayıt>>>>>
                       $upload_data = $this->upload->data();
					   $data=array(
					     'urun_id' =>$id,
                         'resim' => $upload_data["file_name"]
			              ); 
		                $this->db->insert("urunler_resim",$data);
						//>>>>>>veritabanına kayıt>>>>
						$this->session->set_flashdata("mesaj","Resim Galeriye Yüklendi..." );
	                	redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
					  
					   }
	
	}
     
	 public function galeri_sil($urunid,$resimid)
	{
		$this->db->query("DELETE FROM urunler_resim WHERE Id= $resimid");
        $this->session->set_flashdata("mesaj","Resim Galeriden Silindi..." );
		redirect(base_url().'admin/urunler/galeri_yukle/'.$urunid);
	
		
	}
	
}