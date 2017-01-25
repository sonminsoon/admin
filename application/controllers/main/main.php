<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: hs
 * Date: 2017-01-25
 * Time: 오후 12:35
 */
class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_m');
        $this->load->vars($this->session->all_userdata());
    }

    public function index()
    {
        $this -> main();
    }

    public function _remap($method)
    {
            $this->load->view('include/head');
            $this->load->view('include/head_top');
            if (method_exists($this, $method)) {
                $this -> {"{$method}"}();
            }
            $this->load->view('include/footer');

    }

    public function main()
    {
        $this->load->view('main');
    }
}