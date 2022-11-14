<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}
//DataSiswa-------------------------------
	public function DataSiswa()
	{
     
		

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_siswa','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='VFormUpdateSiswa';
		}
		else
		{	
			$data['DataSiswa']=$this->MSudi->GetData('tbl_siswa');
			$data['content']='VSiswa';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSiswa()
	{
		$data['content']='VFormAddSiswa';
		$this->load->view('VBackend',$data);
	}

	public function AddDataSiswa()
	{
		 $add['nis']=$this->input->post('nis');
         	 $add['nama']= $this->input->post('nama');
         	 $add['alamat']= $this->input->post('alamat');  
        	 $this->MSudi->AddData('tbl_siswa',$add);
        	 redirect(site_url('Welcome/DataSiswa'));
	}



	public function UpdateDataSiswa()
	{
		 $nis=$this->input->post('txt_nis');
		 $update['nama']= $this->input->post('txt_nama');
         	 $update['alamat']= $this->input->post('txt_alamat');
          	 $this->MSudi->UpdateData('tbl_siswa','nis',$nis,$update);
		 redirect(site_url('Welcome/DataSiswa'));
	}


	public function DeleteDataSiswa()
	{
		 $nis=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_siswa','nis',$nis);
        	 redirect(site_url('Welcome/DataSiswa'));
	}

	
// Data Profil =======================================================================

	public function DataProfile()
	{
     
	

		if($this->uri->segment(4)=='view')
		{
			$kd_profile=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_profile','kd_profile',$kd_profile)->row();
			$data['detail']['kd_profile']= $tampil->kd_profile;
            $data['detail']['nama_profile']= $tampil->nama_profile;
			$data['content']='VFormUpdateProfile';
		}
		else
		{	
			$data['DataProfile']=$this->MSudi->GetData('tbl_profile');
			$data['content']='VProfile';
		}


		$this->load->view('VBackend',$data);
	}

	public function VFormAddProfile()
	{
		$data['content']='VFormAddProfile';
		$this->load->view('VBackend',$data);
	}
	public function AddDataProfile()
	{
		 $add['kd_profile']=$this->input->post('kd_profile');
         	 $add['nama_profile']= $this->input->post('nama_profile');
        	 $this->MSudi->AddData('tbl_profile',$add);
        	 redirect(site_url('Welcome/DataProfile'));
	}



	public function UpdateDataProfile()
	{
		 $kd_profile=$this->input->post('kd_profile');
		 $update['nama_profile']= $this->input->post('nama_profile');
          	 $this->MSudi->UpdateData('tbl_profile','kd_profile',$kd_profile,$update);
		 redirect(site_url('Welcome/DataProfile'));
	}


	public function DeleteDataProfile()
	{
		 $kd_profile=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_profile','kd_profile',$kd_profile);
        	 redirect(site_url('Welcome/DataProfile'));
	}

// Data Berita ==============================================================================================

public function DataBerita()
	{
     
	

		if($this->uri->segment(4)=='view')
		{
			$kd_berita=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_berita','kd_berita',$kd_berita)->row();
			$data['detail']['kd_berita']= $tampil->kd_beritak;
            		$data['detail']['nama_berita']= $tampil->nama_berita;
			$data['content']='VFormUpdateBerita';
		}
		else
		{	
			$data['DataBerita']=$this->MSudi->GetData('tbl_berita');
			$data['content']='VBerita';
		}


		$this->load->view('VBackend',$data);
	}

	public function VFormAddBerita()
	{
		$data['content']='VFormAddBerita';
		$this->load->view('VBackend',$data);
	}

	public function AddDataBerita()
	{
		 $add['kd_berita']=$this->input->post('kd_berita');
         	 $add['nama_berita']= $this->input->post('nama_berita');
        	 $this->MSudi->AddData('tbl_berita',$add);
        	 redirect(site_url('Welcome/DataBerita'));
	}


	public function UpdateDataBerita()
	{
		 $kd_berita=$this->input->post('kd_berita');
		 $update['nama_berita']= $this->input->post('nama_berita');
         $this->MSudi->UpdateData('tbl_berita','kd_berita',$kd_berita,$update);
		 redirect(site_url('Welcome/DataBerita'));
	}


	public function DeleteDataBerita()
	{
		 $kd_berita=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_kontak','kd_berita',$kd_berita);
        	 redirect(site_url('Welcome/Databerita'));
	}
//Data Kontak ======================================================================================
	public function DataKontak()
	{
     
	

		if($this->uri->segment(4)=='view')
		{
			$kd_kontak=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_kontak','kd_kontak',$kd_kontak)->row();
			$data['detail']['kd_kontak']= $tampil->kd_kontak;
            		$data['detail']['nama_kontak']= $tampil->nama_kontak;
			$data['content']='VFormUpdatekontak';
		}
		else
		{	
			$data['DataKontak']=$this->MSudi->GetData('tbl_kontak');
			$data['content']='VProfile';
		}


		$this->load->view('VBackend',$data);
	}

	public function VFormAddKontak()
	{
		$data['content']='VFormAddKontak';
		$this->load->view('VBackend',$data);
	}

	public function AddDataKontak()
	{
		 $add['kd_kontak']=$this->input->post('kd_kontak');
         	 $add['nama_kontak']= $this->input->post('nama_kontak');
        	 $this->MSudi->AddData('tbl_kontak',$add);
        	 redirect(site_url('Welcome/DataKontak'));
	}


	public function UpdateDataKontak()
	{
		 $txt_kd_kontak=$this->input->post('txt_kd_kontak');
		 $update['nama_kontak']= $this->input->post('txt_nama_kontak');
          	 $this->MSudi->UpdateData('tbl_kontak','kd_kontak',$kd_kontak,$update);
		 																																						(site_url('Welcome/DataKontak'));
	}


	public function DeleteDataKontak()
	{
		 $kd_kontak=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_kontak','kd_kontak',$kd_kontak);
        	 redirect(site_url('Welcome/DataKontak'));
	}

	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}