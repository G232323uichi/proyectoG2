<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function validar($login,$password)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('login',$login);//login de base datos  sea lo mismo  de el $login de formilario intro
		$this->db->where('password',$password);//pass de bd sea el mismo que el $pass del formu  introducido
		return $this->db->get();
	}


	  public function lista()      //lista  TODOS  la  tabla USUARIOS todo CON  ESTADO 1 si es 0 no  select o lista 
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('estado',1);  //SOLO  ECHO  ESTADO =1
		//$this->db->where('tipo',$tipo='admi'); 
		return $this->db->get();
	}
/******************          ESTUDIANTES     ***********/
 public function listaEST()      //lista  SOLO  la  tabla USUARIOS todo CON  ESTADO 1 y tipo  usu  of lista 
	{
		$this->db->select('*');
		$this->db->from('estudiantes');
		$this->db->where('estado',1);						 //SOLO  ECHO  ESTADO =1	//$this->db->where('tipo',$tipo='usu');                //SOLO  ECHO  tipo = usu
		return $this->db->get();
	}


/****************   M O D I F I C A R   USUARIOS   ADMI recuperarUsuario**************************/


public function recuperarUsuario($idusuarios)   //*recuperar  idusuarios por modificarMMMMMMMMMMM 
	{
	 $this->db->select('*');
	 $this->db->from('usuarios');
	 $this->db->where('idusuarios',$idusuarios); //del  formulario ..a == lo introducido $id por teclad
	 return $this->db->get();
	}

public function modificarUsuarios($idusuarios,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idusuarios',$idusuarios);
		$this->db->update('usuarios',$data);
		
	}
/****************   M O D I F I C A R   USUA  PROFESOR  recuperarUsuario**************************/

public function recuperarUsuarioA($idusuarios)   //*recuperar  idusuarios por modificarMMMMMMMMMMM 
	{
	 $this->db->select('*');
	 $this->db->from('usuarios');
	 $this->db->where('idusuarios',$idusuarios); //del  formulario ..a == lo introducido $id por teclad o form
	 return $this->db->get();
	}


public function modificarUsuariosA($idusuarios,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idusuarios',$idusuarios);
		$this->db->update('usuarios',$data);
		
	}

/******************************  INSERT   USUARIOS   ********************************/


public function agregarUsuarios($data)    // inserta datos en la tabla  usuarios
	{
		$this->db->insert('usuarios',$data);
	}


	public function crearlogin($ci)    //encadena nombre y ci para no  escribir el PASSWORD
{

	//$n=$nom[0];
	//$a=$ap[0];
	$cadena=$ci;
	return strtoupper($cadena);
}

/****************   M O D I F I C A R   ESTUDIANTES   **************************/
                
public function recuperarEstudiantes($idestudiantes)   //*recuperar  idestudiantes por modificarMMMMMMMMMMM 
	{
		$this->db->select('*');
		$this->db->from('estudiantes');
		$this->db->where('idestudiantes',$idestudiates);
		return $this->db->get();
	}


public function modificarEstudiantes($idestudiantes,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idestudiantes',$idestudiantes);
		$this->db->update('estudiantes',$data);
		
	}
/******************  E L I  M I N A R     LO G I CO  USUARIOS  ************************************/

public function Elimiusuarios($idusuarios)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuarios',$idusuarios);
		return $this->db->get();
	}



public function EliminarUsuarios10($idusuarios,$data)  //recuperar  idusuarios pr modificar********************
	{
		
		$this->db->where('idusuarios',$idusuarios);
		$this->db->update('usuarios',$data);
		
	}

/*public function UsuElimina($idusuarios)   //recuperar  idpersona pr modificar 
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('1',$idusuarios);
		return $this->db->get();
	}
*/
/********************E L I M I  N A R   USUARIOS  **************************************************/
public function USU_eliminar()
	{
		$idusuarios=$_POST['idusuarios'];
		$data['elipersona']=$this->usuarios_model->Elimiusuarios($idusuarios);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('PER_eliminar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}
/*
public function Elimiusuarios($idusuarios)  //recuperar  idpersona pr modificar *******************************
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuarios',$idusuarios);
		return $this->db->get();
	}
	//*******************************ELIMINAR  LOGICA  ******************
public function eliminarbased()
		{
	      $idusuarios=$_POST['idusuarios'];
	       $data['estado']=$_POST['estado'];
	       $this->estudiante_model->EliminarPersona10($idPersona,$data);
	       redirect('usuarios/index','refresh');
		}

public function EliminarUsuarios10($idusuarios,$data)  //recuperar  idusuarios pr modificar********************
	{
		
		$this->db->where('idusuarios',$idusuarios);
		$this->db->update('usuarios',$data);
		
	}

*/

/*************************************************************************************/

/*	public function lista()      //lista  la  tabla personas  
	{
		$this->db->select('*');
		$this->db->from('persona');
		return $this->db->get();
	}
*/
	public function lista1()      /*lista  la  tabla personas1  */
	{
		$this->db->select('*');
		$this->db->from('persona1');
		return $this->db->get();
	}

public function recuperarPersona($idPersona)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where('idPersona',$idPersona);
		return $this->db->get();
	}

public function modificarPersona($idPersona,$data)   
/*recuperar  CI,nombre,apellidos pr modificar */
	{
	
		$this->db->where('idPersona',$idPersona);
		$this->db->update('persona',$data);
		
	}
public function agregarPersona($data)
	{
		$this->db->insert('persona',$data);
	}
/**************** ELEIMINACION  FISICA   *************************************/
public function eliminarPersona($idPersona)   
	{
		$this->db->where('idPersona',$idPersona);
		$this->db->delete('persona');	
	}

/******************************************************************************/
		


}
