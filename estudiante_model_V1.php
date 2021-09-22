<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {

/*********************************** TODAS  LAS  TABLAS  *********************/
	public function lista()      //lista  la  tabla  estudiantes  
	{
		$this->db->select('*');
		$this->db->from('estudiantes');
		//$this->db->where('1',$estado);
		return $this->db->get();
	}

	public function lista1()      /*lista  la  tabla profesores */
	{
		$this->db->select('*');
		$this->db->from('profesores');
		return $this->db->get();
	}

	public function lista2()      /*lista  la  tabla insumos_de_natacion  */
	{
		$this->db->select('*');
		$this->db->from('insumos_natacion');
		return $this->db->get();
	}

	public function lista3()      /*lista  la  tabla productos_ofrecidos */
	{
		$this->db->select('*');
		$this->db->from('productos_ofrecidos');
		return $this->db->get();
	}


/******************************   INSERTAR   USUARIOS   ********************************/
/*public function crearlogin($ci)    //encadena nombre y ci
{

	//$n=$nom[0];
	//$a=$ap[0];
	$cadena=$ci;
	return strtoupper($cadena);
}

public function agregarUsuarios($data)    // inserta datos en la tabla  usuarios
	{
		$this->db->insert('usuarios',$data);
	}
 */
/************************************************************************************/
/*****************************  MODIFICAR   ESTUDIANTES   ******************/
	 
public function recuperarEstudiantes($idEstudiantes)   //*recuperar  idusuarios por modificarMMMMMMMMMMM 
	{
		$this->db->select('*');
		$this->db->from('estudiantes');
		$this->db->where('idestudiantes',$idestudiantes);
		return $this->db->get();
	}


public function modificarEstudiantes($idestudiantes,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idestudiantes',$idestudiantes);
		$this->db->update('estudiantes',$data);
		
	}

/*******************************   MODIFICAR   USUARIOS *** NO ************/
/*
public function recuperarUsuario($idusuarios)            //recuperar  idusuarios pr modificar 
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuarios',$idusuarios);
		return $this->db->get();
	}

public function modificarUsuarios($idusuarios,$data)   
               													//recuperar  CI,nombre,apellidos por modificar 
	{
		$this->db->where('idusuarios',$idusuarios);
		$this->db->update('usuarios',$data);
		
	}
*/
/*********************************************************************************/

public function recuperarPersona($idPersona)   //recuperar  idpersona pr modificar 
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
/****************************************************************/

public function agregarPersona($data)
	{
		$this->db->insert('persona',$data);
	}



/*****************************  ELIMINADO FISICO ***********************/

public function eliminarPersona($idPersona)   
	{
		$this->db->where('idPersona',$idPersona);
		$this->db->delete('persona');	
	}

/******************ELIMINAR LOGICA PERSONA ********************************/

public function ElimiPersona($idPersona)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where('idPersona',$idPersona);
		return $this->db->get();
	}

public function EliminarPersona10($idPersona,$data)   /*recuperar  idpersona pr modificar */
	{
		
		$this->db->where('idPersona',$idPersona);
		$this->db->update('persona',$data);
		
	}

 /******************ELIMINAR LOGICA  USUARIO ********************************/              
public function ElimiUsuario($idusuarios)   /*recuperar  idusuarios pr modificar */
	{         
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuarios',$idusuarios);  // idusuarios de la BD  con id recubido de teclado
		return $this->db->get();
	}   

public function EliminarUsuarios10($idusuarios,$data)   /*recuperar  idpersona pr modificar */
	{
		$this->db->where('idusuarios',$idusuarios);
		$this->db->update('usuarios',$data);	
	}

//*********************************************************************************************************               



public function Elimina($idPersona)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where('1',$idPersona);
		return $this->db->get();
	}

public function UsuElimina($idusuarios)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('1',$idusuarios);
		return $this->db->get();
	}

/******************   FIN   ELIMINAR LOGICA PERSONA ********************************/





/******************************************************************************/

	public function recuperarEstudiante($idEstudiante)
	{
		$this->db->select('*');
		$this->db->from('estudiantes');
		$this->db->where('idEstudiante',$idEstudiante);
		return $this->db->get();
	}
	public function modificarEstudiante($idEstudiante,$data)
	{
		$this->db->where('idestudiante',$idEstudiante);
		$this->db->update('estudiantes',$data);
	}

	public function agregarEstudiante($data)
	{
		$this->db->insert('estudiantes',$data);
	}

	public function eliminarEstudiante($idEstudiante)
	{
		$this->db->where('idestudiante',$idEstudiante);
		$this->db->delete('estudiantes');
	}	


}
