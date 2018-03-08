<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_model {

	public function salva($usuario){
		$this->db->insert("usuarios", $usuario);
	}

	public function buscaPorEmailESenha($email, $senha){
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		//ao invés de pegarmos todas as linhas, pegaremos apenas a primeira, com o método row_array()
		$usuario = $this->db->get("usuarios")->row_array(); 
		return $usuario;
	}

}


