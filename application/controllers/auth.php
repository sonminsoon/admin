<?php
/**
 * Created by PhpStorm.
 * User: hs
 * Date: 2017-01-20
 * Time: 오후 2:21
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 사용자 인증 컨트롤러
 */
class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_m');
        $this->load->library('encrypt');
    }

    public function index()
    {
        $this -> login();
    }

    public function _remap($method)
    {
        if (method_exists($this, $method)) {
            $this -> {"{$method}"}();
        }

    }

    public function login()
    {
        $this -> form_validation -> set_rules('id', '아이디', 'required|alpha_numeric');
        $this -> form_validation -> set_rules('password', '비밀번호', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger  alert-dismissible">', '</div>');

        if ($this -> form_validation -> run() == TRUE) {
            $auth_data = array(
                'id' => $this -> input -> post('id', TRUE),
                'password' => $this -> input -> post('password', TRUE)
            );

            $result = $this -> auth_m -> login($auth_data);
//            var_dump($result);
            if($result == 'exist'){
                alert('아이디가 존재하지  않습니다.','/auth/login');
            }
            if ($result) {
                $newdata = array(
                    'idx'      => $result -> idx,
                    'username' => $result -> id,
//                    'email' => $result -> email,
                    'logged_in' => TRUE
                );

                $this -> session -> set_userdata($newdata);

                alert('로그인 되었습니다.', '/main/main');
                exit;
            } else {
                alert('아이디나 비밀번호를 확인해 주세요.', '/auth/login');
                exit;
            }
        } else {
            $this -> load -> view('auth/login');
        }
    }

    public function logout()
    {
        $this -> load -> helper('alert');
        $this -> session -> sess_destroy();

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        alert('로그아웃 되었습니다.', '/');
        exit;

    }

    public function register()
    {
        $this -> form_validation -> set_rules('id', '아이디', 'required|alpha_numeric|callback_id_chk[' . $this->input->post('id') . ']');
        $this -> form_validation -> set_rules('mobilephone', '핸드폰번호', 'required|numeric|max_length[11]s');
        $this -> form_validation -> set_rules('password', '비밀번호', 'required');
        $this -> form_validation -> set_rules('password_conf', '비밀번호확인', 'required|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger  alert-dismissible">', '</div>');

        if($this->form_validation->run() == true){

            $user_data = array(
                'id'          => $this->input->post('id',true),
                'password'    => $this->encrypt->encode($this->input->post('password',true)),
                'name'        => $this->input->post('name',true),
                'mobilephone' => preg_replace("/^([0-9]{3})([0-9]*)([0-9]{4})$/", "$1-$2-$3", $this->input->post('mobilephone',true)),
                'startdate'   => date('Y-m-d H:m:s'),
                'rating'     => '10'
            );
            $result = $this->auth_m->register($user_data);

            if($result){
                alert('정상적으로 등록되었습니다.', '/auth/login');
            }else{
                alert('등록에 실패 했습니다.', '/auth/register');
            }
        }else{
           $this->load->view('auth/register');
        }
    }

    public function id_chk($id)
    {
        $result['list'] = $this->auth_m->id_chk($id);
        if($result['list'] >0){
            $this->form_validation->set_message('id_chk','중복 아이디가 존재합니다.');
            return false;
        }else{

            return $id;
        }
    }

}