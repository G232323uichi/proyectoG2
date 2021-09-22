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
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('welcome_message'); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

	public function vista2()
	{
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('formulario'); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

	public function pruebabd()
	{
		$query=$this->db->get('estudiantes');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
}
