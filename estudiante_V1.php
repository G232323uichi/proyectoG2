<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Estudiante extends CI_Controller {

/********************  VISTA  DE  TRES   SESIONES ***********************/
public function index()     //LOGIN   ADMINISTRADOR
	{
		$lista=$this->usuarios_model->lista();
		$data['EST']=$lista;
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('USU',$data); //contenido  Administrador
		$this->load->view('inc_footer.php');  //archivos del footer
		
	}

 public function index2()  //LOGIN  PROFESOR
	{
		
		$lista=$this->usuarios_model->listaUsu();
		$data['EST']=$lista;

		$this->load->view('inc_head.php');    //archivos de cabecer
		$this->load->view('USUA',$data);
		$this->load->view('inc_footer.php');  //archivos del footer
	}

  public function index1()   //LOGIN usuarios
	{
		
		$lista=$this->usuarios_model->listaUsu();
		$data['EST']=$lista;

		$this->load->view('inc_head.php');    //archivos de cabecer
		$this->load->view('USUB',$data);
		$this->load->view('inc_footer.php');  //archivos del footer
	}
 /*****************************************************************************/
/****************************   TABLA  2   REG ESTUDIANTES *********************/ 

public function index3() // REGISTRO  DE  ESTUDIANTES  GESTIONADOS  POR  ADMINISTRADOR
	{
		$lista=$this->estudiante_model->lista();
		$data['EST']=$lista;
	

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
		
	}

/****************************   TABLA  3  HORARIOS PROFE *********************************/
 
public function index4()  //REGISTRO HORARIOS DE PROFESORES
	{
		$lista=$this->estudiante_model->lista1();
		$data['EST1']=$lista;
	

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST1',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
		
	}

/****************************   TABLA  4   INSUMOS   ************************************/ 

public function index5()  //REGISTRO  DE  INSUMOS  DE  NATACION
	{
		$lista=$this->estudiante_model->lista2();
		$data['EST2']=$lista;
	

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST2',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
		
	}

/****************************   TABLA  5  ************************************/ 

public function index6()
	{
		$lista=$this->estudiante_model->lista3();
		$data['EST3']=$lista;
	

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST3',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
		
	}

/************************************************************************************/


/************************** M O D I F I C A R    ESTUDIANTES    **********************/
 /******  MODIFICAR  EST  Admi  para      *******/

   

public function ESTmodificar()  
	{
		$idestudiantes=$_POST['idestudiantes'];
	  $data['infousuario']=$this->usuarios_model->recuperarEstudiantes($idestudiantes);
      // $data['EST']=$this->usuarios_model->recuperarEstudiantes($idestudiantes);
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST_modificar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

      //MODIFICAR  BASE DATOS   DE   
                    
 public function ESTmodificarbd() 
	{
		$idestudiantes=$_POST['idestudiantes'];
		

		$data['nombres']=$_POST['nombre'];     //escrito BD  tiene q ser = escrito  POR MI EN formulario
	    $data['primerApellido']=$_POST['papellido'];    //escrito BD  tiene q ser = escrito formulario
		$data['segundoApellido']=$_POST['sapellido'];
		//$data['nivel']=$_POST['nivel'];
		$data['ci']=$_POST['ci'];
		//$data['tipo']=$_POST['tipo'];
     //NO...  $this->estudiante_model->modificarUsuarios($idusuarios,$data);   
		$this->usuarios_model->modificarEstudiantes($idestudiantes,$data);   
		redirect('estudiantes/index','refresh');
	}

 public function USUsalir() 
{
redirect('estudiante/index','refresh');
	
}

/*******************************************************************************************************/
/*******************   I N  S  E  R  T A  R  *** U S U A R I O S     USU *******************************/
				
	public function USU_agregar()
	{
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('USU_agregar');     // formulario  para  agregar
		//$this->load->view('TEST');          //contenido del  formulario prueba
		$this->load->view('inc_footer.php');  //archivos del footer
	}

public function USU_agregarbased()
	{ // BASE                    FORMULARIO
		$data['nombres']=$_POST['nombres'];
		$data['primerApellido']=$_POST['primer_apellido'];  /*escribo  BD  tiene q ser = escrito formulario*/
		$data['segundoApellido']=$_POST['segundo_apellido'];
		$data['ci']=$_POST['ci'];
		$data['tipo']=$_POST['tipo'];  // es  usu---profe--admi 


		//$data['nivel']=$_POST['nivel'];
		$data['login']=$_POST['login'];

		//$nom=$_POST['nombres'];
		//$ap=$_POST['primerApellido'];
		$ci=$_POST['ci'];

		$data['password']=md5($this->usuarios_model->crearlogin($ci));
       
       	//$data['password']=$_POST['pass']);
		//$this->estudiante_model->agregarUsuarios($data); 
			$this->usuarios_model->agregarUsuarios($data);   
		redirect('estudiante/index','refresh');
	}

 /*******************************                   *********************************/
 /***********************************************************************************/


	public function index666()
	{
		$lista=$this->estudiante_model1->lista();
		$data['EST']=$lista;
	

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST',$data); //contenido
		 // $this->load->view('pru2.php');

		$this->load->view('inc_footer.php');  //archivos del footer
		
	}
/**********************************************************************************/
    public function index11()
	{
		
		$lista=$this->estudiante_model->lista();
		$data['EST']=$lista;

		$this->load->view('inc_head.php');    //archivos de cabecer
		$this->load->view('ESTB',$data);
		$this->load->view('inc_footer.php');  //archivos del footer
	}

 public function index222()   //se  cambio index2 a index22
	{
		
		$lista=$this->estudiante_model->lista();
		$data['EST']=$lista;

		$this->load->view('inc_head.php');    //archivos de cabecer
		$this->load->view('ESTA',$data);
		$this->load->view('inc_footer.php');  //archivos del footer
	}

/**********************************   MODIFICAR  NO   **********************************************/
/*
	public function USUmodificar()   //******  MODIFICAR  USU  Admi  para      **************
	{
		$idusuarios=$_POST['idusuarios'];
		$data['infousuario']=$this->usuarios_model->recuperarUsuario($idusuarios);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('USU_modificar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

	public function USU_eliminar()
	{
		$idusuarios=$_POST['idusuarios'];
		$data['elipersona']=$this->estudiante_model->ElimiUsuario($idusuarios);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('USU_eliminar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

              //********  MODIFICAR  BASE DATOS   DE   ADMI  ********

	public function USUmodificarbased() 
	{
	    $idusuarios=$_POST['idusuarios'];
		

		$data['nombres']=$_POST['nombres']; 
	    $data['primerApellido']=$_POST['primer_apellido'];  //escrito BD  tiene q ser = escrito formulario
		$data['segundoApellido']=$_POST['segundo_apellido'];
		$data['nivel']=$_POST['nivel'];
		$data['ci']=$_POST['ci'];
		$data['tipo']=$_POST['tipo'];
        $this->estudiante_model->modificarUsuarios($idusuarios,$data);   
	//	$this->usuarios_model->modificarUsuarios($idusuarios,$data);   
		redirect('estudiante/index','refresh');
	}
/*
/****************************************************************************************************/

	public function modificar()   /******  MODIFICAR  ESTA  para  prof    *******/
	{
		$idPersona=$_POST['idPersona'];
		$data['infopersona']=$this->estudiante_model->recuperarPersona($idPersona);
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('PER_modificar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

    public function modificarbased() 
	{
		$idPersona=$_POST['idPersona'];
		

		$data['nombres']=$_POST['nombres']; 
	    $data['primerApellido']=$_POST['primer_apellido'];  /*escrito BD  tiene q ser = escrito formulario*/
		$data['segundoApellido']=$_POST['segundo_apellido'];
		$data['carril']=$_POST['carril'];

		$this->estudiante_model->modificarPersona($idPersona,$data);   
		redirect('estudiante/index','refresh');
	}

	public function agregarP()  
	{
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST_agregarP'); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

	public function agregarbased ()
	{
		$data['nombres']=$_POST['nombres'];
		$data['primerApellido']=$_POST['primer_apellido'];  /*escrit0 BD  tiene q ser = escrito formulario*/
		$data['segundoApellido']=$_POST['segundo_apellido'];
		$data['ci']=$_POST['ci'];
		$this->estudiante_model->agregarPersona($data);   
		redirect('estudiante/index','refresh');
	}
	public function EST_eliminar() 
	{
		$idPersona=$_POST['idPersona'];
		$this->estudiante_model->eliminarPersona($idPersona);
		redirect('estudiante/index','refresh');
	}

/**********************     ELIMINAR  ****************************************/
	public function PER_eliminar()
	{
		$idPersona=$_POST['idPersona'];
		$data['elipersona']=$this->estudiante_model->ElimiPersona($idPersona);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('PER_eliminar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}
	public function eliminarbased()
	{
	    $idPersona=$_POST['idPersona'];
	    $data['estado']=$_POST['estado'];
	    $this->estudiante_model->EliminarPersona10($idPersona,$data);
	    redirect('estudiante/index','refresh');
   }

/******************************************E L I MI N A R      U S U A R I O  S**************/
	public function USU_eliminar()
	{
		$idusuarios=$_POST['idusuarios'];
		$data['elipersona']=$this->estudiante_model->ElimiUsuario($idusuarios);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('USU_eliminar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}
                    
	public function USU_eliminarbased ()
	{
	    $idusuarios=$_POST['idusuarios'];
	    $data['estado']=$_POST['estado'];
	    $this->estudiante_model->EliminarUsuarios10($idusuarios,$data);
	    redirect('estudiante/index','refresh');
   }










/****************'usuarios/elim***************************************************************/

	public function modificar1()
	{
		$idEstudiantee=$_POST['idEstudiante'];
		$data['infoestudiante']=$this->estudiante_model->recuperarEstudiante($idEstudiantee);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_modificar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}



	public function modificarbd()
	{
	$idEstudiante=$_POST['idEstudiante'];
		$data['nombre']=$_POST['nombre'];	
		$data['pApellido']=$_POST['pApellido'];	
		$data['sAplellido']=$_POST['sAplellido'];
		$data['Nota']=$_POST['Nota'];
		$this->estudiante_model->modificarEstudiante($idEstudiante,$data);
		redirect('estudiante/index','refresh');	
	}
		


		public function agregar()
	{
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_agregar'); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

	public function agregarbd()
	{
		$data['nombre']=$_POST['nombre'];	
		$data['pApellido']=$_POST['pApellido'];	
		$data['sAplellido']=$_POST['sAplellido'];
		$data['Nota']=$_POST['Nota'];
		$this->estudiante_model->agregarEstudiante($data);
		redirect('estudiante/index','refresh');	 //actualizo la base de datos
	}
	
	public function eliminarbd()
	{
		$idEstudiante=$_POST['idEstudiant'];
		$this->estudiante_model->eliminarEstudiante($idEstudiante);
		redirect('estudiante/index','refresh');
	}
/*
	public function ILIMINARBD1()
	{
		$idEstudiante=$_POST['idEstudiante'];
		$this->estudiante_model1->eliminarEstudiante1($idEstudiante);
		redirect('estudiante/index','refresh');
	}

*/
	/*********************************************************************/
		public function index22
		()
	{
		$lista=$this->estudiante_model->lista1();
		$data['estudiantes']=$lista;


		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_lista',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}


	

}
