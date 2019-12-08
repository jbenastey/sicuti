<?php
  /**
   *
   */
  class AuthController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('AuthModel');
    }
    public function login()
    {
      if (isset($_POST['login'])) {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
          'user_username'=>$username,
          'user_password'=>md5($password)
        );
        $cek = $this->AuthModel->cek($data);
        if ($cek != null) {
          $session = array(
            'user_id'=>$cek['user_id'],
            'user_username'=>$cek['user_username'],
            'user_password'=>$cek['user_password'],
            'user_pegawai_id'=>$cek['user_pegawai_id'],
            'user_level'=>$cek['user_level']
          );
          $this->session->set_flashdata('alert', 'success_login');
          $this->session->set_userdata($session);
          redirect(base_url());
        }else {
          $this->session->set_flashdata('alert', 'gagalLogin');
          redirect('login');
        }
      }
        $this->load->view('login');
      }
      public function logout()
      {
        $this->session->sess_destroy();
        $this->session->set_flashdata('alert', 'logout_sukses');
        redirect(base_url('login'));
      }
  }

 ?>
