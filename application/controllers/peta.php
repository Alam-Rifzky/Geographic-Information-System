<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peta extends CI_Controller {

	public function index()
	{
		$baca['peta']=$this->db->get('tbl_lokasi')->result();
		if($this->session->userdata('posisiku')){
			$baca['awal']= $this->session->userdata('posisiku');
		}else{
			$baca['awal']= '-6.597929,106.798718';	
		}
		$baca['LOKASI'] = 'Lokasi Saya Sekarang';
		$this->load->view('header',$baca);
		$this->load->view('homepage',$baca);
		$this->load->view('footer');
	}

	public function kunjungi($id=null)
	{
		$baca['peta']=$this->db->get('tbl_lokasi')->result();
		if($this->session->userdata('posisiku')){
			$baca['awal']= $this->session->userdata('posisiku');
		}else{
			$baca['awal']= '-6.597929, 106.798718';	
		}
		$baca['LOKASI'] = 'Lokasi Saya Sekarang';
		$baca['detail']=$this->db->get_where('tbl_lokasi',array('LANG'=> $id,'LON'=>$this->uri->segment(4)))->row();
		$this->load->view('header2',$baca);
		$this->load->view('kunjungi',$baca);
		$this->load->view('footer');
	}

	public function posisisaya($id=null)
	{
		$baca['peta']=$this->db->get('tbl_lokasi')->result();
		if($this->session->userdata('posisiku')){
			$baca['awal']= $this->session->userdata('posisiku');
		}else{
			$baca['awal']= '-6.597929,106.798718';	
		}
		$baca['LANG']= $id;
		$baca['LON'] = $this->uri->segment(4);
		$baca['LOKASI'] = 'Lokasi Saya Sekarang';
		$this->session->set_userdata('posisiku',$id.','.$this->uri->segment(4));
		$this->load->view('header',$baca);
		$this->load->view('posisi',$baca);
		$this->load->view('footer');
	}

	public function rute($id=null)
	{
		$baca['peta']=$this->db->get('tbl_lokasi')->result();
		if($this->session->userdata('posisiku')){
			$baca['awal']= $this->session->userdata('posisiku');
		}else{
			$baca['awal']= '-6.597929,106.798718';	
		}
		$baca['start']= $id;
		$baca['end'] = $this->uri->segment(4);
		$baca['LOKASI'] = 'Lokasi Saya Sekarang';
		$this->load->view('header',$baca);
		$this->load->view('rute',$baca);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */