<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function novo(){

		$usuario = array(
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post("email"),
			"senha" => md5($this->input->post("senha"))
		);

		//$this->load->database(); //carregado no config/autoload : autoload['libraries']
		$this->load->model("usuarios_model");
		$this->usuarios_model->salva($usuario);
		$this->load->view("usuarios/novo");
		//$this->output->enable_profiler(TRUE);
	}
}