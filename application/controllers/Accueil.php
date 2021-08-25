<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $this->load->model('Caisse');
		// $c=new Caisse();
		// $c=$c->listeCaisse();
		// $data=array();
		// $data["caisse"]=$c;
		$data['vue']='accueil.php';
		$this->load->view('template',$data);
	}	

	public function choix(){
		$data['idcaisse']=$_GET['num'];
		$data['vue']='Caisse.php';
		$this->load->view('template',$data);
	}

	
	
}
