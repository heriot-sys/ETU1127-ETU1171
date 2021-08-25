<?php
  /**
   *
   */
  class Controller extends CI_Controller
  {

    public function log($id)
    {
      $this->load->model('fonction_login.php');
      $id_admin = $this->Admin->getLogin($id);
      if (id_admin == 0) {
        redirect('controller/page');
      }
      else {
        redirect('controller/succes');
      }
    }
    public function page()
    {
      $this->load->view('welcome_message');
    }
    public function Succes()
    {
      $this->load->view('admin');
    }
  }

 ?>
