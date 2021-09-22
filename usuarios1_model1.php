<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios1_model1 extends CI_Model {

	public function validar($login,$password)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('login',$login);
		$this->db->where('password',$password);
		return $this->db->get();
	}

	public function lista()      /*lista  la  tabla personas  */
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		return $this->db->get();
	}
	public function lista1()      /*lista  la  tabla personas1  */
	{
		$this->db->select('*');
		$this->db->from('persona1');
		return $this->db->get();
	}

public function recuperarUsuario($idusuarios)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuarios',$idusuarios);
		return $this->db->get();
	}

public function recuperarPersona($idPersona)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('usuarios');
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

public function eliminarPersona($idPersona)   
	{
		$this->db->where('idPersona',$idPersona);
		$this->db->delete('persona');	
	}

/******************************************************************************/
		


}
