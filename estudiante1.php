<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Estudiante1 extends CI_Controller {

	public function index1()
	{
		$lista=$this->estudiante1_model->lista();
		$data['estudiantesa']=$lista;


		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_lista1',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}



	public function modificar1()
	{
		$idEstudiante=$_POST['idEstudianteA'];
		$data['infoestudiante']=$this->estudiante1_model->recuperarEstudiante($idEstudiante);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_modificar1',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

	public function modificarbd1()
	{
	$idEstudiante=$_POST['idEstudianteA'];
		$data['nombre']=$_POST['nombre'];	
		$data['pApellido']=$_POST['pApellido'];	
		$data['sAplellido']=$_POST['sAplellido'];
		$data['Nota']=$_POST['Nota'];
		$this->estudiante1_model->modificarEstudiante($idEstudiante,$data);
		redirect('estudiante1/index1','refresh');	
	}
		
		public function agregar1()
	{
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_agregar1'); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

	public function agregarbd1()
	{
		$data['nombre']=$_POST['nombre'];	
		$data['pApellido']=$_POST['pApellido'];	
		$data['sAplellido']=$_POST['sAplellido'];
		$data['Nota']=$_POST['Nota'];
		$this->estudiante1_model->agregarEstudiante($data);
		redirect('estudiante1/index1','refresh');	 //actualizo la base de datos
	}

	public function ILIMINARBD1()
	{
		$idEstudiante=$_POST['idEstudianteA'];
		$this->estudiante1_model->eliminarEstudiante1($idEstudiante);
		redirect('estudiante1/index1','refresh');
	}

	/*********************************************************************/
/*		public function index1()
	{
		$lista=$this->estudiante_model1->lista();
		$data['estudiantes']=$lista;


		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_lista',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}
*/
	
	

}
