<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['vue']='accueil.php';
		$this->load->view('template',$data);
	}	

	public function choix(){
		$data['idcaisse']=$_GET['num'];
		$data['vue']='Caisse.php';
		$this->load->view('template',$data);
	}

	public function categorie(){
		$data['idcategorie']=$_GET['id'];
		$data['vue']='ListeCategorie.php';
		$this->load->view('template',$data);
	}

	
	
}
