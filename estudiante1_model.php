<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante1_model extends CI_Model {

	public function lista()      
	{

		$this->db->select('*');
		$this->db->from('estudiantes1');
		return $this->db->get();
	}	

	public function recuperarEstudiante($idEstudiante)
	{
		$this->db->select('*');
		$this->db->from('estudiantes1');
		$this->db->where('idEstudiante',$idEstudiante);
		return $this->db->get();
	}
	public function modificarEstudiante($idEstudiante,$data)
	{
		$this->db->where('idestudiante',$idEstudiante);
		$this->db->update('estudiantes1',$data);
	}

	public function agregarEstudiante($data)
	{
		$this->db->insert('estudiantes1',$data);
	}

	public function eliminarEstudiante1($idEstudiante)
	{
		$this->db->where('idEstudiante',$idEstudiante);
		$this->db->delete('estudiantes1');

	}	


}
