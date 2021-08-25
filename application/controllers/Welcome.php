<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		
	}
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
	public function search ($id) {
		$output = '';
		$nom = $_POST["query"];
		$output .= '
	  	<div class="table-responsive">
	   <table class="table table bordered">
	    <tr>
	     <th>Customer Name</th>
	     <th>Address</th>
	     <th>City</th>
	     <th>Postal Code</th>
	     <th>Country</th>
	    </tr>
	 ';
		$valiny = array();
		$query = $this->db->query('Select * from categorie where nom like %'.$nom.'%');
		$indice = 0;
		foreach ($query->result_array() as $row) {
			$output .= '
		   <tr>
		    <td>'.$row["nom"].'</td>
		    <td>'.$row["image"].'</td>
		    <td>'.$row["prix"].'</td>
		    <td>'.$row["stock"].'</td>
		    <td>'.$row["idproduit"].'</td>
		   </tr>
		  ';
		}
		echo $output;
	}

}
