<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function _remap($method)
	{
		if($method !== 'login' && $method !== 'do_login'){
			$this->load->view('include/head');
			$this->load->view('include/head_top');
			if (method_exists($this, $method)) {
				$this -> {"{$method}"}();
			}
			$this->load->view('include/footer');
		}else{
			$this->$method();
		}

	}
	public function do_login(){

		$id = $this->input->post('id',true);
		$pw = $this->input->post('password',true);

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger  alert-dismissible">', '</div>');

		if($this->form_validation->run('login') == FALSE){
			$this->load->view('login');
		}else{

			$auth_data = array();

			$this->test_m->do_login($id,$pw);
			redirect('/welcome/test');
		}
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function test()
	{
		$this->load->model('test_m');

//		$data['query'] = $this->test_m->test();
//		$this->load->view('include/head',$data);
//		$this->load->view('include/head_top',$data);
		$this->load->view('test');
//		$this->load->view('include/footer',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */