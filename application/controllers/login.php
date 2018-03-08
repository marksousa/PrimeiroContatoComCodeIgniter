<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function autenticar() {
		$this->load->model("usuarios_model");
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
		$usuario = $this->usuarios_model->buscaPorEmailESenha($email, $senha);

		if ($usuario) {
			// $dados = array("mensagem" => "Logado com Sucesso!");
			$this->session->set_userdata("usuario_logado", $usuario);
			$this->session->set_flashdata("success", "Logado com Sucesso!");
		} else {
			// $dados = array("mensagem" => "Usuário ou Senha Inválida!");
			$this->session->set_flashdata("danger", "Usuário ou Senha Inválida!");
		}
		// $this->load->view('login/autenticar', $dados);
		redirect("/");
	}

	public function logout() {
		$this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata("success", "Deslogado com Sucesso!");
		// $this->load-view("login/logout");
		redirect("/");
	}
}
