<?php

/**
 *
 */
class CutiController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("CutiModel");
		$this->load->model("PegawaiModel");
		if ($this->session->userdata('user_id') == null) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['cuti'] = $this->CutiModel->tampil();
		$this->load->view("templates/header");
		$this->load->view("cuti/index", $data);
		$this->load->view("templates/footer");
	}

	public function tambah()
	{
		if (isset($_POST['simpan'])) {
			$data = array(
				'cuti_pegawai_id' => $this->input->post('pegawai'),
				'cuti_jenis' => $this->input->post('jeniscuti'),
				'cuti_tgl_mulai' => $this->input->post('tglmulai'),
				'cuti_tgl_selesai' => $this->input->post('tglselesai'),
				'cuti_alasan' => $this->input->post('alasancuti')
			);
			$this->CutiModel->simpan($data);
			$this->session->set_flashdata('alert', 'berhasil_tambah');
			redirect('cuti');
		}
		$data['pegawai'] = $this->PegawaiModel->tampil();
		$this->load->view('templates/header');
		$this->load->view('cuti/tambah', $data);
		$this->load->view('templates/footer');
	}

	public function setujuiKabid($id)
	{
		$data = array(
			'cuti_status_kepala_bidang' => 'disetujui'
		);
		$this->CutiModel->setujui($data, $id);
		$this->session->set_flashdata('alert', 'berhasil_setuju');
		redirect('cuti');
	}

	public function setujuiPimpinan($id)
	{
		$data = array(
			'cuti_status_pimpinan' => 'disetujui'
		);
		$this->CutiModel->setujui($data, $id);
		$this->session->set_flashdata('alert', 'berhasil_setuju');
		redirect('cuti');
	}
}

?>
