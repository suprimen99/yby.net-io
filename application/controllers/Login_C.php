<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_C extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('Login') == true) {
            redirect('Monitoring_sensor');
        }
		$this->load->model('Login_M');
    }

	public function index()
		{
		 $this->form_validation->set_rules('username', 'Username', 'trim|required');
		 $this->form_validation->set_rules('password', 'Password', 'trim|required');
	
		if($this->form_validation->run() == false){
			$data['judul'] = 'Login';
			$this->load->view('templates/header', $data);
			$this->load->view('Auth/Login');
			} else {
				//validation success
				$this->_Login();
			}
			
		}
	
	
		private function _Login() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
	
			$user = $this->db->get_where('tb_user', ['username' => $username])->row_array();
	
			// jika usernya ada
			
				// jika usernya aktif
				if ($user['id'] >= 0) {
					// cek password
					if (password_verify($password, $user['password'])) {
						$data = [
							'Login' => true,
							'username' => $user['username']
						];
	
						$this->session->set_userdata($data);
						redirect('Monitoring_sensor');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					wrong password!
				  </div>');
						redirect('Login_C');
					} 
				}
		}

		public function registration()
    {
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[4]|matches[password2]',
            [
                'matches' => 'Password dont match!',
                'min_length' => 'Password to short!'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('Auth/registrasi');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];
            $this->Login_M->setInsert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. please Login!</div>');
            redirect('Login_C');
        }
    }

	// public function logout() {
	// 	$this->session->unset_userdata('username');
	// 	$this->session->unset_userdata('Login');

	// 	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	// 	you have been logged out!
	//   </div>');
	// 	redirect('Login_C');
	// }
}   