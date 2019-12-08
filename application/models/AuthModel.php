<?php
  /**
   *
   */
  class AuthModel extends CI_MODEL
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    public function cek($data)
    {
      $query = $this->db->get_where('sicuti_user', $data);
      return $query->row_array();
    }
  }

 ?>
