<?php
/**
 * Created by PhpStorm.
 * User: hs
 * Date: 2017-01-20
 * Time: 오후 2:24
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Auth_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * 아이디 비밀번호 체크
     *
     * @param array $auth 폼 전송받은 아이디, 비밀번호
     * @return array
     */
    function login($auth)
    {
        $sql = "SELECT id,idx, password FROM admin WHERE id = '" . $auth['id'] . "' ";

        $query = $this -> db -> query($sql);
        $result = $query->row_array();

        if($result) {
            $depw = $this->encrypt->decode($result['password']);
        }else{
            return 'exist';
        }
        if($depw == $auth['password']){
            return $query -> row();
        }else{
            return FALSE;
        }

    }
    /**
     * 관리자등록 id,name,password
     *
     * @param array $user_data 폼 전송받은 아이디, 비밀번호, 이름
     * @return array
     */
    function register($user_data)
    {
        $this->db->insert('admin', $user_data);
        $last_id = $this->db->insert_id();

        if($last_id){
            return $last_id;
        }else{
            return "";
        }
    }
    /**
     * 관리자아이디 중복체크 id
     *
     * @param array $id
     * @return array
     */
    function id_chk($id)
    {
        $this->db->select('id')->from('admin')->where('id', $id);
        $query = $this->db->get();
        $result = $query->num_rows();

        return $result;

    }


}