<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
  class Admin extends CI_Controller
  {
    function getLogin($nom,$mdp)
    {
      $id = 0;
      $query = $this->db->query('Select idamin from admin where nom='.$nom.' and password=sha1('.$mdp.')');
      foreach ($query->result_array() as $row)
      {
        $id = $row['idadmin'];
      }
      return id;
    }
  }

 ?>
