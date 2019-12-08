<?php
  /**
   *
   */
  class CutiModel extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    public function tampil()
    {
      $this->db->from('tb_cuti');
      $this->db->join('sicuti_pegawai', 'sicuti_pegawai.pegawai_id = tb_cuti.cuti_pegawai_id');
      $this->db->join('sicuti_user', 'sicuti_user.user_pegawai_id = sicuti_pegawai.pegawai_id');
      $query = $this->db->get();
      return $query->result_array();
    }
    public function simpan($data)
    {
      $this->db->insert('tb_cuti',$data);
    }
    public function ambil_id($id)
    {
      $this->db->from('tb_cuti');
      $this->db->join('sicuti_pegawai','sicuti_pegawai.pegawai_id = tb_cuti.cuti_pegawai_id');
      $this->db->join('sicuti_user', 'sicuti_user.user_pegawai_id = sicuti_pegawai.pegawai_id');
      $this->db->where('cuti_pegawai_id',$id);
      $query = $this->db->get();
      return $query->row_array();
    }
    public function setujui($data,$id)
    {
      $this->db->where('cuti_pegawai_id',$id);
      $this->db->update('tb_cuti',$data);
    }
  }

 ?>
